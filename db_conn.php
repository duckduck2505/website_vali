<?php 
 $DB_HOST="127.0.0.1";
 $DB_USER="root";
 $DB_PASS="";
 $DB_NAME="datab2";


 $conn =mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

 if(!$conn){
    echo "Connection failed!";
 }