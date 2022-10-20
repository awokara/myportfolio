<?php
$conn = new mysqli('localhost', 'root','','learninigphp');

function cleanInput($data){
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
   return $data;
}
?>