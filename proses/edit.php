<?php

include "koneksi.php";

$id 		= $_POST['id'];
$nama		= $_POST['barang'];
$ket		= $_POST['ket'];
$harga		= $_POST['harga'];
$jumlah		= $_POST['jumlah'];

$query = "UPDATE produk SET nama_produk='".$nama."', keterangan='".$ket."', harga='".$harga."', jumlah='".$jumlah."' WHERE id='".$id."'";

if (mysqli_query($con, $query)) {
	echo "<script>
	alert('Data berhasil diubah')
	document.location = '../index.php'
	</script>";
}else{
	echo "Error : " . $query . "<br/>" . mysqli_error($con);
}