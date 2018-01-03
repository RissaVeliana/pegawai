<?php 
 
 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id'];
		$nama= $_POST['nama'];
		$kelas=$_POST['kelas'];
		$no = $_POST['no'];
		$alamat= $_POST['alamat'];
		$cita = $_POST['cita'];
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE uts SET nama = '$nama', kelas = '$kelas', no = '$no', alamat = '$alamat', cita = '$cita' WHERE id = $id;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data Siswa';
		}else{
			echo 'Gagal Update Data Siswa';
		}
		
		mysqli_close($con);
	}
?>