<?php
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$image = $_POST['image'];
$title = $_POST['title'];
$deskripsi = $_POST['deskripsi'];
$date = $_POST['date'];
$link = $_POST['link'];

// menginput data ke database
mysqli_query($conn, "insert into tb_artikel values('','$image','$title','$deskripsi','$date','$link')");

// mengalihkan halaman kembali ke index.php
header("location:artikel.php");