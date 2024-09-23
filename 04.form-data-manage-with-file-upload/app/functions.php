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



 
//  function createAlert($msg, $type = "danger") {
//  return "<p class=\"alert alert-{$type} d-flex justify-content-between\">
//      {$msg}
//      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
//  </p>";
//  }