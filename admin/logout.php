<?php
session_start();
unset($_SESSION['username']);
session_destroy();
?>
<script language="javascript">
    window.alert('Anda Yakin Ingin Keluar?)');
    document.location="login.php";
</script>