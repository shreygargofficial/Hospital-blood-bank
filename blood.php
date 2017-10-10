<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
</head>
<style>
.container{
margin-top:100px;


}
.panel{margin:0 auto;

}
.col-center-block {
    float: none;
    display: block;
    margin: 0 auto;
    
}
</style>
<body>

<div class="container" >
 <div class="col-md-6 col-center-block">
    <div class="panel panel-info">
      <div class="panel-heading" style="color:red; font-family:">Welcome Admin</div>
      <div class="panel-body">
	     <form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
	  </div>
	  </div>
    </div>

</div>

</body>
</html>