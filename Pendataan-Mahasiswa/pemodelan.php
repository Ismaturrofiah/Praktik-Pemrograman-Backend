<?php
    class ModelMahasiswa{

        public function tambahMhs($data) {
            $enk = password_hash($data->katasandi, PASSWORD_DEFAULT);

            $sql = "INSERT INTO mahasiswa_baru (nim, nama, katasandi, jeniskelamin, statusmhs, prodi, alamat) VALUES 
                    ('".$data->nim."','"
                        .$data->nama."','"
                        .$enk."','"
                        .$data->jeniskelamin."','"
                        .$data->statusmhs."','"
                        .$data->prodi."','"
                        .$data->alamat."')";
            return $sql;
        }
    }

?>