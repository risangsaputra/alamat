

<?php

 
$dbhost = 'localhost'; 
$dbuser = 'root';     
$dbpass = '';         
$dbname = 'monitoring';

$konek = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
 

if ($konek->connect_error) {
  
   die('Maaf koneksi gagal: '. $konek->connect_error);
}


?>