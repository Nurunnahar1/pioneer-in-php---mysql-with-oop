<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['comment_submit'] == 'Create Comment') {
//     //get form values
//     $comment_user = $_POST['comment_user_name'];
//     $comment_content = $_POST['comment_content'];
//     $comment_id = $_POST['comment_id'];

//     //upload comment user photo
//     $comment_user_photo = fileUpload([
//         "name" => $_FILES["comment_user_photo"]["name"],
//         "tmp_name" => $_FILES["comment_user_photo"]["tmp_name"],
//     ], "media/comment_user/");

//     if (!empty($_FILES["comment_photo"]["name"])) {
//         $comment_photo = fileUpload([
//             "name" => $_FILES["comment_photo"]["name"],
//             "tmp_name" => $_FILES["comment_photo"]["tmp_name"],
//         ], "media/comments/");
//     }

//     $commentData = json_decode(file_get_contents('db/posts.json'), true);
//     $commentUpdate = [];

//     foreach ($commentUpdate as $commentItem) {
//         if ($commentItem["id"] == $comment_id) {
//             array_push($commentItem["comments"], [
//                 "id" => createID("COM"),
//                 "user" => $comment_user,
//                 "user_photo" => $comment_user_photo,
//                 "comment_photo" => $comment_photo ?? null,
//                 "comment_content" => $comment_content ?? null,
//             ]);
//         }

//         array_push($commentUpdate, $commentItem);
//     }

//     file_put_contents("db/posts.json", json_encode($commentUpdate));


//      header("Location:index.php");
// }

 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comment_submit'])) {
    // Get form values
    $comment_user = $_POST['comment_user_name'];
    $comment_content = $_POST['comment_content'];
    $comment_id = $_POST['comment_id'];

    // Upload comment user photo
    $comment_user_photo = fileUpload([
        "name" => $_FILES["comment_user_photo"]["name"],
        "tmp_name" => $_FILES["comment_user_photo"]["tmp_name"],
    ], "media/comment_user/");

    // Upload optional comment photo

    $comment_photo= null;
    if (!empty($_FILES["comment_photo"]["name"])) {
        $comment_photo = fileUpload([
            "name" => $_FILES["comment_photo"]["name"],
            "tmp_name" => $_FILES["comment_photo"]["tmp_name"],
        ], "media/comments/");
    }

    // Load existing post data
    $commentData = json_decode(file_get_contents('db/posts.json'), true);
    $commentUpdate = [];

    foreach ($commentData as $commentItem) {
        if ($commentItem["id"] == $comment_id) {
            if (!isset($commentItem["comments"])) {
                $commentItem["comments"] = []; // Initialize comments array if it doesn't exist
            }
            // Add the new comment
            $commentItem["comments"][] = [
                "id" => createID("COM"),
                "user" => $comment_user,
                "user_photo" => $comment_user_photo,
                "comment_photo" => $comment_photo ,
                "comment_content" => $comment_content ?? null,
            ];
        }
        // Push each post item into commentUpdate, with or without the new comment
        $commentUpdate[] = $commentItem;
    }

    // Save the updated data back to posts.json
    file_put_contents("db/posts.json", json_encode($commentUpdate));

    // Redirect back to index.php
    header("Location:index.php");
}
?>