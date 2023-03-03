<?php

$con = mysqli_connect('localhost','root');

if($con){  echo "Connection Succussfull";  }

else{ echo "No Connection"; }


mysqli_select_db($con, 'PrakashKiranaStore');

// accessing the variable
$user = $_POST['user'];     
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$message=$_POST['message'];

$query= " insert into userinfodata ( user,email,mobile,message) values('$user','$email','$mobile','$message' )";

// for show not used in page
echo "$query";

mysqli_query($con,$query);

//2 baar record show ho rha that why
header('location:index.php');
?>