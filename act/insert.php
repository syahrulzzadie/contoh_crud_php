<?php
$link = new mysqli('localhost','root','','quis1')  or die('Database ora konek!');
$link->query("INSERT INTO `user` (`nama`, `username`, `password`, `email`) VALUES ('".$_POST['nama']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['email']."')");
?><script>alert('Data Berhasil Disimpen!');</script><?php
header('Location: ../index.php?lihat');
?>