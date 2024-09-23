<?php  

//===============sort()===============
            // $a = [  "e" , "a" , "q" , "f" , "z" ,];
            // sort($a);
            // print_r($a);  

 /*output Array
  (
  [0] => a
  [1] => e
  [2] => f
  [3] => q
  [4] => z
  */

//==========rsort($a)====================;

        // $a = [ "e" , "a" , "q" , "f" , "z" ,];
        // rsort($a);
        // print_r($a);
/**
 * output Array
 * Array
 (
 [0] => z
 [1] => q
 [2] => f
 [3] => e
 [4] => a
 )
 * 
 */
//==========asort() and arsort()====================;

//  $foods = [
//     '1'=>'vegetables',
//     '2'=>'rice',
//     '3'=>'fruits'
//  ];
//  asort($foods); //output Array Array ([3] => fruits [2] => rice [1] => vegetables)
//  arsort($foods);
//  print_r($foods);  
  

//===========array_rand()================
        // $a = ["a","b","c","d","e","f","g","h","i"];

        // echo $a[array_rand($a)];



//===========shuffle()================
        // $a = ["a","b","c","d","e","f","g","h","i"];
        // shuffle($a);
        // print_r($a);


//===========in_array()================
        // $a = ["a","b","c","d","e","f","g","h","i"];

        // if(in_array('z', $a)){
        //     echo "ok";
        // } else {
        //     echo "not ok";
        // } 