<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];
include "../koneksi.php";
//mencari password terenkripsi berdasarkan username
$query	= "SELECT * FROM admin WHERE username = '$username'";
$hasil 	= mysqli_query($konek,$query) or die ("Error");
$data 	= mysqli_fetch_array($hasil);
$pengacak 	= "YENJAGTVOEOHW26R256V";
// cek kesesuaian password terenkripsi dari form login
// dengan password terenkripsi dari database
if(md5($pengacak.md5($password).$pengacak)==$data['password'])
{
//jika sesuai, maka jalankan session untuk username
    $_SESSION['username'] = $username ;
    
// menampilkan menu ke halaman akses
    ?>
    <script language="javascript">
        window.alert('Login Berhasil ! Untuk ke halaman admin klik OK');
        document.location="index.php";
    </script>
    <?php
    //echo"<h2>Login Berhasil</h2>";
    //echo"<p><a href=\"hal1.php\">Menu 1 </a> | <a href=\"hal2.php\">Menu 2</a></p>";
    //echo"<a href='logout.php'>Keluar</a>";
}
else {?>
    <script language="javascript">
        window.alert('username atau password salah, coba lagi..');
        document.location="Login.php";
    </script>
<?php
}
?>