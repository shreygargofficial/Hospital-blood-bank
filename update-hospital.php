

	<?php
	ob_start();
	session_start();
  if($_SERVER['REQUEST_METHOD']!='GET'&& $_SERVER['REQUEST_METHOD']!='POST')
   unset($_SESSION['hid']);
$error="";
if(!isset($_SESSION['admin']))
header('Location:mainadminlog.php');


	?>
	<html lang="en">
<head>
  <title>Update Hospital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  if($_SERVER['REQUEST_METHOD']=='GET')
  {

    $_SESSION['hid']=$_GET['hid'];
  }
include 'connect.php';
      $sql="select * from hospital where hid ='{$_SESSION['hid']}'";

    if(!$result=$conn->query($sql))
    die($conn->error);
         $single=$result->fetch_assoc();

  ?>


<?php
$error="";

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	include "connect.php";
	$sql="update hospital set name='$name',email='$email',telephone='$contact',password='$password' where hid='{$_SESSION['hid']}'";
	if(!$result=$conn->query($sql))
    die($conn->error);

			  header('Location:mainadmin.php');
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
						echo "update ".$single['name'];
						else
						echo '<div style="color:red;">'. $error.'</div>';
						?>
					</div>
					<div class="panel-body">
							<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
										<div class="form-group">
											<label for="usr">Name:</label>
											<input type="text" class="form-control" id="usr" name="name" value="<?php echo $single['name']  ?>" placeholder="Name" required>
										</div>
										 <div class="form-group">
											<label for="usr1">Email Id:</label>
											<input type="email" class="form-control" id="usr1" name="email" value="<?php echo $single['email']  ?>" placeholder="Email" required>
										</div>
										 <div class="form-group">
											<label for="usr2">Phone:</label>
											<input type="text" class="form-control" id="usr2"  name="contact" placeholder="Contact" value="<?php echo $single['telephone']  ?>" pattern="[1-9]{1}[0-9]{9}|[1-9]{1}[0-9]{6}"  required>
										 </div>
										  <div class="form-group">
											<label for="usr3">Password:</label>
											<input type="text" class="form-control" id="usr3"  name="password" placeholder="Create Password" value="<?php echo $single['password']  ?>" maxlength="8" required>
										 </div>

										<div class="container">
											<button type="Submit" class="btn btn-primary">Update</button>
											<br><br>
										</div>
			        </form>
			 </div>
    </div>
  </div>
</div>


</body>
</html>
