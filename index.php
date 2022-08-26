<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Admin</title>
</head>
<body>
    <?php
        require "koneksi2.php";
        $db = new database();
        $datas = $db->getData('siswa');
     ?>

        <div class="container-sm">
        <a href="tambah.php">Tambah Siswa</a>
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>

        <?php foreach($datas as $data) :?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['kelas'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id'] ?>"class="btn btn-info">Update</a>
                    <a href="proses_hapus.php?id=<?= $data['id'] ?>"class="btn btn-info">Hapus</a>
                </td>
            </tr>

        <?php endforeach ?>
        </table>
        </div>
</body>
</html>
