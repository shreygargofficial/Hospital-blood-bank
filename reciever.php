<!DOCTYPE html>
  <?php
   ob_start();
   session_start();
    if(!isset($_SESSION['hospital']))
    header('Location:hospitallog.php');
  ?>
<html lang="en">
<head>
  <title>Reciever</title>
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
        <li ><a href="mainPage.php">Home</a></li>
        <li ><a href="addreciever.php">Add</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>

      </ul>
    </div>
  </div>
</nav>
<div class="dropdown" style="top:-12px;left:-20px;float: right;">
    <button class="btn btn-primary dropdown-toggle"  type="button" data-toggle="dropdown">Sort
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="left:-20px; min-width: 100px;">
     <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <li style="padding:0 2px;"><button type="submit" class="btn btn-default" style="width:100%; border:none;" name="name">By Name</button></li>
      <li style="padding:0 2px;"><button type="submit" class="btn btn-default" style="width:100%;border:none;" name="date">By Date</button></li>
      <li style="padding:0 2px;"><button type="submit" class="btn btn-default" style="width:100%;border:none;" name="age">By Age</button></li>
      </form>
    </ul>
  </div>
<div class="container" style="overflow-x:auto;">
  <h2>Reciever List</h2>
   <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>

        <th>Gender</th>
        <th>Age</th>
        <th>Blood_type</th>
        <th>Quantity</th>
        <th>Recieve_date</th>
        <th>Contact</th>

      </tr>
    </thead>
    <tbody>
     <?php
      include 'connect.php';
      $name=$_SESSION['hospital'];
       $sqlhospital="select hid from hospital where name='$name' ";
       if(!$rows=$conn->query($sqlhospital))
       die('problem in hospital query'.$conn->error);
       while($hids=$rows->fetch_assoc())
       $hid=$hids['hid'];
     if(isset($_POST['name']))
      $sql="select * from reciever where hid='$hid' order by name";
      elseif(isset($_POST['age']))
       $sql="select * from reciever where hid='$hid' order by age";
         elseif(isset($_POST['date']))
       $sql="select * from reciever where hid='$hid' order by rdate";
        else
       $sql="select * from reciever where hid='$hid' ";
      if(!$rows=$conn->query($sql))
       die($conn->error);
       while($single_tuple=$rows->fetch_assoc())
       {
        ?>
     <tr>
        <td><?php echo $single_tuple['rid']; ?></td>
        <td><?php echo $single_tuple['name']; ?></td>
        <td><?php echo $single_tuple['sex']; ?></td>
         <td><?php echo $single_tuple['age']; ?></td>
          <td><?php echo $single_tuple['blood_type']; ?></td>
           <td><?php echo $single_tuple['quantity']; ?></td>
            <td><?php echo $single_tuple['rdate']; ?></td>
            <td><?php echo $single_tuple['contact']; ?></td>
            <td><a href="update-reciever.php?rid=<?php echo $single_tuple['rid']; ?>"><button class="btn btn-primary">Update</button></a></td>
            <td><a href="delete-reciever.php?rid=<?php echo $single_tuple['rid']; ?>"><button class="btn btn-primary">delete</button></a></td>
      </tr>

      <?php
      }
       ?>

         </tbody>
  </table>
</div>

</body>
</html>
