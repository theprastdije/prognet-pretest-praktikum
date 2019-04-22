<!DOCTYPE HTML>
<html>
    <head>
        <title>Pretest Praktikum Prognet</title>
    </head>
    <body>
        <h1>MEMBER WARNET</h1>
        <br />
        <a href="index.php">Kembali</a>
        <br />
        <br />
        <h2>EDIT MEMBER WARNET</h2>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="aksiedit.php">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id_member']; ?>">
                            <input type="text" name="nama" value="<?php echo $d['nama_member']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="textarea" name="alamat" value="<?php echo $d['alamat_member']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td><input type="text" name="telepon" value="<?php echo $d['telp_member']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
        ?>
    </body>
</html>