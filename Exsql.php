<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_reg";

$connection = mysqli_connect($host, $user, $password, $database);

if ($connection)
 {
  echo "successfully connect";
 }
 else
 {
    die("could not connect");
}




$sql = "INSERT INTO class (name, email, phone) VALUES ('arya', 'ary@gmail.com', '8989877874')";
mysqli_query($connection,$sql);
mysqli_close($connection);

?>