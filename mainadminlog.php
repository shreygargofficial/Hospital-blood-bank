<!DOCTYPE html>
<html lang="en">
	<?php
	$error="";
	session_start();
	ob_start();
	include 'connect.php';
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name=$_POST['name'];
		$password=$_POST['password'];
		$sql="select password from mainadmin where name='$name'";
		if(!$rows=$conn->query($sql))
		die($conn->error);
		if($rows->num_rows==0)
		$error="Incorrect Username";
		else{
	  $tuple=$rows->fetch_assoc();
		if($password!=$tuple['password'])
		  $error="Incorrect Password";
		}
		
		if($error=="")
		{
	     $_SESSION['admin']=$name;
		
		header('Location:mainadmin.php');
		}
	}	
	
	?>
	
<head>
  <title>Main Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
</head>
<style>
.container{
margin-top:100px;


}
*{padding: 0;
margin: 0;}
html,body{
	height:100%;
}
.panel{margin:0 auto;

}
.col-center-block {
    float: none;
    display: block;
    margin: 0 auto;
	margin-top: 100px;
    
}
.bg{
background:url(blood1.jpg);
width:100%;
background-repeat:no-repeat;
height:100%;
overflow:auto;
background-position:left;
background-size: cover;
padding-bottom:100px;
}

</style>
<body>
<div class="bg">
<div class="container" >
 <div class="col-md-6 col-center-block">
    <div class="panel panel-info">
      <div class="panel-heading" style="color:red; ">
		<?php
		if($error=="")
		echo 'Welcome To Admin Potral';
		else
		echo $error;
		
	  ?>
	  </div>
      <div class="panel-body">
	     <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);    ?>">
  <div class="form-group">
    <label for="name">Email address:</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password" required>
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
	  </div>
	  </div>
    </div>

</div>
</div>
</body>
</html>