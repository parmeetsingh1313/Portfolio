<?php
       session_start();
    
       $con = mysqli_connect('localhost','root','');
       if($con){
           echo "connect susscessful";

       }
       else{
       echo "nooooooooo";
       }
mysqli_select_db($con,'myprofile');

$email = $_POST['email'];
$password = $_POST['password'];
$qt = "select * from adminlogin where email ='$email' && password= '$password' ";
$result = mysqli_query($con,$qt);
$num = mysqli_num_rows($result);  //ye query humare query ki table ki row ki check hogi
      if($num == 1){
         $_SESSION['email'] = $email;
         header('location:adminservisepage.php');
      }
      else{
            
             header('location:adminpage.php');
        }
       ?>