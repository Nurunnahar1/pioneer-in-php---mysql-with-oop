<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['post_submit'] == "Post") {
    //get values from input
    $user_name = $_POST['post_user_name'];
    $post_content = $_POST['post_content'];

    if (empty($user_name) || !$_FILES['post_user_photo']['name']) {
        echo createAlert("Auth not found !");
    } else {
        // auth photo upload
       $user_photo = fileUpload([
            "tmp_name" => $_FILES['post_user_photo']['tmp_name'],
            "name" => $_FILES['post_user_photo']['name'],
        ], "media/user_photo/");

        //post photos upload
        $post_photos = [];

        if (!empty($_FILES['post_photos']['name'][0])) {
            for ($i = 0; $i < count($_FILES['post_photos']['name']); $i++) {
              $post_photo_item =  fileUpload([
                    "tmp_name" =>
                    $_FILES['post_photos']['tmp_name'][$i],
                    "name" => $_FILES['post_photos']['name'][$i],
                ], "media/posts/");

                array_push($post_photos, $post_photo_item);
            }
        }

        //post video upload
        $post_video = null;
        if ($_FILES['post_video']['name']) {
           $post_video = fileUpload([
                "tmp_name" => $_FILES['post_video']['tmp_name'],
                "name" => $_FILES['post_video']['name'],
            ], "media/videos/");
        }


        //data throw in database
        $posts = json_decode(file_get_contents('db/posts.json'), true);
        array_push($posts,[
            "id" => createID("POST"),
            "user_name" => $user_name,
            "user_photo" => $user_photo,
            "post_content" => $post_content ? $post_content : null,
            "post_photos" => $post_photos,
            "post_video" => $post_video,
            "comments" => [],
            "likes" => 0,
            "share" => 0,
            "createdAt" => time(),
            "updaeAt" => null
        ]);
        file_put_contents("db/posts.json", json_encode($posts));




    }
 
}