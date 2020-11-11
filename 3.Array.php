<!DOCTYPE html>
<html>
<head>
	<title>Kode Test : WEB-001</title>
</head>
<body>
	<p> <h1>Soal No. 3</h1><br>
		<h2>Program PHP Menampilkan Array</h2><br>
		<h3>Jawaban :</h3><br>
	</p>
	<?php
	$angka = array(20,10,100,30,15,5);
	echo "Data angka : [20,10,100,30,15,5]";
	echo "<br/><br/><br/>";
	//Mengurut dengan Asc
	sort($angka);
	echo "a.Asc : ";
	print_r($angka);
	echo '<br/>';
	
	//Mengurut dengan Desc
	rsort($angka);
	echo "Desc : ";
	print_r($angka);
	echo '<br/><br/>';

	reset($angka);

	
	//Menambahkan isi pada indeks terakhir
	$angka[] = "180";
	echo "b.tambah isi data pada indeks terakhir : ";
	foreach ($angka as $angka1) {
		echo $angka1.",";
	}
	echo '<br/><br/>';

	//Menghapus angka 30 
	unset($angka[1]);

	echo "b.hapus data angka 30 : ";
	echo $angka[0].",";
	echo $angka[2].",";
	echo $angka[3].",";
	echo $angka[4].",";
	echo $angka[5].",";

	echo "<hr>";

	echo "<pre>";
	print_r($angka);
	echo "</pre>";
	


?>
</script>
</body>
</html>