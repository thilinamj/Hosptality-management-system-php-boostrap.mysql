
<?php include("func.php");?>
<html>
 <head>
    <title>Patient Deatils</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
</head>
<body>

<?php
if(isset($_POST['patient_search_submit']))
{

    $conatct=$_POST['search'];
    $query="select * from doctorapp where conatct='$conatct'";
    $result=mysqli_query($con,$query);
    echo "<div class ='card'>
    <img src='images/loginbag.jpg' class='card-img-top'>
    <div class ='card-body' style='background-color:#0080ff;color:#ffffff;'>
    
    <table class='table table-hover'>
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Doctor Appoinment</th>
    </tr>
  </thead> 

  <tbody>
    
";
while ($row=mysqli_fetch_array($result)){

      $fname=$row['fname'];
       $lname=$row['lname'];
       $email=$row['email'];
       $conatct=$row['conatct'];
       $docapp=$row['docapp'];

echo "<tr>
<td> $fname</td>
<td> $lname</td>
<td> $email</td>
<td>$conatct</td>
<td>$docapp</td>
</tr>";

}
echo "</tbody></table></div></div>";
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script  src="js/bootstrap.min.js"></script>
</body>
<html>