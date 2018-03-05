
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
header("location:admin_pannel.php");
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
$conatct=$_POST['conatct'];
$docapp=$_POST['docapp'];

$query="INSERT INTO doctorapp(fname,lname,email,conatct,docapp)values('$fname','$lname','$email','$conatct','$docapp')";
$result=mysqli_query($con,$query);
if($result)
{
    
  
    echo "<script>alert('Patient Registered!')</script>";
    echo "<script>window.open('admin_pannel.php','_self')</script>";
   

}
}

?>  