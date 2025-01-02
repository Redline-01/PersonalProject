<?php

   $host = 'localhost'; 
   $user = 'root'; 
   $password = '';
   $dbname = 'KFCDB';
    

   try{
    $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);

   
}

catch(Exception $e){
    echo "Error: " . $e->getMessage();
}




?>