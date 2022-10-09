<?php
include("session.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['idVal'];
    $sql = ("DELETE FROM `customers` WHERE `customers`.`login_ID` = $id;");
    $op = mysqli_query($conn,$sql);
    header("location: MWin.php");    
}

?> 
