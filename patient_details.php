<?php include("func.php");?>
<html>
 <head>
    <title>Patient Deatils</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
</head>
<body>
<div class="jumbotron" style="background:url('images/loginbag.jpg')no-repeat;background-size:cover;height:300px;"></div>
<div class="container">
<div class="card">

<div class="card-body" style="background-color:#0080ff;color:#ffffff;">
<div class="row">
<div class="col-md-1">
<a href="admin_pannel.php" class="btn btn-light">Go Back</a>
</div>
<div class="col-md-3">
<h3>Patient Details</h3>
</div>
<div class="col-md-8">
<form class="form-group" action="func.php" method="post">
<div class="row">
<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter contact"></div>
<div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light"></div>

</div>

</div>
</div>
</div>
<div class="card-body"></div>
 
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
    
<?php get_patient_details(); ?>
   
  </tbody>
</table>

</div>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script  src="js/bootstrap.min.js"></script>
</body>
</html>