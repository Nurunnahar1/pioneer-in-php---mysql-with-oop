<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
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
                                <label for="profile-photo">Profile Photo</label><br>
                                <label>
                                    <input type="file" hidden id="profile-photo" class="profile-photo">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrVLGzO55RQXipmjnUPh09YUtP-BW3ZTUeAA&s"
                                        alt="">
                                </label>
                                <div class="preview-image">
                                    <img src="" alt="">
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
        const previewImage =document.querySelector('.preview-image');

        profilePhoto.onchange = (event) => {
            // console.log(event.target.files[0]);

            const image = URL.createObjectURL(event.target.files[0]);
            // console.log(image);

            previewImage.children[0].setAttribute('src', image);
        }
    </script>
</body>

</html>
