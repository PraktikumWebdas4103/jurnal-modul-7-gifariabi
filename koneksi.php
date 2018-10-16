<?php  

	$conn = mysqli_connect('localhost','root','','mahasiswa');

	if ($conn){
		echo "sukses";
	}
	else{
		echo "gagal";
	}

?>