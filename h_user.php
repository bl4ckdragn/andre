<?php
include "koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($conn, "DELETE FROM user WHERE id='$id'");

if ($hapus) {

    echo "<script>
            alert('User berhasil dihapus!');
            window.location='user.php';
          </script>";

} else {

    echo "<script>
            alert('User gagal dihapus!');
            window.location='user.php';
          </script>";
}
?>