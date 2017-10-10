

	<?php
	ob_start();
	session_start();

$error="";
if(!isset($_SESSION['admin']))
header('Location:mainadminlog.php');


	?>
	<html lang="en">
<head>
  <title>Add Hospital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$error="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	include "connect.php";
	$sql="select * from hospital where name='$name'";
	if(!$result=$conn->query($sql))
    die($conn->error);
		if($result->num_rows>0)
		$error="Name Already Exist";
		else
		{
			if(!$conn->query("insert into hospital values('','$name','$email','$password','$contact')"))
			die($conn->error);
			echo '<script>alert("Added Successfully!");</script>';
			  header('Location:mainadmin.php');
		}
}
?>

<nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid" >
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="mainadmin.php" >BloodBank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="logoutadmin.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>

      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-top:16px;">
  <div class="panel-group" >
    <div class="panel panel-primary">
          <div class="panel-heading">
						<?php
						if($error=="")
						echo "Give Information";
						else
						echo '<div style="color:red;">'. $error.'</div>';
						?>
					</div>
					<div class="panel-body">
							<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
										<div class="form-group">
											<label for="usr">Name:</label>
											<input type="text" class="form-control" id="usr" name="name" placeholder="Name" required>
										</div>
										 <div class="form-group">
											<label for="usr1">Email Id:</label>
											<input type="email" class="form-control" id="usr1" name="email" placeholder="Email" required>
										</div>
										 <div class="form-group">
											<label for="usr2">Phone:</label>
											<input type="text" class="form-control" id="usr2"  name="contact" placeholder="Contact"  pattern="[1-9]{1}[0-9]{9}|[1-9]{1}[0-9]{6}"  required>
										 </div>
										  <div class="form-group">
											<label for="usr3">Password:</label>
											<input type="text" class="form-control" id="usr3"  name="password" placeholder="Create Password"  maxlength="8" required>
										 </div>

										<div class="container">
											<button type="Submit" class="btn btn-primary">Add</button>
											<br><br>
										</div>
			        </form>
			 </div>
    </div>
  </div>
</div>


</body>
</html>
