<?php
include('connection.php');

$servername="localhost";
$username="root";
$password="";
// create connection
$connect = mysqli_connect($servernam,$username,$password);
// check connection
if(!$connect){
    die("Connection failed:" mysqli_connect_error());

}
echo "Successfully Connect";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Simple form</title>
</head>
<body>

   <form method="post">
    
        <div class="container">
            <h1>Basic Form</h1>
            <div>
            <label for="username"><b>Name:</b></label>
            <input type="text" placeholder="Enter a name" name="username" >
            <br><br>           
         </div>
            <div>
            <label for="Email"><b>Email:</b></label>
            <input type="text" placeholder="Enter Email" name="Email" >
            <br><br>
        </div>
           <div><label for="phone no"><b>Phone No:</b></label>
            <input type="text" placeholder="Enter a phone no" name="Phone No" ></div>
            <br><br>
            <div>
            <label for="password"><b>Password:</b></label>
            <input type="password" placeholder="Enter a Password" name="password">
            <br><br>
        </div>
        
           <div><button type="submit">Submit</button></div> 
            
          </div>
    
   </form> 



   
</body>
</html>