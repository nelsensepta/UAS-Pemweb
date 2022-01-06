<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>edit Data Barang</title>
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

  <div class="container">
    <div class="row mt-5">
      <div class="col-md-6">
        <a href="index.php" class="btn btn-warning mb-5">Kembali Home</a>
        <?php
    include 'koneksi.php';
    $sql = "SELECT * FROM barang WHERE id_barang = " . $_GET['id_barang'];
    $data = mysqli_query($mysqli, $sql);
    $d = mysqli_fetch_assoc($data);
 ?>
        <form action="update.php" method="POST">
          <input type="hidden" name="id_barang" value="<?= $d['id_barang']; ?>">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['nama']; ?>">
          </div>
          <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="<?= $d['stok']; ?>">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $d['harga']; ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis barang</label>
            <div class="d-flex gap-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_barang" id="makanan" value="makanan"
                  <?php echo $d['jenis_barang'] == 'makanan' ? 'checked' : ""; ?> />
                <label class="form-check-label" for="makanan">
                  Makanan
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_barang" id="minuman" value="minuman"
                  <?php echo $d['jenis_barang'] == 'minuman' ? 'checked' : ""; ?> />
                <label class="form-check-label" for="minuman">
                  Minuman
                </label>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-4">Update</button>
        </form>
      </div>
    </div>
  </div>
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