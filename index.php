<?php
session_start();
if (empty($_SESSION['username'])) {
	include 'login.php';
} else {
header('location:branda.php');
}
?>