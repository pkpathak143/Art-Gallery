<?php 

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'art');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from register where name='$name'and email='$email' and password='$password' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "User Already Taken";
}
else{
    $reg = " insert into register(name, email,password) values ('$name','$email','$password')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}
?>