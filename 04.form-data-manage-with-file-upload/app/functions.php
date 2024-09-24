<?php   
/**
 *   createAlert function
 * @param mixed $msg
 * @param mixed $type
 * @return string
 */
 

 function createAlert($msg, $type = "danger") {
 return " <p class=\" text-{$type}\">{$msg}</p>";
 }



 /**
  * Summary of message
  * @param mixed $msg
  * @param mixed $type
  * @return string
  */
 function message($message, $type = "success") {
 return "<p class=\"alert alert-{$type} d-flex justify-content-between\">
     {$message}
     <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
 </p>";
 }



/**
 * Summary of old
 * @param mixed $field_name
 * @return mixed
 */
function old($field_name){
    return $_POST[$field_name] ?? '';
}



function reset_form(){
    return $_POST = [];
}