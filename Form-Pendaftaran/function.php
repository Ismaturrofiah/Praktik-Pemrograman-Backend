<?php

$conn = mysqli_connect('localhost', 'root', '', 'backend');

    function query($query)
    {
        global $conn;
            $result = mysqli_query($conn, $query);
            $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;

        $NIM = $data['NIM'];
        $nama = $data['nama'];
        $kata_sandi = $data['sandi'];
        $sandi = password_hash($kata_sandi, PASSWORD_DEFAULT);
        $tanggal_lahir = $data['tanggal_lahir'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $program_studi = $data['program_studi'];
        $warga_negara = "";
            if (empty($_POST['warga_negara'])) {
                $_POST['warga_negara'] = ["WNA"];
            }
            if (in_array('WNI', $_POST['warga_negara'])) {
                $warga_negara = "WNI";
            } elseif (in_array('WNA', $_POST['warga_negara'])) {
                $warga_negara = "WNA";
            }
        $stat = $data['stat'];
        $keterangan = $data['keterangan'];

        $query = "INSERT INTO data_mahasiswa VALUES ('$NIM', '$nama', '$sandi', '$tanggal_lahir', '$jenis_kelamin', '$program_studi', '$warga_negara', '$stat', '$keterangan')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn); 
    
    }

    function hapus($id)
    {
        global $conn;
        $query = "DELETE FROM data_mahasiswa WHERE id=$id";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }
?>