<div class="container">
<form action="act/insert.php" method="POST">
	<div class="form-group">
		<label for="email">Nama :</label>
		<input type="text" class="form-control" name="nama" pattern=".{6,}" title="Minimal 6 Karakter" required>
	</div>
	<div class="form-group">
		<label for="username">Username :</label>
		<input type="text" class="form-control" name="username" pattern="[a-z\d]+" title="Tidak Boleh Ada Spasi" required>
	</div>
	<div class="form-group">
		<label for="password">Password:</label>
		<input type="text" class="form-control" name="password" pattern=".{6,}" title="Minimal 6 Karakter" required>
	</div>
	<div class="form-group">
		<label for="email">Email :</label>
		<input type="email" class="form-control" name="email" required>
	</div>
	<button type="submit" class="btn btn-primary">Update Data</button>
</form>
</div>