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
  include 'connect.php';
   $hid=$_GET['hid'];
    $sql="delete from hospital where hid='$hid'";
    if(!$conn->query($sql))
    die($conn->error);
    header('Location:mainadmin.php');

   ?>

 </body>
 </html>
