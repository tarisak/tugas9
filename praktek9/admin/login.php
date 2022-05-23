<?php
include 'koneksi.inc.php';

session_start();

$username = $_POST['username'];
$pasword = $_POST['pasword'];

$login= mysqli_query($conn,"SELECT * FROM login_user WHERE username='$username' AND pasword='$pasword'");

$cek = mysqli_num_rows($login);

if($cek > 0){
$_SESSION['username'] = $username;
header("location:cetak.php");
}else{
header("location:index.php");
}
?>