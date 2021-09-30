<?php

require('koneksi.php'); 

if (isset($_GET['code'])) {
	$code = $_GET['code'];
	$query = "SELECT * FROM user WHERE verif_code = '$code'";
	$sql = mysqli_query($conn, $query);

	if (mysqli_num_rows($sql) > 0) {
		$user = mysqli_fetch_assoc($sql);
		$id = $user['id'];
		$query = "UPDATE user set is_verified=1 WHERE id=$id";
		$sql = mysqli_query($conn, $query);

		if($sql){
			echo "<script>
				alert('Verifikasi Berhasil Silahkan Login');
				document.location.href = 'login.php'
				</script>";
		} else{
			echo "Verifikasi Gagal!".$sql;
		}
	}else {
		echo "Code tidak dapat ditemukan atau Tidak Valid!";
	}
	}else{
		echo "Terdapat Kesalahan!";
}

?>