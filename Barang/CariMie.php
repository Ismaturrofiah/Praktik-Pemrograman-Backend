<?php
    
    require('stokMie.php');

    $barangC = new stokMie();
    $barangC->isiStok("A001", "Mie Instan", "20", "2.500", "2024");

    $barangC->stokRasa("Indomie", "Kari Ayam");
    $barangC->cetakStokMie();
?>