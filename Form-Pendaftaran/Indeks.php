<?php
    require 'function.php';

    if (isset($_POST["submit"])) {
        if(tambah($_POST)>0) {
            echo "
            <script>
                alert('Data BERHASIL ditambahkan');
                document.location.href = 'tampilan.php';
            </script>
            ";
        }
        else{
            echo"
            <script>
                alert('Data GAGAL ditambahkan');
                document.location.href = 'tampilan.php';
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h1>Form Pendaftaran</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><input type="text" name="NIM"></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Kata Sandi</td>
                        <td>:</td>
                        <td><input type="password" name="sandi"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal_lahir"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
                        <td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki - Laki</td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>:</td>
                        <td><select name="program_studi">
                            <option value=" ">---Select---</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Kedokteran">Kedokteran</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Warga Negara</td>
                        <td>:</td>
                        <td><input type="checkbox" name="warga_negara[]" value="WNI">WNI</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><input type="hidden" name="stat" value="mahasiswa aktif"></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><textarea name="keterangan"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" name="submit">Input</button>
                            <button type="reset" name="reset">Batal</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
