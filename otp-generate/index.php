<?php  
function createOTP(){
    $otpstring = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $randOTP = str_shuffle($otpstring);
    return substr($randOTP, 10,6); 
}
echo createOTP();


 