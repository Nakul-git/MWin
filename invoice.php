<?php
include("session.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pizza = 150;
        $pasta = 200;
        $ColdCoffee = 250;
        $FrenchFries = 100;
        
        $invoice1 = $_POST['pizza'];
        $invoice2 = $_POST['pasta'];
        $invoice3 = $_POST['cold'];
        $invoice4 = $_POST['fries'];
        
        $result1 = $pizza*$invoice1;
        $result2 = $pasta*$invoice2;
        $result3 = $ColdCoffee*$invoice3;
        $result4 = $FrenchFries*$invoice4;
         
        $final = $result1+$result2+$result3+$result4;
                    }
?>

<?php 

$id = $_POST['op'];
 $fi =  mysqli_query($conn,"INSERT INTO `invoice` VALUES (NULL, current_timestamp(), '$id');");
 $fum =  mysqli_query($conn,"SELECT* From `invoice` WHERE login_ID = '$id';");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <title>ADD</title>
    <style>
        .edit{
            padding: 12%;
            margin-left: 10%; 
        }
        #add{
            margin-left: 40%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span>MWin</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
    <a href="product.php"><-Return</a>
    <h1 style="
    margin-left: 45%;
">Invoice</h1><br><br>
<?php
    
    while($row = mysqli_fetch_row($fum)){
     echo "Invoice Number: $row[0] <br><br>
    Date: $row[1]  <br><br>
    login_ID: $row[2]  "; 
    }
?>
<table class="table">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                    <td>1</td>
                    <td>Pizza</td>
                    <td>₹150</td>
                    <td><?php echo "$invoice1";?></td>
                    <td><?php echo "₹$result1";?></td>
                   </tr>
                   <tr>
                    <td>2</td>
                    <td>Pasta</td>
                    <td>₹200</td>
                    <td><?php echo "$invoice2";?></td>
                    <td><?php echo "₹$result2";?></td>
                   </tr>
                   <tr>
                    <td>3</td>
                    <td>Cold Coffee</td>
                    <td>₹250</td>
                    <td><?php echo "$invoice3";?></td>
                    <td><?php echo "₹$result3";?></td>
                   </tr>
                   <tr>
                    <td>4</td>
                    <td>French Fries</td>
                    <td>₹100</td>
                    <td><?php echo "$invoice4";?></td>
                    <td><?php echo "₹$result4";?></td>
                   </tr>
                   <tr>
                    <td><?php
                      echo '<h5>Total:</h5>';?></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?php echo '₹'.$final; ?></td>
                   </tr>
                        </tbody>
            </table>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
</body>
</html>