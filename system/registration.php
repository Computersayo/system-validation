<?php
session_start();
header('location:index.php');
$conn=mysqli_connect('localhost','root','','system');
$name=$_POST['username'];
$email=$_POST['Email'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$sql="select * from user where Email='$email'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1){
	echo "email already used ";
}
else{
$reg=("insert into user (username,Email,city,contact,password) values('$name','$email','$city','$contact','$password')");
mysqli_query($conn,$reg);
echo "member added successfully";

}

 ?>