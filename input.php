<form action="aksi.php" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="Laki-laki">Laki-laki
				<input type="radio" name="jk" value="Perempuan">Perempuan
				<input type="radio" name="jk" value="Lainnya">Lainnya</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="ps">
				<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
				<option value="D3 Perhotelan">D3 Perhotelan</option>
				<option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
				<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
				<option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
				<option value="D3 Sistem Multimedia">D3 Sistem Multimedia</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
				<option value="Komunikasi Bisnis">Fakultas Komunikasi Bisni</option>
				<option value="Rekayasa Industri">Fakultas Rekayasa Industri</option>
				<option value="Industri Kreatif">Fakultas Industri Kreatif</option>
			</select></td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><input type="textarea" name="moto"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="input"></td>
		</tr>
	</table>
</form>