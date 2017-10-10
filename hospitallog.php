<?php
ob_start();
session_start();

?>
<html>
<head>
<link rel="shortcut icon" href="blood.png">
<title>
login
</title>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1,width=device-width">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
*{
margin:0px;
padding:0px;
}
html,body{
height:100%;
width:100%;
}
input:focus {
   outline: 0;
   border: 2px solid #66afe9;

}
.p2{

  padding: 8px 14px;
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
input{
width:100%;
height:35px !important;
border-radius:5px;
border:none;
padding:4px;

}
.new{
background-color:rgba(0,0,0,0.1);
padding:20px;
float:none;
display:block;
position:relative;
margin:0 auto;
top:29%;


}
label{
color:white;
}
</style>
</head>
<body>
<?php
$error="";
include 'connect.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_POST['name'];

    $sql="SELECT password FROM hospital WHERE name='$name' ";
    if(!$result=$conn->query($sql))
    die('fail'.$conn->error);
    $password=$_POST['password'];
    if($result->num_rows > 0)
     {
       $row=$result->fetch_assoc();
        if($row['password']!=$password)
        $error="Incorrect Password";

      }
    else
      $error="Incorrect UserName ";
    if($error=="")
    {
    header('location:mainPage.php');
    $_SESSION['hospital']=$name;
    }

    }
?>
<div class="bg">
<div class="col-sm-4 new">

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<?php
   if($error=="Incorrect Password"||$error=="Incorrect UserName ")
{?>
    <div class="panel panel-danger">
      <div class="panel-heading"><?php echo $error; ?></div>
    </div>
<?php
}
else
{  ?> <div class="panel panel-danger p1">
      <div class="panel-heading p2"  ><?php echo "Hospital Login Portal" ?></div>
    </div>

  <?php  } ?>

  <div class="form-group">
    <label for="name" style="color: black;">Name:</label>
    <br/>
    <input type="text" id="name" name="name"   required>
  </div>
  <div class="form-group">
    <label for="pwd"  style="color: black;">Password:</label>
   <br/>
    <input type="password"  id="pwd" name="password"  required>
  </div>

  <button type="submit" class="btn btn-success" style="margin-top:10px;">Submit</button>
</form>
</div>
</div>
</body>
</html>
