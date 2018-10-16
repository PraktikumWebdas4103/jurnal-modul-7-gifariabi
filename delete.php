<?php
	require_once("koneksi.php");
	include "input.php";
	$hapus = "DELETE FROM mahasiswa WHERE nim='".$nim."'";
	$query = mysqli_query($hapus,$conn);
?>