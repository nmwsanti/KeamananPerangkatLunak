<?php
ob_start();
session_start();

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>NB Apps* | Balok</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="shortcut icon" href="img/logo.png">
  <style>
    body {
      font-family: "Times New Roman", Times, serif;
      background-color: #FFF8F3;
    }

    .navbar nav {
      margin: auto;
      text-align: center;
      width: 100%;
    }

    .navbar nav ul ul {
      display: none;
    }

    .navbar nav ul li:hover>ul {
      display: block;
      width: 150px;
    }

    .navbar nav ul {
      background: #FFF8F3;
      padding: 0 20px;
      list-style: none;
      position: relative;
      display: inline-table;
      width: 100%;
    }

    .navbar nav ul:after {
      content: "";
      clear: both;
      display: block;
    }

    .navbar nav ul li {
      float: right;
    }

    .navbar nav ul li:hover {
      background: #A8A8A8;
    }

    .navbar nav ul:hover a {
      color: #000;
    }

    .navbar nav ul li a {
      display: block;
      padding: 25px;
      color: #000;
      text-decoration: none;
      font-family: "Times New Roman", Times, serif;
      font-size: 25px;
    }

    .navbar nav ul ul {
      background: #A8A8A8;
      border-radius: 0px;
      padding: 0;
      position: absolute;
      top: 100%;
    }

    .navbar nav ul ul ul {
      position: absolute;
      right: 90%;
      top: 0;
    }

    .mySlides {
      display: none
    }

    .w3-left,
    .w3-right,
    .w3-badge {
      cursor: pointer
    }

    .w3-badge {
      height: 13px;
      width: 13px;
      padding: 0
    }

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #A8A8A8;
  color: black;
}

#card {
    background: #fbfbfb;
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    height: 760px;
    margin: 6rem auto 8.1rem auto;
    width: 427px;
    margin-top: 30px;
    margin-bottom: 30px;
}

#card-content {
    padding: 12px 44px;
}
#card-title {
    font-family: "Times New Roman", Times, serif;
    letter-spacing: 4px;
    padding-bottom: 23px;
    padding-top: 3px;
    text-align: center;
    margin-top: 30px;
}
.underline-title {
    background: -webkit-linear-gradient(right, #865439,  #C68B59);
    height: 2px;
    margin: 0.1rem auto 0 auto;
    width: 245px;
    margin-bottom: 30px;
}
a {
    text-decoration: none;
}
label {
    font-family: "Times New Roman", Times, serif;
    font-size: 15pt;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #865439,  #C68B59);
    height: 2px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}

#submit {
    background: #A8A8A8;
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #888b8a;
    cursor: pointer;
    color: white;
    font-family: "Times New Roman", Times, serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 10px;
    transition: 0.25s;
    width: 153px;
    outline: none;
}
#submit:hover {
    box-shadow: 0px 1px 18px#858887;
}

    .footer {
      padding: 50px 0;
      color: #000;
      background-color: #FFF8F3;
      margin-top: 15px;
    }

    .footer .copyright {
      text-align: center;
      padding-top: 15px;
      opacity: 0.3;
      font-size: 13px;
      margin-bottom: 0;
    }
  </style>
</head>

<body>
  <div class="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NB Apps*</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="balok.php">Balok</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>

  <div class="container-fluid" id="codelatte">
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2 style="font-size: 30px;">Hitung Disini !</h2>
          <div class="underline-title"></div>
        </div>
        <form action="" method="post" class="form">
          <label for="panjang" style="padding-top:13px">Masukkan Panjang (p) : </label>
          <input class="form-content" type="text" name="p" autocomplete="on" required />
          <div class="form-border"></div>

          <label for="lebar" style="padding-top:13px">Masukkan Lebar (l) : </label>
          <input class="form-content" type="text" name="l" autocomplete="on" required />
          <div class="form-border"></div>

          <label for="tinggi" style="padding-top:22px">Masukkan Tinggi (t) : </label>
          <input class="form-content" type="text" name="t" autocomplete="on" required />
          <div class="form-border"></div>
          
          <input type="submit" name="submit" value="Hitung" style="background: #A8A8A8;
          border: none; border-radius: 21px; box-shadow: 0px 1px 8px #888b8a; cursor: pointer;
          color: white; font-family: Times New Roman, Times, serif; font-size: 15px; height: 42.3px; margin: 0 auto;
          margin-top: 30px; margin-bottom: 10px; transition: 0.25s; width: 153px; outline: none;">
        </form>

        <center>
        <?php
        if(isset($_POST['submit']) && 
           is_numeric($p = $_POST['p']) && 
           is_numeric($l = $_POST['l']) && 
           is_numeric($t = $_POST['t'])){
            
         $LP = 2 * ($p * $l + $p * $t + $l * $t);
         $V = $p * $l * $t;

            echo "<label for='hasil' style='padding-top:22px'>Hasilnya : </label>";
            echo "<br><label for='luas' style='padding-top:22px'>Luas [2  × ($p  × $l + $l  × $p + $t)]= &nbsp  $LP </label>";
            echo "&nbsp&nbsp<label for='volume' style='padding-top:22px'>Volume [$p  × $l  × $t] = &nbsp  $V </label>";  
        }else {
            return;
            }
             
      ?>
      <center>

      </div>
    </div>
  </div>


  <div class="footer">
    <footer>
        <div class="container">
            <p class="copyright">Copyright © 2021 NB Apps*. All Rights Reserved </p>
        </div>
    </footer>
  </div>
  </div>
</body>
</html>