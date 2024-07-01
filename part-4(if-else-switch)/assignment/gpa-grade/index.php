<!-- একটি গ্রেডিং এপলিকেসন বানান যেখানে কেউ কোন সাবজেক্ট এর মার্ক দিলে সেটা আপনাকে Grade and GPA বলে দিবে -->

<?php  
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $subject = htmlspecialchars($_POST['subject']);
     $marks = (int)htmlspecialchars($_POST['marks']);

     if($marks >=80 && $marks <= 100){
         $grade = "A+";
         $gpa = 5.00;
     }else if($marks >=70 && $marks <=79){
         $grade = "A";
         $gpa = 4.00;
     }else if($marks >=60 && $marks <=69){
         $grade="A-" ;
         $gpa=3.50;
     }
     else if($marks >=50 && $marks <=59){ 
        $grade="B" ; 
        $gpa=3.00; 
    }else if($marks>=40 && $marks <=49){ 
        $grade="B-" ;
        $gpa=2.50; 
    }else if($marks >=33 && $marks <=39){ 
        $grade="C" ; 
        $gpa=2.00; 
    }else{
         $grade="F" ;
         $gpa=0;
    }
}
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Grade App</title>
</head>

<body>
    <div class="container">
        <h1>Grading Application</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="subject">Subject: </label>
            <input type="text" id="subject" name="subject" required><br><br>

            <label for="marks">Marks: </label>
            <input type="text" id="marks" name="marks" required><br><br>

            <input type="submit" value="Submit" id="submit">
        </form>
    </div>

</body>

</html>


<?php 
     echo "<h1>GPA GRADE</h1>";
     echo "<p>Subject:" . $subject . "</p>";
     echo "<p>Marks:" . $marks . "</p>";
     echo "<p>Grade:" . $grade . "</p>";
     echo "<p>Grade:" . $gpa . "</p>";

?>


<!-- css -->

<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'poppins', 'sens-serif';
        box-sizing: border-box;
    }

    body {
        margin: 50px auto;
        text-align: center;
        background-color: cadetblue;
        color: white;
    }

    .container {
        width: 35%;
        margin: 35px auto;
        background-color: teal;
        height: 268px;
        padding: 30px;
    }

    h1 {
        margin-bottom: 15px;
    }

    label {
        font-weight: 700;
        font-size: large;
    }

    input {
        padding: 8px;
        box-sizing: unset;
    }

    #submit {
        background-color: cadetblue;
        border: none;
        padding: 10px 30px;
        border-radius: 20px;
        color: white;
        font-size: 18px;
        font-weight: bold;
    }

    #submit:hover {
        color: cadetblue;
        background-color: white;
    }
</style>