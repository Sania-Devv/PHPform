<?php
$host= "localhost";
$mysqlusers= "root";
$password ="";
$dbname ="";

// create connection
$connect = mysqli_connect($servernam,$username,$password);
// check connection
if(!$connect){
    die("Connection failed:" mysqli_connect_error());

}
echo "Successfully Connect";

?>