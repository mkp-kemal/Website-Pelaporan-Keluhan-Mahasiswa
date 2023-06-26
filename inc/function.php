<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","db_ukk2021p2khaidar");

function query($query){
global $conn;
$result = mysqli_query($conn, $query);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
	$rows[]= $row;
	}

	return $rows;
}

function registrasi($data){
	global $conn;

	$nim = $data["nim"];
	$nama_mahasiswa = htmlspecialchars(stripcslashes($data["nama_mahasiswa"]));
	// echo($nama_mahasiswa);
	// die();
	// $username = strtolower (htmlspecialchars(stripcslashes($data["username"])));
	// $telp = htmlspecialchars(stripcslashes($data["telp"]));
	$password =htmlspecialchars(mysqli_real_escape_string($conn, $data["password"]));
	$password2 =htmlspecialchars(mysqli_real_escape_string($conn, $data["password2"]));

	//cek username baru
	$result = mysqli_query($conn, "SELECT nim FROM mahasiswa WHERE nim = '$nim'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('nim sudah terdaftar!');
			</script>";
		return false;
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		?>
        <script type="text/javascript">
        alert("Konfirmasi Password tidak sesuai!");
        window.location.href="registrasi_login.php";
        </script>
        <?php
		return false;
	}
	//enskripsi password
	$password = md5($password);

	//masukkan data kedalam database
	mysqli_query($conn, "INSERT INTO mahasiswa VALUES ('', '$nama_mahasiswa', '$nim', '', '$password')");

		return mysqli_affected_rows($conn);
}



// function tambah
	function tambah($data){
		global $conn;
		// ambil data dari toap elemen

		$id_mahasiswa = $_SESSION['id_mahasiswa'];
		$satu = date( $data["tgl_pengaduan"]);
		$dua = htmlspecialchars( $data["isi_laporan"]);
		$st='-';
		// echo ($id_mahasiswa);
		// die();
		
		// upload gambar
		$gambar = upload();
		if(!$gambar){
			return false;
		}

		// query insert data
		$query = "INSERT INTO keluhan VALUES ('','$id_mahasiswa', '$satu','$dua', '$st','$gambar')";
		// $query = "INSERT IGNORE INTO pengaduan VALUES ('','$satu','$dua','$tiga','$st','$gambar');		";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}


	// function upload
	function upload(){
		$namafile = $_FILES["foto"]["name"];
		$tmpname = $_FILES ["foto"]["tmp_name"];
		$ekstensigambar = explode('.', $namafile);
		$ekstensigambar = strtolower(end($ekstensigambar));
		
	
		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;

		move_uploaded_file($tmpname, '../mahasiswa/foto/'.$namafilebaru);
		return $namafilebaru;
	}
