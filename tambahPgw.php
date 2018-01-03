<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama= $_POST['nama'];
		$kelas=$_POST['kelas'];
		$no = $_POST['no'];
		$alamat= $_POST['alamat'];
		$cita = $_POST['cita'];
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO uts (nama,kelas,no,alamat,cita) VALUES ('$nama','$kelas','$no','$alamat','$cita')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Siswa';
		}else{
			echo 'Gagal Menambahkan Siswa';
		}
		
		mysqli_close($con);
	}
	?>
