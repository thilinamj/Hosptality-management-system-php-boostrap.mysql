<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
</head>
<style>
#ab1:hover{cursor:pointer;}
</style>  

<body style="background:url('images/loginbag.jpg') no-repeat; background-size:cover;">
<div class="container" style="width:400px;margin-top:150px">

<div class="card">

<div class="card-body">

    <form class="form-group" action="func.php" method="post">
    <label>User name:</label><br>
    <input type="text" name="username" class="form-control" placeholder="enter username"><br>
    <label>Password:</label><br>
    <input type="password" name="password" class="form-control" placeholder="enter password"><br>
    <input type="submit" name="login_submit" id="ab1" class="btn btn-primary"> 
    </form>


</div>
</div>

   
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>