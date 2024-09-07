<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET POST REQUEST Methods</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 flex justify-center w-full">
    <div class="login w-[500] p-8 shadow-lg bg-white mt-10 rounded-xl">

    <pre>
        <?php
            print_r($_POST);
            // print_r($_GET);
            // print_r($_REQUEST);
        ?>
    </pre>

        <form action="" class="flex flex-col gap-4" method="post">
            <div class="field">
                <label for="name">Name</label>
                <input type="text" class="p-3 border w-full" name="name">
            </div>
            <div class="field">
                <label for="email">Email</label>
                <input type="text" class="p-3 border w-full" name="email">
            </div>
            <div class="field">
                <label for="phone">Phone</label>
                <input type="text" class="p-3 border w-full" name="phone">
            </div>
            <div class="field">
                <button class="py-3 text-white px-5 bg-red-500 rounded-sm">Login</button>
            </div>

        </form>
    </div>
</body>

</html>