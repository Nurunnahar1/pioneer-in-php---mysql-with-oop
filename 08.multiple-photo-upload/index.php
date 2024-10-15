<?php
if (file_exists(__DIR__ . '/autoload.php')) {
    require_once __DIR__ . '/autoload.php';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="asstes/style.css">
</head>

<body>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];

        $tmp_name = $_FILES['photo_name']['tmp_name'];
        $photo_name = $_FILES['photo_name']['name'];
 
        //form validation 
        if(empty($name) || empty($phone) || empty($photo_name)){
            $msg = createAlert("All field are required !");
        }
         else{
            //upload photo
            move_uploaded_file($tmp_name, 'photos/' . $photo_name);
            $msg = createAlert("Data stored...");
            reset_form();

            //upload gallery photos
          for ($i = 0; $i < count($_FILES['photo_gallery']['name']); $i++) {
            //file information
            $gallery_photos_name = $_FILES['photo_gallery']['name'][$i];
            $gallery_tmp_name = $_FILES['photo_gallery']['tmp_name'][$i];

            //get file extension
            $gallery_photos_array = explode('.', $gallery_photos_name);
            $gallery_photos_extension = strtolower(end($gallery_photos_array));

            //gallery photos name unique
            // $unique_gallery_filename = time() . '_' . rand(100000, 100000000) . '.' . $gallery_photos_extension;
            $unique_gallery_filename = time() . '_' . rand(100000, 100000000) . '.' . $gallery_photos_extension;

            move_uploaded_file($gallery_tmp_name, 'gallery/' . $unique_gallery_filename);
        }

        }
 
    
}
?>


    <div class="container my-5">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4 my-3">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title">Update your file</h2>
                    </div>

                    <div class="card-body">
                        <p><?php echo $msg ?? ''; ?></p>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="my-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo old('name'); ?>">
                            </div>
                            <div class="my-3">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" name="phone"
                                    value="<?php echo old('phone'); ?>">
                            </div>
                            <div class="my-3">
                                <label for="">Profile Photo</label>
                                <label class="uploader">
                                    <input type="file" id="profile-photo" name="photo_name" hidden class="form-control">
                                    <img src="https://www.creativefabrica.com/wp-content/uploads/2021/06/28/Image-photo-icon-Graphics-13989898-1-580x386.jpg"
                                        id="profile-photo-icon" alt="">
                                </label>
                                <div class="preview-image" style="display:none;">
                                    <img src="" id="profile-photo-preview" alt="">
                                    <button type="button" id="profile-photo-close"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <div class="my-3">
                                <label for="">Photo Gallery</label>
                                <label class="gallery-uploader">
                                    <input type="file" id="gallery-photo" name="photo_gallery[]" hidden
                                        class="form-control" multiple>
                                    <img src="https://www.creativefabrica.com/wp-content/uploads/2021/06/28/Image-photo-icon-Graphics-13989898-1-580x386.jpg"
                                        id="gallery-photo-icon" alt="">
                                </label>
                            </div>
                            <div class="my-3">
                                <input type="submit" value="Save" class="btn btn-success w-100">
                            </div>
                        </form>
                        <?php  
                            echo "<pre>";
                            print_r($_FILES['photo_gallery']);
                            echo  "</pre>";

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const profilePhoto = document.getElementById("profile-photo");
        const profilePhotoIcon = document.getElementById("profile-photo-icon");
        const profilePhotoPreview = document.getElementById('profile-photo-preview');
        const profilePhotoClose = document.getElementById('profile-photo-close');
        const previewContainer = document.querySelector('.preview-image');

        profilePhoto.onchange = (event) => {
            const imageURL = URL.createObjectURL(event.target.files[0]);
            profilePhotoPreview.setAttribute("src", imageURL);

            profilePhotoIcon.style.display = "none";
            previewContainer.style.display = "block";
        }

        profilePhotoClose.onclick = () => {
            profilePhotoPreview.setAttribute("src", "");
            profilePhotoIcon.style.display = "block";
            previewContainer.style.display = "none";
        }
    </script>
</body>

</html>