<?php
// koneksi database
include 'config.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
$query = mysqli_query($conn, "delete from tb_artikel where id='$id'");
if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'artikel.php'</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!'); window.location = 'artikel.php'</script>";
}
