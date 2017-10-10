<?php
session_start();
ob_start();
if(!isset($_SESSION['hospital']))
header('Location:hospitallog.php');
$name=$_SESSION['hospital'];
include 'connect.php';
$sql="select hid from hospital where name='$name'";
if(!$rows=$conn->query($sql))
die($conn->error);
    while($hids=$rows->fetch_assoc())
       $hid=$hids['hid'];
       if($_SERVER['REQUEST_METHOD']=="POST")
       {
           $name=$_POST['name'];
            $age=$_POST['age'];
            $sex=$_POST['sex'];
            $quantity=$_POST['quantity'];
            $date=$_POST['date'];
            $blood =$_POST['blood'];
            $contact=$_POST['contact'];
            $sql="insert into donor values('','$age','$name','$blood','$sex','$contact','$quantity','$date','$hid')";
            if(!$conn->query($sql))
            die($conn->error);
            else
            {
            echo " <script>
            alert('Data Added Successfully');
            </script>";
            }

           if( !$result=$conn->query("update  bloodbank set quantity=quantity+'$quantity' where blood_type='$blood'"))
          die('update '.$conn->error);
          header('Location:donar.php');

       }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Donar Adding</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid" >
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="mainPage.php" >BloodBank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>

      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <h2><strong>ADD DONOR</strong></h2>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Age" name="age" pattern="[1]{1}[7-9]{1}|[2-9]{1}[0-9]{1}" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="text" class="form-control" id="contact"  pattern="[1-9]{1}[0-9]{9}|[1-9]{1}[0-9]{6}" placeholder="Enter Number" name="contact" required>
    </div>
    <div class="form-group">
      <label for="quantity">Quantity  in ml:</label>
      <input type="text" class="form-control" id="quantity"   pattern="[1-4]{1}[0-9]{1}[0-9]{1}" placeholder="Enter Quantity" name="quantity" required>
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date"   placeholder="Enter Date" name="date" required>
    </div>
    <div class="form-group">
      <label for="select">Blood Group:</label>
      <select id="select" class="form-control" name="blood">
        <option value="a+">
            A+
        </option>
        <option value="a-">
            A-
        </option><option value="ab+">
            AB+
        </option><option value="ab-">
            AB-
        </option><option value="b+">
            B+
        </option><option value="b-">
            B-
        </option>
        <option value="o+">
           O+
        </option>
        <option value="o-">
            O-
        </option>
      </select>
    </div>
      <div class="form-group">
      <label for="sex">Gender:</label>
      Male:<input type="radio"  value="male" id="sex"  style="margin-left: 5px;"  name="sex" required>
      Female<input type="radio"  value="female" style="margin-left: 5px;"  name="sex" required>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>

</body>
</html>
