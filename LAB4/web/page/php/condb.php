<?php
$host = db;
$user = "root";
$pass = "1234";
$db = "mydb";

try{
   $condb = new mysqli($host,$user,$pess,$db);

   if($condb->connect_error){
    throw new Exception("connection failad");

   }
}
catch(Exception $e){
    echo $e->getMessage();
}
