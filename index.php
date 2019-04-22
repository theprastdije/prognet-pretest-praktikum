<!DOCTYPE HTML>
<html>
    <head>
        <title>Pretest Praktikum Prognet</title>
    </head>
    <body>
        <h1>MEMBER WARNET</h1>
        <br />
        <a href="tambahmember.php">Tambah Member</a>
        <br />
        <br />
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telp</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM MEMBER");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_member']; ?></td>
                    <td><?php echo $d['alamat_member']; ?></td>
                    <td><?php echo $d['telp_member']; ?></td>
                    <td>
                        <a href="editmember.php?id=<?php echo $d['id_member']; ?>">Edit</a>
                        <a href="hapusmember.php?id=<?php echo $d['id_member']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>