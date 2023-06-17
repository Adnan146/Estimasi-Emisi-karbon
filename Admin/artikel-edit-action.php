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
mysqli_query($conn, "UPDATE tb_artikel SET image='$image', title='$title', deskripsi='$deskripsi', date='$date', link='$link' where id='$id'");


// mengalihkan halaman kembali ke index.php
header("location:artikel.php");