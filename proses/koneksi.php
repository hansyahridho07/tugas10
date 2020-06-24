<?php
$hostname	= "localhost";
$username	= "root";
$password	= "";
$database	= "arkademy";

$con = mysqli_connect($hostname, $username, $password, $database);

if ($con->connect_error) {
	echo "Gagal koneksi ke database";
}