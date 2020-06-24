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
  <h1 class="alert alert-primary"><center>Toko Arkademy </center></h1>
  <hr>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahData">
          Tambah Data
        </button>
        <br><br>
        <table class="table" id="myTable">
         <thead class="thead-light">
          <tr style="text-align: center">
            <th scope="col">#</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "proses/koneksi.php";
          $sql = "SELECT * FROM produk ORDER BY id ASC";
          $hasil = $con->query($sql);

          if ($hasil == FALSE){
            trigger_error("Syntax mysql salah: " . $sql . "Error: " . $con->error, E_USER_ERROR);
          }else{
            $no = 1;
            while ($h = $hasil->fetch_array()){
              ?>
              <tr style="text-align: center">
                <th scope="row"><?php echo $no ?></th>
                <td><?php echo $h['nama_produk'] ?></td>
                <td><?php echo $h['keterangan'] ?></td>
                <td><?php echo $h['harga'] ?></td>
                <td><?php echo $h['jumlah'] ?></td>
                <td>
                  <a href="ubah.php?id=<?php echo $h['id'] ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="edit"><i class="fas fa-pencil-alt"></i></a>
                  <a href="proses/hapus.php?id=<?php echo $h['id'] ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-primary btn-sm"><i class="far fa-trash-alt" data-toggle="tooltip" title="delete"></i></a>
                </td>
              </tr>
              <?php
              $no++;
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal Tambah Data-->
  <div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahData" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="proses/buat.php">
            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang">
            </div>
            <div class="form-group">
              <select id="inputState" required="" class="form-control" name="ket">
                <option selected>Pilih...</option>
                <option>Bumbu</option>
                <option>Pembersih</option>
                <option>Makanan</option>
              </select>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Edit Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="EditData" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="ket" name="ket" placeholder="Keterangan">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>


<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $('.collapse').collapse()
  </script>
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