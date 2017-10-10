<?php
 ob_start();
$choose="";

 session_start();
  if(!isset($_SESSION['hospital']))
  header('Location:hospitallog.php');
?>
<html lang="en">
<head>
<title>Donor</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  include 'connect.php';
   $did=$_GET['did'];
    $sql="delete from donor where did='$did'";
    if(!$conn->query($sql))
    die($conn->error);
    header('Location:donar.php');
   ?>
</body>
</html>
