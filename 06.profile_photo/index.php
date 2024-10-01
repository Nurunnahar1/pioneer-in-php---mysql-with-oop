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
    <link rel="stylesheet" href="./asstes/style.css">
</head>

<body>


    <div class="container my-5">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4 my-3">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title">Upload your file</h2>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="my-3">
                                <label for="">Profile Photo</label><br>
                                <label class="upload">
                                    <input type="file" hidden id="profile-photo" class="profile-photo">
                                    <img class="profile-photo-icon"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrVLGzO55RQXipmjnUPh09YUtP-BW3ZTUeAA&s"
                                        alt="">
                                </label>
                                <div class="preview-image">
                                    <img id="profile-photo-preview"
                                        src="https://t4.ftcdn.net/jpg/05/65/36/03/360_F_565360370_LrWWCTxczrmwqpsPYPljiFyE4gFqpecr.jpg"
                                        alt="">
                                    <button id="profile-photo-close" type="button"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const profilePhoto = document.getElementById("profile-photo");
        const profilePhotoIcon = document.querySelector(".profile-photo-icon");

        const profilePhotoPreview = document.querySelector('.profile-photo-preview');
        const profilePhotoClose = document.getElementById('profile-photo-close');

        profilePhoto.onchange = (event) => {
            const imageURL = createObjectURL(event.target.files[0]);
            profilePhotoPreview.setAttribute("src", imageURL);

            profilePhotoIcon.style.display = "none";
            profilePhotoClose.style.display = "block";
        }
    </script>
</body>

</html>