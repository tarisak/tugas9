<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "data_pengguna";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis

    if(isset($_POST['Submit'])) {
    $nama=$_POST['nama'];
    $jkel=$_POST['jkel'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $kota=$_POST['kota'];
    $pesan=$_POST['pesan'];

    $sql = "INSERT INTO kontak (nama,jkel,email,alamat,kota,pesan) VALUES ('$nama','$jkel','$email','$alamat',' $kota','$pesan')";
        $kontak= mysqli_query($conn, $sql);

            if ($kontak) {
            echo "Tambah data berhasil";
            exit;
            }
        else {
        echo "Gagal";
        exit;
        }
    }
    header("location:kontak.html");
?>