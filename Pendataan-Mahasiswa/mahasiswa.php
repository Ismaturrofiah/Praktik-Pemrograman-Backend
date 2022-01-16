<?php

    require('form.php');
    require('pemodelan.php');
    error_reporting(0);

    class Mahasiswa{
        var $nim;
        var $nama;
        var $katasandi;
        var $jeniskelamin;
        var $statusmhs;
        var $prodi;
        var $alamat;

        function __construct($nim="V3420XXX",$nama="No Name",$katasandi="default",$jeniskelamin="no gender",$statusmhs="aktif",$prodi="tidak terdaftar",$alamat="default")
        {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->katasandi = $katasandi;
            $this->jeniskelamin = $jeniskelamin;
            $this->statusmhs = $statusmhs;
            $this->prodi = $prodi;
            $this->alamat = $alamat;
        }

        function isiData($nim,$nama,$katasandi,$jeniskelamin,$statusmhs,$prodi,$alamat){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->katasandi = $katasandi;
            $this->jeniskelamin = $jeniskelamin;
            $this->statusmhs = $statusmhs;
            $this->prodi = $prodi;
            $this->alamat = $alamat;
        }

        function cetakData(){
            $txt= "NIM : ".$this->nim."</br>";
            $txt.= "Nama Lengkap : ".$this->nama."</br>";
            $txt.= "Jenis Kelamin : ".$this->jeniskelamin."</br>";
            $txt.= "Status Mahasiswa : ".$this->statusmhs."</br>";
            $txt.= "Program Studi : ".$this->prodi."</br>";
            $txt.= "Alamat : ".$this->alamat."</br>";
            $txt.= "---------------------------------------------------</br>";
            return $txt;
        }

        public function inputForm(){
            $formMhs = new form('', 'INPUT');
            $formMhs->addFieldtext('nim', 'NIM : ');
            $formMhs->addFieldtext('nama', 'Nama Lengkap : ');
            $formMhs->addFieldpassword('katasandi', 'Password : ');
            $formMhs->addFieldradio('jeniskelamin', 'Jenis Kelamin : ');
            $formMhs->addFieldcheckbox('statusmhs', 'Status Mahasiswa : ');
            $formMhs->addFieldselect('prodi', 'Program Studi : ');
            $formMhs->addFieldtextarea('alamat', 'Alamat : ');
            
            if(isset($_POST['tombol']))
            {
                $data = $formMhs->getDataText();
                $katasandi = $formMhs->getDataPassword();
                $radio = $formMhs->getDataRadio();
                $checkbox= $formMhs->getDataCheckbox();
                $select = $formMhs->getDataSelect();
                $textarea = $formMhs->getDataTextarea();

                $this->nim = $data[0];
                $this->nama = $data[1];
                $this->katasandi = $katasandi[0];
                $this->jeniskelamin = $radio[0];
                $this->statusmhs = $checkbox[0];
                $this->prodi = $select[0];
                $this->alamat = $textarea[0];

                if (empty($this->statusmhs)) {
                    $this->statusmhs = "TIDAK AKTIF";
                }
                $txt=$this->cetakData();
                require('viewdata/tampilan.php');

                require('connection.php');
                $modelMhs = new ModelMahasiswa();
                $sql=$modelMhs -> tambahMhs($this);

                if ($conn->query($sql) === TRUE)
                    {
                        echo "New record created successfully";
                    } else {
                        echo "Error : " . $sql . "<br>" . $conn->error;
                    }
            } else
            {
               $cetak=$formMhs->displayForm();
               require('viewdata/forminput.php');
            }
        }
    }
?>