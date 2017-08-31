<html>
<head>
<title>Login...</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script></head>
<body>
<form  class="form-horizontal" action="checklogin.php" method="POST">
 <table class="table table-bordered">
  <div class="form-group">
    <label class="control-label col-sm-4">Username:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="user" placeholder="Enter Username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="pwd">Password:</label>
    <div class="col-sm-3"> 
      <input type="password" class="form-control" name="pass" placeholder="Enter password">
    </div>
  </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
  </table>
</form>
</body>
</html>