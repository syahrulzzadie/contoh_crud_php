<?php
$link = new mysqli('localhost','root','','quis1')  or die('Database ora konek!');
$link->query("delete from user where id='".$_GET['id']."'");
?><script>alert('Data Berhasil Dihapus!');</script><?php
header('Location: ../index.php?lihat');
?>