<?php
session_start();
echo "Anda Berhasil Login Sebagai ".$_SESSION['Username']."
Dan Anda Terdaftar Sebagai ".$_SESSION['Status'];
?>
<br>
Silahkan Logout dengan klik link <a href='logout.php'> Disini
</a>