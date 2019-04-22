
<?php
$Item_code = $_POST['Item_code'];
$Item_Name = $_POST['Item_Name'];
$Quantity = $_POST['Quantity'];
$Expire_date = $_POST['Expire_date'];
$Production_date = $_POST['Production_date'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacydb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $INSERT = "INSERT Into `items` (Item_code,Item_Name,Quantity,
Expire_date,Production_date)   values( '$Item_code' , '$Item_Name' , '$Quantity' , '$Expire_date' , '$Production_date')";
    // use exec() because no results are returned
    $conn->exec($INSERT);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $INSERT . "<br>" . $e->getMessage();
    }

$conn = null;
 ?>

