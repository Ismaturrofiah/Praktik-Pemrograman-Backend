<?php

class StokBarang{
    var $kode;
    var $nama;
    var $jumlah;
    var $harga;
    var $tahun;

    function __construct()
    {
        $this->kode = "A000";
        $this->nama = "No Name";
        $this->jumlah = 0;
        $this->harga = 0;
        $this->tahun = 0;
    }
    
    function isiStok($kode, $namabarang, $jumlah, $hargabarang, $tahunexpired)
    {
        $this->kode = $kode;
        $this->nama = $namabarang;
        $this->jumlah = $jumlah;
        $this->harga = $hargabarang;
        $this->tahun = $tahunexpired;
    }

    function cetakStok()
    {
        echo "Kode barang : ".$this->kode."</br>";
        echo "Nama barang : ".$this->nama."</br>";
        echo "Jumlah barang : ".$this->jumlah."</br>";
        echo "Harga barang : Rp ".$this->harga.",00</br>";
        echo "Batas Kadaluarsa : ".$this->kapanExpired()." tahun</br>";
        echo "---------------------------------------------------</br>";
    }

    function kapanExpired()
    {
        $expired = $this->tahun - date('Y');
        return $expired;
    }
}