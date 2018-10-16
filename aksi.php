<?php  
	require_once("koneksi.php")
	if (isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelamin = $_POST['jk'];
		$studi = $_POST['ps'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];

		$sql = "INSERT INTO mahasiswa (nama,nim,jeniskelamin,studi,fakultas,asal,moto) VALUES ('$nama','$nim','$kelamin','$studi','$fakultas','$asal','$moto')";
		mysqli_query($conn,$sql);
		$query = mysqli_query($conn, "SELECT * FROM  mahasiswa");
	}
?>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>Aksi</th>
			</tr>
			<?php 
				while($data = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data["nama"]; ?></td>
				<td><?php echo $data["nim"]; ?></td>
				<td>
					<a href="\delete.php\">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>