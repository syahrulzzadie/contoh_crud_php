<?php
$link = new mysqli('localhost','root','','quis1')  or die('Database ora konek!');
$link->query("UPDATE `user` SET `nama`='".$_POST['nama']."', `username`='".$_POST['username']."', `password`='".$_POST['password']."', `email`='".$_POST['email']."' WHERE `id`='".$_POST['id']."'");
?><script>alert('Data Berhasil Diubah!');</script><?php
header('Location: ../index.php?lihat');
?>