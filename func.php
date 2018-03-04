
<?php

ini_set('display_errors', 1); ini_set('log_errors',1); error_reporting(E_ALL); mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from logintb where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)

{
header("location:admin pannel.php");
}
else
{
  
echo "<script>alert('Error Login')</script>";
echo "<script>window.open('index.php','_self')</script>";

}
}

if(isset($_POST['pat_submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$docapp=$_POST['docapp'];
$query="insert into doctorapp(`fname`,`lname`,`email`,`contact`,`docapp`)values('$fname',$lname','$email','$contact','$docapp')";
$result=mysqli_query($con,$query);
if($result)
{
   
    echo "<script>window.open('admin pannel.php')</script>";

}
}

?>  