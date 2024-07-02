 <?php  
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $length = isset($_POST['length']) ? $_POST['length'] : 0;
     $width = isset($_POST['width']) ? $_POST['width'] : 0;
     $height = isset($_POST['height']) ? $_POST['height'] : 0;
     $radius = isset($_POST['radius']) ? $_POST['radius'] : 0;
     
     function calculateArea($length, $width, $height, $radius){
        $area = [];

         if ($length > 0 && $height > 0) {
             $area["triangle"] = .5 * $length * $height;
        } else if($length > 0 && $width > 0) {
            $area["rectangle"] = $length * $width;
        } else if($length > 0 ) {
            $area["square"] = $length * $length;
        } else if($radius > 0 ) {
            $area["circle"] = 3.1614 * $radius * $radius;
        }else{
             $area = "Invalid area !!!";
        }

        return $area;
     }
     $area = calculateArea($length, $width, $height, $radius);
 }
 
 
 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Area Calculation</title>
 </head>

 <body>
     <div class="container">
         <h1>Area Calculation</h1>
         <form action="" method="POST" id="calculation_form">

             <label for="length">Length:</label>
             <input type="number" name="length" id="length"><br><br>


             <label for="width">Width:</label>
             <input type="number" name="width" id="width"><br><br>

             <label for="height">Height:</label>
             <input type="number" name="height" id="height"><br><br>

             <label for="radius">Radius:</label>
             <input type="number" name="radius" id="radius"><br><br>

             <input type="submit" value="Calculate">

         </form>
     </div>

     <div class="result">
         <?php  if(isset($area) && !empty($area)): ?>
         <h2>Calculate Results:</h2>
         <?php if(isset($area["triangle"])):  ?>
         <p>Triangle Area:<?php echo $area["triangle"] ?> square units</p>
         <?php endif; ?>

         <?php if(isset($area["rectangle"])):  ?>
         <p>Rectangle Area:<?php echo $area["rectangle"] ?> square units</p>
         <?php endif; ?>

         <?php if(isset($area["square"])):  ?>
         <p>Square Area:<?php echo $area["square"] ?> square units</p>
         <?php endif; ?>

         <?php if(isset($area["circle"])):  ?>
         <p>Circle Area:<?php echo $area["circle"] ?> square units</p>
         <?php endif; ?>



         <?php endif; ?>
     </div>



 </body>

 </html>

 <style>
     * {
         margin: 0;
         padding: 0;
         font-family: 'poppins', 'sans-serif';
         box-sizing: border-box;
     }

     body {
         background: bisque;
     }

     .container {
         width: 500px;
         height: 344px;
         text-align: center;
         margin: auto;
         padding: 30px;
         color: blue;
         background: slategrey;
     }

     h1 {
         margin-bottom: 15px;
     }

     label {
         font-weight: 600;
         margin-right: 10px;
         margin-left: 0px;
     }

     input#length,
     #width,
     #height,
     #radius {
         width: 167px;
         height: 29px;
         border: none;
     }

     input[type="submit"] {
         background: blue;
         color: white;
         width: 102px;
         height: 35px;
         font-weight: 700;
         font-size: medium;
         border-radius: 25px;
     }

     input[type="submit"]:hover {
         background: white;
         color: blue;
     }

     .result {
         text-align: center;
         margin-top: 30px;
     }
 </style>