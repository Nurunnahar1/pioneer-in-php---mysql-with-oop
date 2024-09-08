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
    <div class="container my-5">
        <div class="row justify-content-center my-5">
            <div class="col-md-5 my-3">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title">Create an account</h2>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="my-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                            <div class="my-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="">
                            </div>
                            <div class="my-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" value="">
                            </div>
                            <div class="my-3">
                                <label for="location">Location</label>
                                <select name="" class="form-control">
                                    <option value="">-select-</option>
                                    <option value="">Mirpur</option>
                                    <option value="">Uttora</option>
                                    <option value="">Badda</option>
                                    <option value="">Motizil</option>
                                </select>
                            </div>
                            <div class="my-3">
                                <label for=""><input type="radio" value="Male" name="gender">Male</label>
                                <label for=""><input type="radio" value="Female" name="gender">Female</label>
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
</body>

</html>