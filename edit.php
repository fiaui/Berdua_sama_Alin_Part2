<?php 
$id = $_GET['id'];
$database = new PDO("mysql:host=localhost;dbname=sekolah3", 'root', '');
$query = $database->query("SELECT * FROM siswa WHERE id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <div class="container-sm">
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="" class="form-select">
                <option value="10 RPL"<?= $data['kelas'] == '1' ? 'selected' : '' ?> >10 RPL</option>
                <option value="11 RPL"<?= $data['kelas'] == '2' ? 'selected' : '' ?> >12 RPL</option>
                <option value="12 RPL"<?= $data['kelas'] == '3' ? 'selected' : '' ?> >12 RPL</option>
            </select>
        </div>
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
    </div>
</body>
</html>