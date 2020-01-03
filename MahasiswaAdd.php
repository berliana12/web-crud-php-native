<?php
    include 'Header.php';
?>
    <center><h1>Tambah</h1>
        <form action="MahasiswaAdd.php" method="post">
            <table width="25%" border="0"
                <tr>
                    <td>NAMA</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NAMA PERUSAHAAN</td>
                    <td><input type="text" name="nama_perusahaan"></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>NO HP</td>
                    <td><input type="text" name="no_hp"></td>
                </tr>
                <tr>
                    <td>KETERANGAN</td>
                    <td><input type="text" name="keterangan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Tambah" class="btn-success btn-lg"></td>
                </tr>
            </table>
        </form>
    </center>

    <?php
        if (isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $nama_perusahaan = $_POST['nama_perusahaan'];
            $email = $_POST['email'];
            $no_hp = $_POST['no_hp'];
            $keterangan = $_POST['keterangan'];
            include 'Koneksi.php';
            $result = mysqli_query($koneksi,"INSERT INTO siswa(nama,nama_perusahaan,email,no_hp,keterangan)values('$nama','$nama_perusahaan','$email','$no_hp','$keterangan')");
            echo "user added Successfully";
            header("location:Index.php");
        }?>
    </body>
    </html>