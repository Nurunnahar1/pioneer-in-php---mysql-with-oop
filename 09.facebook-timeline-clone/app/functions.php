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

function fileUpload(array $files, $path = "media/"){
    $tmp_name = $files['tmp_name'];
    $file_name = $files['name']; 

    //get file extension
    $file_array = explode('.', $file_name);
    $file_extension = strtolower(end($file_array));

    //file name unique
    $unique_file_name = time() . '_' . rand(100000, 100000000) . '.' . $file_extension;

    //upload file
    move_uploaded_file($tmp_name, $path . $unique_file_name);

    //return file name
    return $unique_file_name;
}