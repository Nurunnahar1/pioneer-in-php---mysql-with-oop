<?php
if(file_exists(__DIR__.'/data.php')){
    include_once __DIR__.'/data.php';
}
// $information = [
//     [
//         "id" => "1",
//         "name" => "Nasrin",
//         "skill" => "Laravel Developer",
//     ],
//     [
//         "id" => "2",
//         "name" => "Nuha",
//         "skill" => "Frontend Developer",
//     ]
// ];
// $arrayToString = json_encode($information);
// echo $arrayToString;


$stringToArray = json_decode($data, false);
// print_r($stringToArray);



 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php foreach($stringToArray as $member){  ?>
    <h1><?php echo $member->name; ?></h1>
    <p><?php echo $member->skill; ?></p>

    <?php } ?>
</body>
</html>
