<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">Toko Sembako</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Daftar Barang</a>
          <a class="nav-link" href="#">Transaksi</a>
          <a class="nav-link" href="#">Cek Barang</a>
        </div>
      </div>
    </div>
  </nav>
  <main class="container">
    <div class="row  mt-5">
      <div class="col-md-6">
        <a href="form_input.php" class="btn btn-warning mb-5">Tambah Barang</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Stok</th>
              <th scope="col">Harga</th>
              <th scope="col">Jenis Barang</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'koneksi.php';
            $query = "select * from barang";
            $data = mysqli_query($mysqli, $query);
            $i =1;
            foreach ($data as $d) {
           ?>
            <tr>
              <td><?= $i;  ?></td>
              <td><?= $d['nama']; ?></td>
              <td><?= $d['stok']; ?></td>
              <td><?= $d['harga']; ?></td>
              <td><?= $d['jenis_barang']; ?></td>
              <td>
                <a href="form_edit.php?id_barang=<?= $d['id_barang']; ?>" class="btn btn-primary">Edit</a>
                <button class="btn btn-danger" type="button" data-bs-target="#exampleModal"
                  data-bs-toggle="modal">Hapus</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div><a href=""></a>
                      <div class="modal-body">
                        <p>Apakah Anda Yakin Akan Menghapusnya</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="hapus.php?id_barang=<?= $d['id_barang']; ?>" class="btn btn-danger">Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            <?php
            $i++;
          }  
           ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Daftar Barang</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Promo</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 Toko Sembako</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>