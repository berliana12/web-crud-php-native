<?php

    include 'Koneksi.php';
        $id =$_GET['id'];
        $result = mysqli_query($koneksi,"SELECT*FROM siswa WHERE id=$id");
        while ($data =mysqli_fetch_array($result)){
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $kota = $data['kota'];
}?>
<?php
    include 'Header.php'
?>
    <body padding="16px">
        <center><h1>Edit</h1>
            <form action="MahasiswaUpdate.php" method="post">
                <table border="0">
                    <tr>
                        <td>NAMA</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
                    </tr>
                    <tr>
                        <td>KOTA</td>
                        <td>:</td>
                        <td><input type="text" name="kota" value=<?php echo $kota; ?>></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                        <td><input type="submit" name="update" value="Edit" class="btn btn-success btn-sm"></td>
                    </tr>
                </table>
            </form>
        </center>
    <?php
    if(isset($_POST['update']))
    {
        $id =$_POST['id'];
        $nama =$_POST['nama'];
        $alamat =$_POST['alamat'];
        $kota =$_POST['kota'];
        $result =mysqli_query($koneksi,"UPDATE siswa set nama='$nama' ,alamat='$alamat', kota='$kota' where id=$id");
        header("Location:Index.php");
    }?>
</body>
</html>