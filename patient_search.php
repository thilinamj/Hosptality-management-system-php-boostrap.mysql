<?php
include("func.php");
if(isset($_POST['patient_search_submit'])){

    $conatct=$_POST['conatct'];
    $query="select * from doctorapp where conatct='$conatct'";
    $result=mysqli_query($con,$query);
    echo "<div class="card-body" style="background-color:#0080ff;color:#ffffff;">
    
    <table class="table table-hover">
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
    

  
   
  </tbody>
</table>
    
    
    "




}

?>