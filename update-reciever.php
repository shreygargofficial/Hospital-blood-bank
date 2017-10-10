<?php
ob_start();
if($_SERVER['REQUEST_METHOD']!='GET'&& $_SERVER['REQUEST_METHOD']!='POST')
unset($_SESSION['rid']);
$choose="";
 session_start();
  if(!isset($_SESSION['hospital']))
  header('Location:hospitallog.php');
?>
<html lang="en">
<head>
<title>update reciever</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" style="border-radius:0px;">
<div class="container-fluid" >
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="mainPage.php">BloodBank</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="mainPage.php">Home</a></li>
      <li><a href="addreciever.php">Add</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
  </div>
</div>
</nav>
<?php   include 'connect.php';
if($_SERVER['REQUEST_METHOD']=='GET')
{

  $_SESSION['rid']=$_GET['rid'];
}

    $sql="select * from reciever where rid ='{$_SESSION['rid']}'";

  if(!$result=$conn->query($sql))
  die($conn->error);
       $single=$result->fetch_assoc();

?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $name=$_POST['name'];
   $age=$_POST['age'];
   $sex=$_POST['sex'];

   $date=$_POST['date'];

   $contact=$_POST['contact'];
   $rid=$_SESSION['rid'];
       $sql="update reciever set name='$name' ,age='$age',sex='$sex',rdate='$date',contact='$contact' where rid='$rid'";
       if(!$conn->query($sql))
       die($conn->error);
       header('Location:reciever.php');

}

 ?>

 <div class="container">
   <h2><strong>UPDATE <?php echo strtoupper($single['name']);  ?></strong></h2>
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
     <div class="form-group">
       <label for="name">Name:</label>
       <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $single['name']  ?>" required>
     </div>
     <div class="form-group">
       <label for="age">Age:</label>
       <input type="text" class="form-control" id="pwd" placeholder="Enter Age" value="<?php echo $single['age']  ?>" name="age" pattern="[0]{1}[1-9]{1}|[1-9]{1}[0-9]{1}" required>
     </div>
     <div class="form-group">
       <label for="contact">Contact:</label>
       <input type="text" class="form-control" id="contact"  pattern="[1-9]{1}[0-9]{9}|[1-9]{1}[0-9]{6}" value="<?php echo $single['contact']  ?>" placeholder="Enter Number" name="contact" required>
     </div>

     <div class="form-group">
       <label for="date">Date:</label>
       <input type="date" class="form-control" id="date" value="<?php echo $single['ddate']  ?>"  placeholder="Enter Date" name="date" required>
     </div>

       <div class="form-group">
       <label for="sex">Gender:</label>
       Male:<input type="radio"  value="male" id="sex"  style="margin-left: 5px;"  name="sex" required>
       Female<input type="radio"  value="female" style="margin-left: 5px;"  name="sex" required>
     </div>

     <button type="submit" class="btn btn-success">Update</button>
   </form>
 </div>
</body>
</html>
