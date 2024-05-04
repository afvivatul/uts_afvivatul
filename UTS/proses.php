
<?php
 include 'koneksi.php';

    if (isset($_POST['submit'])){
        if($_POST['submit'] == "submit"){
            
            $nama           = $_POST['nama'];
            $jenis_makanan  = $_POST['jenis_makanan'];
            $jumlah     = $_POST['jumlah'];
            $nominal        = $_POST['nominal'];

            $query = "INSERT INTO tb_makanan VALUES(null, '$nama','$jenis_makanan','$jumlah','$nominal')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: beranda.php");
            }else{
                echo $query;
            }
        }
    }else if(isset($_POST['edit'])){
        if($_POST['edit'] == "edit"){

            $no             = $_POST['no'];
            $nama           = $_POST['nama'];
            $jenis_makanan  = $_POST['jenis_makanan'];
            $jumlah       = $_POST['jumlah'];
            $nominal        = $_POST['nominal'];

            $query = "UPDATE tb_makanan SET nama='$nama', jenis_makanan='$jenis_makanan', jumlah='$jumlah', nominal='$nominal' WHERE no ='$no'";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: beranda.php");
            }else{
                echo "edit data gagal";
            }
        
    }}
    if(isset($_GET['hapus'])){
        $no = $_GET['hapus'];
        $no = mysqli_real_escape_string($conn, $no);
        $query = "DELETE FROM tb_makanan WHERE no = '$no'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: beranda.php");
        }else{
            echo $query;
        }
    }else {
        echo "hapus data gagal";
    }
?>
