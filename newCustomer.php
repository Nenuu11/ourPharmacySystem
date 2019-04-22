<?php
$CustomerFirstName =$_POST['CustomerFirstName'];
$CustomerLastName =$_POST['CustomerLastName'];
$CustomerEmail =$_POST['CustomerEmail'];
$CustomerPhone =$_POST['CustomerPhone'];
$CustomerAddress =$_POST['CustomerAddress'];
$CreditCardNumber =$_POST['CreditCardNumber'];
$CustomerPassword =$_POST['Password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacydb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `customer` (CustomerFirstName, CustomerLastName,CustomerEmail, CustomerPhone, CustomerAddress,CreditCardNumber,Password )
VALUES ('$CustomerFirstName',' $CustomerLastName',' $CustomerEmail' ,'$CustomerPhone','$CustomerAddress','$CreditCardNumber' , '$CustomerPassword')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    header("Location: order.html");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
 ?>

