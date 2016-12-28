<?php
$link = new mysqli('localhost','root','','quis1') or die('Database ora konek!');
$query = $link->query("select * from user where id=".$_GET['id']);
$user = $query->fetch_assoc();
?>
<div class="container">
<form action="act/update.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
	<div class="form-group">
		<label for="email">Nama :</label>
		<input type="text" class="form-control" name="nama" pattern=".{6,}" title="Minimal 6 Karakter" value="<?php echo $user['nama']; ?>" required>
	</div>
	<div class="form-group">
		<label for="username">Username :</label>
		<input type="text" class="form-control" name="username" pattern="[a-z\d]+" title="Tidak Boleh Ada Spasi" value="<?php echo $user['username']; ?>" required>
	</div>
	<div class="form-group">
		<label for="password">Password:</label>
		<input type="text" class="form-control" name="password" pattern=".{6,}" title="Minimal 6 Karakter" value="<?php echo $user['password']; ?>" required>
	</div>
	<div class="form-group">
		<label for="email">Email :</label>
		<input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>" required>
	</div>
	<button type="submit" class="btn btn-primary">Input Data</button>
</form>
</div>