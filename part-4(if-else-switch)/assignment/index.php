<!-- BMI বের করার জন্য একটি এপ্লিকেসন বানান যেখানে যে কেউ তার BMI বের করতে পারবে -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    // Function to calculate BMI
    function calculateBMI($weight, $height) {
        if ($height > 0) {
            return $weight / ($height * $height);
        } else {
            return "Invalid height";
        }
    }

    $bmi = calculateBMI($weight, $height);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>BMI Calculator</title>
</head>

<body>

    <h2>BMI Calculator</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Weight (kg): <input type="number" step="0.1" name="weight" required><br><br>
        Height (m): <input type="number" step="0.01" name="height" required><br><br>
        <input type="submit" value="Calculate BMI">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Results</h3>";
    echo "Weight: " . htmlspecialchars($weight) . " kg<br>";
    echo "Height: " . htmlspecialchars($height) . " m<br>";
    echo "BMI: " . number_format($bmi, 2) . "<br>";

    // Display BMI category
    if ($bmi < 18.5) {
        echo "Category: Underweight";
    } elseif ($bmi >= 18.5 and $bmi < 24.9) {
        echo "Category: Normal weight";
    } elseif ($bmi >= 25 and $bmi < 29.9) {
        echo "Category: Overweight";
    } else {
        echo "Category: Obesity";
    }
}
?>

</body>

</html>
