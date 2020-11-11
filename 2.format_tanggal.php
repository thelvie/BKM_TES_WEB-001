<!DOCTYPE html>
<html>
<head>
	<title>Kode Test : WEB-001</title>
</head>
<body>
	<p> <h1>Soal No. 2</h1><br>
		<h2>Program PHP edit format Tanggal</h2><br>
		<h3>Jawaban :</h3><br>
	</p>
	<?php
	//Tanggal yang akan di rubah 
	$tanggal = "2020-05-01";
	echo "Format Tanggal yang akan di ubah :". $tanggal;
	echo "<br/><br/><br/>";
	//Tanggal sekarang
	function get_now(){
		date_default_timezone_set('Asia/Jakarta');
		$today = date("Y-m-d");
		return $today;
	}
	//Fungsi Tanggal dari 2020-05-01 menjadi 05-20-01 menggunakan substr
	if (!function_exists('formattgl_substr')) {
		function formattgl_substr($tanggal) {
			$d = substr($tanggal, 8, 2);
			$m = substr($tanggal, 5, 2);
			$Y = substr($tanggal, 2, 2);
			return $m . '-' . $Y . '-' . $d;
		}
	}
	//Fungsi Tanggal dari 2020-05-01 menjadi 05-20-01 menggunakan date
	if (!function_exists('formattgl_date')) {
		function formattgl_date($tanggal){
			return date('m-Y-d', strtotime($tanggal));
		}
	}
	//Fungsi menampilkan 6 bulan berikutnya
	if (!function_exists('bln_kedpn')) {
		function bln_kedpn($tanggal){
			return date('Y-m-d', strtotime('+6 month', strtotime($tanggal)));		}
	}
	//Fungsi menampilkan umur
	if (!function_exists('umur')) {
		function umur(){
			$tgllhr = new DateTime('2020-05-01');
			$today = new DateTime('today');
			$d = $today->diff($tgllhr)->d;
			$m = $today->diff($tgllhr)->m;
			$y = $today->diff($tgllhr)->y;
			return $y . ' tahun ' . $m . ' bulan ' . $d .' hari ';
		}
	}

	//Hasil
	echo "a. Format Tanggal m-y-d menggunakan substr : ".formattgl_substr($tanggal);
	echo "<br/><br/>";
	echo "b. Format Tanggal m-y-d menggunakan date : ".formattgl_date($tanggal);
	echo "<br/><br/>";
	echo "c. 6 Bulan kedepan : ".bln_kedpn($tanggal);
	echo "<br/><br/>";
	echo "d. Umur : ".umur();
	echo "<br/><br/>";
?>
</script>
</body>
</html>