<?php
   define('DB_HOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_DATABASE','mwin');  
   $conn  = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
?>