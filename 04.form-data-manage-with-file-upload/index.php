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
    $photo = $_POST['photo'];
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

    $nameMsg = $emailMsg = $phoneMsg = $locationMsg = $genderMsg = $photoMsg ='';

    $message = '';

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
    if (empty($photo)) {
        $photoMsg = createAlert("photo field is required");

    }
    if (empty($location)) {
        $locationMsg = createAlert("Location field is required");

    }
    if (empty($gender)) {
        $genderMsg = createAlert("Gender field is required");

    }
    if (empty($nameMsg) && empty($emailMsg) && empty($phoneMsg) && empty($locationMsg) && empty($genderMsg) && empty($photoMsg)) {
            $data= json_decode(file_get_contents('./db/data.json'), true);
            array_push($data, [
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "photo" => $photo,
                "location" => $location,
                "gender" => $gender,

            ]);
            file_put_contents('./db/data.json',json_encode($data));

        $message = message("Data submitted successfully", "success");
        reset_form();
    } else {
        $message = message("Please correct the highlighted errors.", "danger");
    }
 

}

?>

    <div class="container my-5">
        <div class="row   my-5">
            <div class="col-md-4 my-3">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title">Create an account</h2>
                    </div>
                    <div class="card-body">

                        <p><?php echo $message; ?></p>

                        <form action="" method="post">
                            <div class="my-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo old('name'); ?>">
                                <p> <?php echo $nameMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email"
                                    value="<?php echo old('email'); ?>">
                                <p> <?php echo $emailMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone"
                                    value="<?php echo old('phone'); ?>">
                                <p> <?php echo $phoneMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <label for="file">Photo (url only)</label>
                                <input type="text" class="form-control" name="photo"
                                    value="<?php echo old('photo'); ?>">
                                <p> <?php echo $photoMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <label for="location">Location</label>
                                <select name="location" class="form-control">
                                    <option value="">-select-</option>
                                    <option <?php echo old('location') == "Mirpur" ? 'selected' : ''; ?> value="Mirpur">
                                        Mirpur</option>
                                    <option <?php echo old('location') == "Uttora" ? 'selected' : ''; ?> value="Uttora">
                                        Uttora</option>
                                    <option <?php echo old('location') == "Badda" ? 'selected' : ''; ?> value="Badda">
                                        Badda</option>
                                    <option <?php echo old('location') == "Motizil" ? 'selected' : ''; ?>
                                        value="Motizil"> Motizil</option>
                                </select>
                                <p> <?php echo $locationMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <label for=""><input type="radio"
                                        <?php echo old('gender') == "Male" ? 'checked' : ''; ?> value="Male"
                                        name="gender">Male</label>
                                <label for=""><input type="radio"
                                        <?php echo old('gender') == "Female" ? 'checked' : ''; ?> value="Female"
                                        name="gender">Female</label>
                                <p> <?php echo $genderMsg ?? ''; ?></p>
                            </div>
                            <div class="my-3">
                                <input type="submit" value="Create" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 my-3">
                <div class="row">

                    <?php  
                    $teamData = json_decode(file_get_contents('./db/data.json'));
                    foreach ($teamData as $singleData):
                    
                    ?>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img class="w-100" src="<?php  echo $singleData->photo ?>" alt="">
                                <h2>Name: <?php echo $singleData->name; ?></h2>
                                <p>Location: <?php echo $singleData->location; ?></p>
                                <p>Gender: <?php echo $singleData->gender; ?></p>
                              
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>