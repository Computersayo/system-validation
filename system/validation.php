<?php
session_start();
header('location:reg.php');
$conn=mysqli_connect('localhost','root','','system');
$email=$_POST['Email'];
$password=$_POST['password'];
$sql="select * from user where Email='$email' && password='$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if ($num==1) {
	header('location:home.php');
}
else{
header('location:index.php');
}

 ?>