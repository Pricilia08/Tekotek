<!DOCTYPE html>
<html>
<head>
	<title>Tekotek</title>
</head>
<body>
	<?php
		echo "Tekotek kotek kotek anak ayam turun 100";
		for ($i=100; $i>0 ; $i--) { 
			if ($i % 2 == 0) {
				$ganjil="orange";
				echo "<br> <span style='color:$ganjil; font-family: Helvetica'> Mati 1 tinggal $i</span>";
			}else{
				$genap= "brown";
				echo "<br> <span style='color:$genap; font-family: Helvetica'> Mati 1 tinggal $i</span>";
			}
		}
	?>

</body>
</html>