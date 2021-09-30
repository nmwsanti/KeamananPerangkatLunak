<?php 
include ("functions.php");

if(!isset($_GET["code"])) {
  exit("Can't find page");
}

$code = $_GET["code"];

$getEmailQuery = mysqli_query($conn, "SELECT email FROM resetpassw WHERE code='$code'");
if(mysqli_num_rows($getEmailQuery) == 0){
  exit("Can't find page");
} 

if(isset($_POST["password"])) {
  $pw = $_POST["password"];
  $pw = md5($pw);

  $row = mysqli_fetch_array($getEmailQuery);
  $email =$row["email"];

  $query = mysqli_query($conn, "UPDATE user SET password='$pw' WHERE email='$email'");

  if($query){
    $query = mysqli_query($conn, "DELETE FROM resetpassw WHERE code='$code'");
    echo "<script>alert('Update Password Berhasil!');window.location='../login.php';</script>";
  }
  else {
    exit("Someting went wrong");
  }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Forgot Password</title>
 <style>
      body {
       background-image : url("img/pastelpaint.jpg");
        background-repeat: no-repeat;
       background-size:cover;
      }
    </style>

</head>
<body>

 <center>
  <div class="card text-dark bg-light mb-3" style="max-width: 25rem; margin-top: 35px">
    <div class="card-body">
      <div class="card-body">
        <h5 class="card-title">Enter Re-New Password</h5>
      <br>
      <br>
    <form action="" method="post"class="row g-3">
      <div class="col-12">
        <input type="password" name="password" placeholder="New Password">
          <br>
          <br>
          <button type="submit" value="simpan" name="submit" class="btn btn-primary">Update Password</button></a>
        <p class="mt-5 mb-3 text-muted text-center">&copy;KPL by NMW 2021</p>
      </form>
    </div>
 </div>
</div>
</body>
</html>


