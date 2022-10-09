<?php
include("session.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $id = $_POST['idVal'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];

  $sql = mysqli_query($conn,"UPDATE `customers` SET `name`='$name',`phone`='$phone' WHERE `login_ID` = $id;");
  header("location: MWin.php");  
}
?>