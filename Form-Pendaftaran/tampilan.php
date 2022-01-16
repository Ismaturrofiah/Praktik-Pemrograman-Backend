<?php
    require 'function.php';
    $rows = query("SELECT * FROM data_mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
        <a href="Indeks.php">Tambah data</a>
            <table border="1" cellspacing=0 cellpadding=10>
                <thread>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Warga Negara</th>
                    <th>Status Mahasiswa</th>
                    <th>Keterangan</th>
                </thread>
                <tbody>
                <?php $i=1; ?>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["NIM"]; ?></td>
                        <td><?php echo $row["nama"]; ?></td>
                        <td><?php echo $row["tanggal_lahir"]; ?></td>
                        <td><?php echo $row["jenis_kelamin"]; ?></td>
                        <td><?php echo $row["program_studi"]; ?></td>
                        <td><?php echo $row["warga_negara"]; ?></td>
                        <td><?php echo $row["stat"]; ?></td>
                        <td><?php echo $row["keterangan"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
</body>
</html>