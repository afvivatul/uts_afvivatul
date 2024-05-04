<?php
    include 'koneksi.php'; 

    $query = "SELECT * FROM tb_makanan";
    $sql = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Website makanan</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="beranda.php">
            <img src="gambar.jpg" alt="" width="200" height="100" class="d-inline-block align-text-top">
           
             </a>
        </div>
      </nav>
      <div class="container">
        <figure>
            <blockquote class="blockquote">
              <h1><center>WARUNG BAROKAH</center></h1>
            </blockquote>
            <figcaption class="blockquote-footer">
            <cite =>DATA SEMUA MAKANAN</cite>
            </figcaption>
          </figure>
      </div>
      <div class="container">

        <a href="tambah.php" type="button" class="btn btn-primary">Tambah Data</a>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <form method="GET" action="">
            <a href="pedas.php?jenis_makanan=pedas" type="button" class="btn btn-primary">pedas</a>
            <a href="manis.php?jenis_makanan=manis" type="button" class="btn btn-primary">manis</a>
        </div>

      </div>
      <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">jenis makanan</th>
                <th scope="col">jumlah</th>
                <th scope="col">Nominal</th>
                <th scope="col">Opsi</th>
            </tr>
            </thead>
            <tbody>
             <?php
            if (mysqli_num_rows($sql) > 0) {
                $i = 1;
                while($result = mysqli_fetch_assoc($sql)){
            ?>
            <tr>
                <th scope="row">
                    <?php echo $i; ?>
                </th>
                <td>
                    <?php echo $result['nama'];?>
                </td>
                <td>
                    <?php echo $result['jenis_makanan'];?>
                </td>
                <td>
                    <?php echo $result['jumlah'];?>
                </td>
                <td>
                    <?php echo $result['nominal'];?>
                </td>
                <td>
                    <form method="GET" action="">
                    <a href="edit.php?edit=<?php echo $result['no'];?>" type="button" class="btn btn-warning">Edit</a>
                    <form method="GET" action="proses.php">
                    <a href="proses.php?hapus=<?php echo $result['no']; ?>" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php
                $i++;}
                }
            ?>
            </tbody>
        </table>
        </div>
      
</body>
</html>
   
