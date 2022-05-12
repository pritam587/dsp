<!DOCTYPE html>
<html>
<head>
  
</head>
<body>

<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$db = 'test';

$conn = mysqli_connect($host, $user, $pass,$db);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
#echo 'Connected successfully'."<br>";  


$em1 = $_POST["email"]; 
$p1 = $_POST["psw"];
$sql= "select em,ps from log" ;
$conn->query($sql);


#include "D:/dev/pritam/index.html";
#$result = mysql_query("SELECT * FROM $you_table"); //mod query to match what you need to fetch
$array = mysqli_fetch_row($m);   

$l=$array[0];
$l1=$array[1];
if ($em == $l && $l1 == $p) {
  # code...
$m1 = $conn->query($sql);
if ($m1 === TRUE) {
  echo "<h3>Thank You</h3><h2>Your Have Been successfully Login</h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
  echo "<h2>Error: </h2>";
}



$conn->close();
?>

<button >
  
  <a href="D:/dev/pritam/index.html">
  gohome
  </a>
</button>

</body>
</html>
  
