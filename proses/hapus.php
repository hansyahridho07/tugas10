<?php
include "koneksi.php";
$con->query("DELETE FROM produk WHERE id=".$_GET['id']);
?>
<script>
	alert('Data berhasil di hapus!')
	document.location = '../index.php'
</script>