<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<?php
	//ob_start();
	session_start();
	if (!isset($_SESSION['level'])) {
  	header("Location: login.php");
	}

	//session expired
	// sesi-nya hanya 10 detik
	if(isset($_SESSION["email"]))  
	{  
     if((time() - $_SESSION['last_login_timestamp']) > 10) // 900 = 15 * 60  
     {  
        echo "<script>
        alert('Your session has expired!');
        document.location.href = 'logout.php'
        </script>";  
     }  
     else  
     {  
          $_SESSION['last_login_timestamp'] = time();   
     }  
	}  
	else  
	{  
	     header('location:../login.php');  
	}  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="600;url=login.php"/> <!-- Session Expire 600 detik (10 menit)--> 
	<title>Mahasiswa - KPL by NMW</title>
	<style>
	  body {
	   background-image : url("img/pastelpinksky.jpg");
	    background-repeat: no-repeat;
	   background-size:cover;
	  }
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">KPL by NMW</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
	      <ul class="navbar-nav">
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Perkuliahan
	          </a>
	          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
	            <li><a class="dropdown-item active" href="#">Data Mahasiswa</a></li>
	            <li><a class="dropdown-item active" href="#">Jadwal Mata Kuliah</a></li>
	            <li><a class="dropdown-item active" href="#">KRS</a></li>
	           </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Laporan
	          </a>
	          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
	            <li><a class="dropdown-item active" href="#">KHS</a></li>
	            <li><a class="dropdown-item active" href="#">Transkrip Nilai</a></li>
	           </ul>
	        </li>
	        <li class="nav-item">
		      <a class="nav-link" href="logout.php">Logout</a>
		    </li>
	       </ul>
	    </div>
	  </div>
	</nav>
	<center>
		<div class="card text-dark bg-light mb-3" style="max-width: 30rem; margin-top: 10px">
		  <div class="card-body">
		  	<div class="card-body">
	    		<h5 class="card-title">Halaman Mahasiswa</h5>
	    	</div>
	    	</div>
	    </div>
	</center>
	<p class="mt-5 mb-3 text-muted text-center">&copy;KPL by NMW 2021</p>
</body>
</html>