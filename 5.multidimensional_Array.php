<!DOCTYPE html>
<html>
<head>
	<title>Kode Test : WEB-001</title>
</head>
<body>
	<p> <h1>Soal No. 5</h1><br>
		<h2>Program PHP Menampilkan Bilangan Ganjil</h2><br>
		<h3>Jawaban :</h3><br>
	</p>
	<?php
	$buah = array(
				array
					('NAMA' => 'JERUK', 
					'HARGA' => '5000', 
					'RASA' => 'ASAM'
				),
				array
					('NAMA' => 'MANGGA', 
					'HARGA' => '20000', 
					'RASA' => 'MANIS'
				),
				array
					('NAMA' => 'APEL', 
					'HARGA' => '5000', 
					'RASA' => 'MANIS'
				),
				array
					('NAMA' => 'DURIAN', 
					'HARGA' => '50000', 
					'RASA' => 'MANIS'
				),
				array
					('NAMA' => 'DUKU', 
					'HARGA' => '10000', 
					'RASA' => 'ASAM'
				),
				array
					('NAMA' => 'NANAS', 
					'HARGA' => '5000', 
					'RASA' => 'ASAM'
				)
			);
	echo '<pre>';
	print_r($buah);
	echo "<br><br><br>";

	//Menambahkan buah PISANG, 5000, MANIS
	echo "a.Menambahkan data di variabel buah dan menampilkan urutan buah secara desc :";
	echo "<br>";
	$buah [] = [
				'NAMA' => 'PISANG', 
				'HARGA' => '5000', 
				'RASA' => 'MANIS'
				];
	sort($buah);
	print_r($buah,);
	




?>
</script>
</body>
</html>