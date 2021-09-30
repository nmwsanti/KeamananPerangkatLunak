<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KPL by NMW</title>
	<style>
	  body {
	   background-image : url("img/blue-sky.jpg");
	    background-repeat: no-repeat;
	   background-size:cover;
	  }
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
		<div class="container-fluid">
		   <a class="navbar-brand" href="#">KPL by NMW</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		<div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="register.php">Register</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="login.php">Login</a>
		        </li>
		    </ul>
		</div>
		</div>
	</nav>

	<center>
	<div class="card text-dark bg-light mb-3" style="max-width: 25rem; margin-top: 35px">
	  <div class="card-body">
	  	<div class="card-body">
    		<h5 class="card-title">Login Akun</h5>
    	<br>
    	<br>
		<form action="proses-login.php" method="post">
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Email :</label>
		    <input type="email" placeholder="Masukkan Email Anda!" class="form-control" id="email" aria-describedby="email" name="email">
		    <div id="emailHelp" class="form-text"></div>
		  </div>
		  <div class="mb-3">
		    <label for="password" class="form-label">Password :</label>
		    <input type="password" placeholder="Masukkan Password Anda!" class="form-control" id="password" name="password">
		  </div>
		  <br>
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <br>
		  <br>
		  <a href="resetpassw/requestReset.php" style="color: #blue; text-align: center; font-size: 13px;">Forgot Password?
		  </a>
		  <p class="mt-5 mb-3 text-muted text-center">&copy;KPL by NMW 2021</p>
		</form>
	</div>
	</center>
</body>
</html>

<?php


if (isset($_POST["login"])) {
    try {
        //code...
        if (login($_POST) == false) {
            throw new Exception("email / password wrong !!!");
        }
        header('location: index-user.php');
        exit;
    } catch (Exception $error) {
        echo "<script>
        alert ('" . $error->getMessage() . "');
            document.location.href = 'login.php';
        </script>";
    }
}

?>