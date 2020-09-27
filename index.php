

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title><link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:#99FFFF;">
<div class="container" id="wrapper">

	<div class="row" id="header">
<!-- Headder -->
		<div class="col-md-12">
        <a href="alogin.php" style="float: right;"><button>Admin LogIn</button></a>
			<h1 class="text-center" id="head_text">Online Quiz</h1>
		</div>
	</div>
	<div class="row mt-1 " id="row">
		<div class="col-sm-6" id="login">
			<div class="text-center mt-1" id="login_header">
        
					<h4>Log In</h4>
				
			</div>
      <?php

           if(isset($_GET['run'])&& $_GET['run']=='failed')
          {
             echo "Email or Password incorrect try again";
          }
         ?>
			<form action="login.php" id="form" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address or User ID</label>
    <input type="email" name="e" class="form-control btn btn-outline-info" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="p" class="form-control btn btn-outline-info" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" name="l" class="btn btn-outline-success" id="log">Log In</button>
  <button type="submit" name="f_p" class="btn btn-outline-danger">Forget Password</button>
  <button type="button" name="f_u" class="btn btn-outline-danger" id="forgetuname">Forget User ID or Email</button>

</form>
		</div>
		<div class="col-sm-6" id="signup">
		<div class="text-center mt-1" id="login_header">
				
					<h4>Sign Up</h4>
				
			</div>
      <?php 
    if(isset($_GET['run'])&& $_GET['run']=='success')
    {
      ?>
        <script>
            alert("Your Are registered successfully");
        </script>
      <?php 
    }
   ?>

<form id="form2" method="post" action="signup.php" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="n" class="form-control" id="inputEmail4" placeholder="Name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">email</label>
      <input type="email" name="e" class="form-control" id="inputPassword4" placeholder="email" required>
    </div>
  </div>
 
	  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4">Password</label>
      <input type="password" name="p" class="form-control" id="inputPassword4" placeholder="Password" required>
    </div>
  </div>

  <div class="custom-file">
    <input type="file" name="i" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
    <label class="custom-file-label" for="inputGroupFile01">Choose Images</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="c" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="s" class="form-control btn btn-outline-success mt-1" id="Signup">Sign UP</button>
</form>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col-md-12">
			<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body" >
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="index.php" class="btn btn-primary btn btn-dark">Refresh</a>
  </div>
  <div class="card-footer text-muted">
   	Last Update Tuesday 21-may-2019 14:44
  </div>
</div>
<div class="card-footer text-muted row" id="footer">
	<div class="col-md-6">
	<div id="logo">
		  <a href="#" class="fa fa-facebook"></a>&nbsp;&nbsp;
		<a href="#" class="fa fa-twitter"></a>&nbsp;&nbsp;
		<a href="#" class="fa fa-google"></a>&nbsp;&nbsp;
		
		<a href="#" class="fa fa-instagram"></a>&nbsp;&nbsp;
		<a href="#" class="fa fa-pinterest"></a>&nbsp;&nbsp;
		<a href="#" class="fa fa-snapchat-ghost"></a>&nbsp;&nbsp;
	</div>	
	</div>
	<div class="col-md-6">
	<h6 style="float:right;">&#9400 Copyright</h6>
	</h4>
  </div>
		
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
