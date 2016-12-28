<html>
<head>
	<title>Simple CRUD PHP</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
	<style>body{padding-top:70px}</style>
</head>
<body>
<!-- NAVIGASI -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="?tambah">Tambah Data</a></li>
        <li><a href="?lihat">Lihat Data</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- HALAMAN -->
<?php 
if(isset($_GET['tambah']))
	include('pages/tambah.php');
elseif(isset($_GET['lihat']))
	include('pages/lihat.php');
elseif(isset($_GET['edit']) and isset($_GET['id']))
	include('pages/edit.php');
else
	include('pages/home.php');
?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>