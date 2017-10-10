<?php
  ob_start();
	session_start();
	if(!isset($_SESSION['admin']))
	header("Location:mainadminlog.php");
	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospitals</title>
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
      <a class="navbar-brand" href="#" >BloodBank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
				  <li ><a href="addhospital.php">Add</a></li>
        <li><a href="logoutadmin.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
         <li ><a>Welcome <?php echo $_SESSION['admin'];  ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:66px; overflow-x:auto;">
                    <?php
	                include "connect.php";

                  $sql="select * from hospital order by name";

	                if(!$rows=$conn->query($sql))
	                  {
	                  	die($conn->error);

	                  }   ?>
						      <table class="table">
										<thead>
											<tr>
												<th>username</th>
                        <th>
                          password
                        </th>
												<th>contact</th>
												<th>Email</th>
											</tr>
										</thead>
										<tbody>
											<?php
									  while($tuple=$rows->fetch_assoc())
										{?>
							    <tr>
										<td><?php echo $tuple['name']; ?></td>
                    <td><?php echo $tuple['password']; ?></td>
										<td><?php echo $tuple['telephone']; ?></td>
										<td><?php echo $tuple['email']; ?></td>
                    <td><a href="update-hospital.php?hid=<?php echo $tuple['hid']; ?>"><button class="btn btn-primary">Update</button></a></td>
                    <td><a href="delete-hospital.php?hid=<?php echo $tuple['hid']; ?>"><button class="btn btn-primary">delete</button></a></td>

									</tr>
									<?php
										}
										?>
                  </tbody>
                  </table>
</div>
</body>
</html>
