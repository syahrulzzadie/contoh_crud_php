<?php
$link = new mysqli('localhost','root','','quis1') or die('Database ora konek!');
$query = $link->query("select * from user");
?>
<div class="container">
  <h4>Data Pada Database :</h4>
  <table class="table table-hover">
    <thead bgcolor="#999">
      <tr>
        <th>Nama</th>
        <th>Username</th>
		<th>Password</th>
		<th>E-Mail</th>
		<th>Pilihan</th>
      </tr>
    </thead>
    <tbody bgcolor="#fff">
	<?php
		while($user = $query->fetch_array()){
			echo '<tr>'.
					'<td>'.$user['nama'].'</td>'.
					'<td>'.$user['username'].'</td>'.
					'<td>'.$user['password'].'</td>'.
					'<td>'.$user['email'].'</td>'.
					'<td>'.
						'<a class="btn btn-primary" href="?edit&id='.$user['id'].'">Edit</a> '.
						'<a class="btn btn-primary" href="act/del.php?id='.$user['id'].'">Hapus</a>'.
						'</td>'.
				'</tr>';
		}
	?>      
    </tbody>
  </table>
</div>
