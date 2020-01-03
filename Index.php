<?php
    include 'Koneksi.php';
    include 'Header.php';
?>
    <h1><center>DATA PERUSAHAAN</center></h1>
        <nav class="navbar navbar-inverse">
            <div clanav">
                    <li><a href="Index.php">Perusahaan</a></li>
                    <!-- <li><a href="ss="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="Index.php">WebSiteName</a>
                </div>
                <ul class="nav navbar-logout.php">Logout</a></li> -->
                </ul>
            </div>
        </nav>
<center><a href="MahasiswaAdd.php">Tambah</a></center>

    <table style="width:100%;" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>NAMA PERUSAHAAN</th>
                <th>EMAIL</th>
                <th>NO HP</th>
                <th>KETERANGAN</th>
                <th>ACTION</th>
            </tr>
        </thead>
    
        <tbody>
    <?php
            $result = mysqli_query($koneksi,'SELECT * FROM siswa Order BY id DESC');
            while ($data = mysqli_fetch_array($result))
                { ?>
                <tr>
                    <td><?=$data['id'] ?></td>
                    <td><?=$data['nama']?></td>
                    <td><?=$data['nama_perusahaan']?></td>
                    <td><?=$data['email']?></td>
                    <td><?=$data['no_hp']?></td>
                    <td><?=$data['keterangan']?></td>
                    <td>
                        <!-- <a href='MahasiswaUpdate.php?id=<?=$data['id']?>'>Edit</a> -->
                        <a href='MahasiswaDelete.php?id=<?=$data['id']?>'>Delete</a>
                    </td>
                </tr>
                <?php } ?>
        </tbody>
    </table></body></html>