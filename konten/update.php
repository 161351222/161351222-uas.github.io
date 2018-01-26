<?php
	include "../koneksi.php";
	$sql="UPDATE `data` SET 
	`nim` = '$_POST[nim]', 
	`nama` = '$_POST[nama]',
	`tanggal_lahir` = '$_POST[tanggal_lahir]',
	`jenis_kelamin` = '$_POST[jenis_kelamin]',
	`jurusan` = '$_POST[jurusan]',
	`tahun_masuk` = '$_POST[tahun_masuk]',
	`tahun_lulus` = '$_POST[tahun_lulus]',
	`email` = '$_POST[email]',
	`no_hp` = '$_POST[no_hp]',
	`kerja` = '$_POST[kerja]'
	WHERE `nim` = '$_POST[nim]';";
	mysql_query($sql) or die("Gagal Memperbaharui");
	header ("location:../branda.php?p=profil");
?>