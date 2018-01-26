<?php
	include "../koneksi.php";
	$sql="INSERT INTO data (id, nim, nama, tanggal_lahir, jenis_kelamin, jurusan, tahun_masuk, tahun_lulus, email, no_hp, kerja) 
	VALUES ('', '$_POST[nim]' ,'$_POST[nama]', '$_POST[tanggal_lahir]','$_POST[jenis_kelamin]','$_POST[jurusan]','$_POST[tahun_masuk]','$_POST[tahun_lulus]','$_POST[email]','$_POST[no_hp]','$_POST[kerja]');";
	mysql_query($sql) or die ("Gagal menyimpan");
	header ("location:../branda.php?p=daftar");
?>