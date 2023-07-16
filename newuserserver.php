<?php
session_start();
$con = mysqli_connect('localhost','root','');
if($con){
    echo "Connection Successful<br><br>";

}
else{
    echo "You are Not Connected To Database";
}
mysqli_select_db($con,'myprofile');
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$gender=$_POST['gender'];

$qt="select * from newuser where name='$name' && password='$password' && email='$email' && dob='$dob' && address='$address' && gender='$gender' ";

if($num == 1){
    echo "dublicate data";
}
else{
    
    header('location:index.html');

    $q="insert into newuser(name,password,email,dob,address,gender) values ('$name' ,'$password' , '$email' ,'$dob' , '$address' , '$gender')";
    mysqli_query($con,$q);


}
?>