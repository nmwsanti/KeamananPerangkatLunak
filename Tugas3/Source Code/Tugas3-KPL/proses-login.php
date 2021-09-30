<?php
  session_start();
  include('koneksi.php'); 
  

  	$email = $_POST ['email'];
  	$password = MD5($_POST['password']);
  	$level = $_POST['level'];

  	$query  = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $_SESSION['last_login_timestamp'] = time(); 
	$result     = mysqli_query($conn, $query);
	$num_row     = mysqli_num_rows($result);
	
	if (isset($_POST["login"])) {
    try {
        //code...
        if (login($_POST) == false) {
            throw new Exception("email / password wrong !!!");
        }
       if ($level == "Dosen") {
  				header('location:home-dosen.php');
  			}elseif ($level == "Staff") {
  				header('location:home-staff.php');
  			}elseif ($level == "Mahasiswa") {
  				header('location:home-mhs.php');
  			}
        exit;
    } catch (Exception $error) {
        echo "<script>
        alert ('" . $error->getMessage() . "');
            document.location.href = 'login.php';
        </script>";
    }
	}

	if($num_row >=1) {
		$row         = mysqli_fetch_array($result);
	    $_SESSION['level'] = $row['level'];
	    if ($row['level'] == "Dosen") {
            // buat session login dan email
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "Dosen";

            $log_email = $row['email']; 
            $log_hakakses = $row['level'];
            $date = date("Y-m-d H:i:s");
            $query = "INSERT INTO log_activity (email,level,date)VALUES('$log_email','$log_hakakses','$date')";
            $sql = mysqli_query($conn, $query);

            // alihkan ke halaman dashboard dosen
            header("location:home-dosen.php");

            // cek jika Staff login sebagai Staff dan telah diverifikasi
            } else if (($row['level'] === "Staff")) {
              // buat session login dan email
              $_SESSION['email'] = $email;
              $_SESSION['level'] = "Staff";

              $log_email = $row['email']; 
              $log_hakakses = $row['level'];
              $date = date("Y-m-d H:i:s");
              $query = "INSERT INTO log_activity (email,level,date)VALUES('$log_email','$log_hakakses','$date')";
              $sql = mysqli_query($conn, $query);

              // alihkan ke halaman dashboard Staff
              header("location:home-staff.php");
             // cek jika Mahasiswa login sebagai Mahasiswa dan telah diverifikasi
            } else if (($row['level'] === "Mahasiswa")) {
              // buat session login dan email

              $_SESSION['email'] = $email;
              $_SESSION['level'] = "Mahasiswa";

              $log_email = $row['email']; 
              $log_hakakses = $row['level'];
              $date = date("Y-m-d H:i:s");
              $query = "INSERT INTO log_activity (email,level,date)VALUES('$log_email','$log_hakakses','$date')";
              $sql = mysqli_query($conn, $query);

              // alihkan ke halaman dashboard Mahasiswa
              header("location:home-mhs.php");
		  } else {
			    echo "<script>alert('Login Gagal');window.location='login.php';</script>";
		}
	}
?>