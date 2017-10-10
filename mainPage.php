<?php
ob_start();
session_start();
if(!isset($_SESSION["hospital"]))
{
    header("Location: hospitallog.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
  
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
       if($_POST['select']=="r")
     header('Location:reciever.php');
       else
         header('Location:donar.php');
        
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
      <a class="navbar-brand" href="#" >BloodBank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
        <li><a><?php echo $_SESSION['hospital']; ?></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-top:160px;">
  
   <div class="panel-group" >
    <div class="panel panel-primary">
      <div class="panel-heading">Please Choose</div>
      <div class="panel-body">
        
        
       <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>">
       <div class="form-group">
      <label for="sel1"> (select one):</label>
      <select class="form-control" id="sel1" name="select">
        
        <option value="r">Reciever</option>
        <option value="d">Donor</option>
       
      </select>
    </div>
       <div class="container">
  <button type="Submit" class="btn btn-primary">Submit</button>
    <br>
    <br>  
  </div>
    </form>
   </div>

</div>
    </div>
</div>
</body>
</html>