<?php 

$con = mysqli_connect("localhost","root","","pharmacydb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



if (isset(["CustomerEmail"]))
    {
   $username = $_POST['CustomerEmail'];
   $userpassword = $_POST['userPassword'];
    $sql = "SELECT CustomerID FROM `customer` WHERE `CustomerEmail`= '" .$username. "' AND `Password` '" .$userpassword. "' LIMIT 1";
    $result = mysql_query($sql);
    if(mysql_num_rows($result)==1){
echo "you have successfully loggid in";
exit();

    }
    else
    {
        echo "you entered incorrect password";
        exit();
    }
    }

?>
