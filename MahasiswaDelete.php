<?php
    include 'Koneksi.php';

    $id = $_GET['id'];
    $result = mysqli_query($koneksi,"DELETE FROM siswa WHERE id=$id");
    header("Location:Index.php");
    ?>