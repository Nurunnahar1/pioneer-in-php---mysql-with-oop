<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['post_submit'] == "Post") {
    //get values from input
    $user_name = $_POST['post_user_name'];
    $post_content = $_POST['post_content'];

    // fileUpload($_FILES['post_user_photo'], "media/user_photo/");

    // auth photo upload
    fileUpload([
        "tmp_name" => $_FILES['post_user_photo']['tmp_name'],
        "name" => $_FILES['post_user_photo']['name'],
    ], "media/user_photo/");

//post photo upload
 if($_FILES['post_photo']['name']){
       for ($i = 0; $i < count($_FILES['post_photos']['name']); $i++) { fileUpload([ "tmp_name"=>
           $_FILES['post_photos']['tmp_name'][$i],
           "name" => $_FILES['post_photos']['name'][$i],
           ], "media/posts/");
           }
 }

    //post video upload
    if ($_FILES['post_video']['name']) {
        fileUpload([
            "tmp_name" => $_FILES['post_video']['tmp_name'],
            "name" => $_FILES['post_video']['name'],
        ], "media/videos/");
    }

}
