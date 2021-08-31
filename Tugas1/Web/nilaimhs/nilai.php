<?php
  $nama = @$_POST['tnama'];
  $partisipasi = @$_POST['tpartisipasi'];
  $tugas = @$_POST['ttugas'];
  $uts = @$_POST['tuts'];
  $uas = @$_POST['tuas'];
  $hasil = @$_POST['thasil'];
  $kategori = @$_POST['tkategori'];

    if (isset($_POST['bproses'])) {
      $hasil = ($partisipasi + $tugas + $uts + $uas)/4;

    if ($hasil >= 85 && $hasil < 100) {
      $kategori = "A";
    }elseif ($hasil >= 80 && $hasil < 85) {
      $kategori = "A-";
    }elseif ($hasil >= 75 && $hasil < 80) {
      $kategori = "B+";
    }elseif ($hasil >= 70 && $hasil < 75) {
      $kategori = "B";
    }elseif ($hasil >= 65 && $hasil < 70) {
      $kategori = "B-";
    }elseif ($hasil >= 60 && $hasil < 65) {
      $kategori = "C+";
    }elseif ($hasil >= 55 && $hasil < 60) {
      $kategori = "C";
    }elseif ($hasil >= 40 && $hasil < 55) {
      $kategori = "D";
    }else{
      $kategori = "E";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>NB Apps* | Nilai Mahasiswa</title>
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
          <a class="nav-link" href="nilai.php">Entry Nilai</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>
  <div style="background: #FFFAFA; width: 1400px; height: 550px; border: 4px outset #FFFAFA">
<td>
<td>
<td>

<center>
  <div class="container-fluid" id="codelatte">
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2 style="font-size: 30px;">Nilai Mahasiswa</h2>
          <div class="underline-title"></div>
        </div>
        <form method="post" action="">
<table border="0" align="center">
  <tr>
    <td>Nama Mahasiswa</td>
    <td>=</td>
    <td>
      <input type="text" name="tnama"size="25" value="<?=$nama?>">
    </td>
  </tr>
  <tr>
    <td>Nilai Partisipasi</td>
    <td>=</td>
    <td>
      <input type="text" name="tpartisipasi" size="1" value="<?=$partisipasi?>">
    </td>
  </tr>
  <tr>
    <td>Nilai Tugas</td>
    <td>=</td>
    <td>
      <input type="text" name="ttugas" size="1"value="<?=$tugas?>">
    </td>
  </tr>
  <tr>
    <td>Nilai UTS</td>
    <td>=</td>
    <td>
      <input type="text" name="tuts" size="1"value="<?=$uts?>">
    </td>
  </tr>
  <tr>
    <td>Nilai UAS</td>
    <td>=</td>
    <td>
      <input type="text" name="tuas" size="1" value="<?=$uas?>">
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
      <input type="submit" name="bproses" value="submit">
    </td>
  </tr>
  <tr>
    <td>Hasil Akhir</td>
    <td>=</td>
    <td>
      <input type="text" name="thasil" value="<?=$hasil?>">
    </td>
  </tr>
  <tr>
    <td>Kategori Kelulusan</td>
    <td>=</td>
    <td>
      <input type="text" name="tkategori" value="<?=$kategori?>">
    </td>
  </tr>
</table>

</form>

<center>
<div class="footer">
    <footer>
        <div class="container">
            <p class="copyright">Copyright © 2021 NB Apps*. All Rights Reserved </p>
        </div>
    </footer>
</center>

</body>
</html>