<?php
include "koneksi.php";

$nama		= $_POST['barang'];
$ket		= $_POST['ket'];
$harga		= $_POST['harga'];
$jumlah		= $_POST['jumlah'];

$query = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES ('$nama','$ket','$harga','$jumlah')";

if (mysqli_query($con,$query)) {
	echo "<script language='JavaScript'>
	alert('Pendaftaran Berhasil, silahkan Login terlebih dahulu')
	document.location = '../index.php'
	</script>";
}else{
	echo "Error ". $query . "<br>" . mysqli_error($con);
}