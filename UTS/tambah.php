
<?php
    include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>
<body>
    <form method="POST" action="proses.php">
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="beranda.php">
                    <img src="gambar.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    AFVIVATUL FAUZIYAH
                </a>
            </div>
        </nav>
        <div class="container">
            <figure>
                <blockquote class="blockquote">
                    <h1>TAMBAH DATA</h1>
                </blockquote>
                <figcaption class="blockquote-footer">
                 <cite title="Source Title">WARUNG BAROKAH</cite>
                </figcaption>
            </figure>
        </div>
        <div class="container">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Jenis makanan</label>
                <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" name="jenis_makanan" id="jenis_makanan" required>
                        <option selected>-- Pilih --</option>
                        <option value="pedas">pedas</option>
                        <option value="manis">manis</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">jumlah</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="jumlah" id="jumlah" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="nominal" id="nominal" required>
                </div>
            </div>
            <div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
                <a href="beranda.php" type="reset" class="btn btn-light">Cancel</button>
            </div>
        </div>
    </form>
</body>
</html>
