<?php
	include "../koneksi.php";
	$sql="INSERT INTO job_fair (id, tanggal, subjek, detail) VALUES ('', '$_POST[tanggal]' ,'$_POST[subjek]', '$_POST[detail]');";
	mysql_query($sql) or die ("Gagal menyimpan");
	header ("location:../branda.php?p=index");
?>