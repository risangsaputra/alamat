<?php

if (empty($_SESSION['username'])) {
  include "index.php";
}
else{ 
	include '../koneksi.php';
	$id=$_GET['id_router'];
	if (empty($id)){
		echo "Data belum dipilih";
	}
	else{
		$sql="DELETE from router WHERE id_router='$id'";
		mysqli_query($konek,$sql)
		or die("Gagal perintah menghapus".mysqli_error());
		?>
		<script language="javascript">
		    window.alert('Kembali Ke data )');
		    document.location="location:http:index.php";
		</script>
	<?php }
}
?>