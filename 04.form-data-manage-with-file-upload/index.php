<?php  
if(file_exists(__DIR__.'/autoload.php')){
    require_once __DIR__.'/autoload.php';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Manage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $gender = $_POST['gender'];



        // $msg = '';


     // Form validation
    //  if (empty($name)) {
    //         $msg = createAlert("Name field is required");
    //  }
    //  else if (empty($email)) {
    //   $msg = createAlert("email field is required");
    //  }
    //  else if (empty($phone)) {
    //  $msg = createAlert("phone field is required");
    //  }
    //   else if (empty($location)) {
    // $msg = createAlert("location field is required");
    //  }
    //   else if (empty($gender)) {
    //         $msg = createAlert("gender field is required");
    //  }




        $nameMsg = $emailMsg = $phoneMsg = $locationMsg = $genderMsg = '';

        // Form validation
        if (empty($name)) {
        $nameMsg = createAlert("Name field is required");
        }
        if (empty($email)) {
        $emailMsg = createAlert("Email field is required");
        }
        if (empty($phone)) {
        $phoneMsg = createAlert("Phone field is required");
        }
        if (empty($location)) {
        $locationMsg = createAlert("Location field is required");
        }
        if (empty($gender)) {
        $genderMsg = createAlert("Gender field is required");
        }

}

 


print_r($_POST); 



?>

    <div class="container my-5">
        <div class="row justify-content-center my-5">
            <div class="col-md-5 my-3">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title">Create an account</h2>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            <div class="my-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="">
                                <p> <?php echo $nameMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="">
                                <p> <?php echo $emailMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" value="">
                                <p> <?php echo $phoneMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <label for="location">Location</label>
                                <select name="location" class="form-control">
                                    <option value="">-select-</option>
                                    <option value="Mirpur">Mirpur</option>
                                    <option value="Uttora">Uttora</option>
                                    <option value="Badda">Badda</option>
                                    <option value="Motizil">Motizil</option>
                                </select>
                                <p> <?php echo $locationMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <label for=""><input type="radio" value="Male" name="gender">Male</label>
                                <label for=""><input type="radio" value="Female" name="gender">Female</label>
                                <p> <?php echo $genderMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <input type="submit" value="Create" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>