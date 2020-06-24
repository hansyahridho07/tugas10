<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">


  <title>Muhammad Ridho Hansyah</title>
</head>
<body>
  <h1 class="alert alert-primary"><center>Ubah Data </center></h1>
  <hr>
  <div class="container">
    <?php
    include "proses/koneksi.php";
    $sql = $con->query("SELECT * FROM produk WHERE id=".$_GET['id']);
    $sin = mysqli_fetch_array($sql);
    ?>
    <form method="POST" action="proses/edit.php">
      <input type="hidden" name="id" value="<?php echo $sin['id'] ?>">
      <div class="form-group">
        <h5>Nama Produk</h5>
        <input type="text" class="form-control" value="<?php echo $sin['nama_produk'] ?>" id="barang" name="barang">
      </div>
      <div class="form-group">
        <h5>Keterangan</h5>
        <select id="inputState" class="form-control" name="ket">
          <option selected>Pilih...</option>
          <option>Bumbu</option>
          <option>Pembersih</option>
          <option>Makanan</option>
        </select>
      </div>
      <div class="form-group">
        <h5>Harga</h5>
        <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $sin['harga'] ?>">
      </div>
      <div class="form-group">
        <h5>Jumlah</h5>
        <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $sin['jumlah'] ?>">
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>


  <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function() {
      $('#myTable').DataTable();
    } );
  </script>
</body>
</html>


<!-- 
<td>
  Button untuk modal 
  <a href="#" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>">Edit</a>
</td>
</tr>
 Modal Edit Mahasiswa
<div class="modal fade" id="myModal<?php echo $data['id']; ?>" role="dialog">
  <div class="modal-dialog">
    Modal content--> 