<!DOCTYPE html>
<html>
<head>
	<title>Kode Test : WEB-001</title>
</head>
<body>
	<p> <h1>Soal No. 4</h1><br>
		<h2>Program PHP Menampilkan Looping String</h2><br>
		<h3>Jawaban :</h3><br>
	</p>
	<?php
	$char = ['AKU','SUKA','MAKAN','NASI','PADANG'];
	$panjang = count($char);
	echo "a. ";
	for ($i=0; $i<$panjang ; $i++) {
		for ($j=5; $j>=$i; $j--) {
			echo " "; 
		} for ($k=0; $k<=$i; $k++) {
			echo $char[$k]." ";
		}
		echo ",";
	}
	for ($i=5; $i>=0; $i--) {
		for ($j=4; $j>=$i; $j--) {
			echo $char[$j]." ";
		} 
		echo ",";
	}
	echo "<br><br><br>";

	echo "b. ";
	for ($i=0; $i<$panjang ; $i++) {
		for ($j=5; $j>=$i; $j--) {
			echo " "; 
		} for ($k=0; $k<=$i; $k++) {
			echo $char[$k]." ";
		}
		echo "<br>";
	}
	for ($i=5; $i>=0; $i--) {
		for ($j=4; $j>=$i; $j--) {
			echo $char[$j]." ";
		} 
		echo "<br>";
	}
?>
</script>
</body>
</html>