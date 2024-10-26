<?php   
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['comment_submit'] == 'Create Comment'){
    //get form values
     $comment_user = $_POST['comment_user_name'];
     $comment_content = $_POST['comment_content'];
    $comment_id = $_POST['comment_id'];


    //upload comment user photo
   $comment_user_photo = fileUpload([
        "name" => $_FILES["comment_user_photo"]["name"],
        "tmp_name" => $_FILES["comment_user_photo"]["tmp_name"],
    ], "media/comment_user/");


    if(!empty($_FILES["comment_photo"]["name"])){
          $comment_photo =  fileUpload([
            "name" => $_FILES["comment_photo"]["name"],
            "tmp_name" => $_FILES["comment_photo"]["tmp_name"],
            ], "media/comments/");
    }
}



 