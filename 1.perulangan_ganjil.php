<!DOCTYPE html>
<html>
<head>
	<title>Kode Test : WEB-001</title>
</head>
<body>
	<p> <h1>Soal No. 1</h1><br>
		<h2>Program PHP Menampilkan Bilangan Ganjil</h2><br>
		<h3>Jawaban :</h3><br>
	</p>
	<?php
for ($angka=1;$angka<=15;$angka++)
	{
		if($angka%2==1)
		{
			echo $angka. ",";
		}
	}
?>
</script>
</body>
</html>