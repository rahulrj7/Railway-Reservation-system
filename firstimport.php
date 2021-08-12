<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="rahul@777"; // Mysql password
$db_name="railwaysystem"; // Database name

$conn=mysqli_connect($host, $username, $password,$db_name);
if(!$conn)
{
 die("cannot connect");
}
?>