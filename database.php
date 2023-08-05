<?php 
// servername is always localhost until and unless youll change it
$servername = "localhost";
// username is always localhost until and unless youll change it
$username = "root";
// password is null until you set something
$password = "";
// your database name goes here remember table name will be written further in next page
$database = "airschools";
$con = mysqli_connect($servername, $username, $password, $database);
// if dp not connect then
if(!$con)
{
    die("error deleting record:" .mysqli_error($con));
}
?>