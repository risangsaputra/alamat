<!DOCTYPE html>
<html>
<head>
	<title>Traffic</title>
	<meta http-equiv="refresh" content="300">
</head>
<body>
	<?php
 include "../koneksi.php";
 $handle = @fopen("data.txt", "r");

 while (!feof($handle)) // Loop til end of file.
 {
 $buffer = fgets($handle, 4096);
  // Read a line.
 list($a,$b,$c)=explode(" ",$buffer);
 //Separate string by the means of |
 echo $a."-".$b."-".$c."<br>";
 $tanggal = date('Y-m-d H:i:s');
 $sql = "INSERT INTO traffic (id_traffic, ip, jitter, delay, tanggal) VALUES('','$a','$b','$c','$tanggal')";   
 mysqli_query($konek,$sql) or die(mysqli_error());
 	if ($sql) {
 		echo "sukses";
 	}
 	else{
 		echo "gagal";
 	}
 }
 ?>
</body>
</html>