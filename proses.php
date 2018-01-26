<?php
include "koneksi.php";
include "config.php";

function antiinjection($data){
$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
return $filter_sql;
}

$username = antiinjection($user);
$password = antiinjection($pass);

$sql="SELECT * FROM user WHERE username='$username' AND password='$password' ";
$tampil=mysql_query($sql);
$jumlah=mysql_num_rows($tampil);
$data=mysql_fetch_array($tampil);

if ($jumlah > 0){
session_start();

$_SESSION[nama] = $data['nama'];
$_SESSION[username] = $data['username'];
$_SESSION[registrasi] = $data['registrasi'];
$_SESSION[tipe] = $data['tipe'];
		if ($_SESSION[type] == "admin") {
			header("location:branda.php?p=index");
		}
		else {
			header("location:branda.php?p=index");
		}
}
else{
echo "<script>window.location = 'login.php?log=error'</script>";
}
?>