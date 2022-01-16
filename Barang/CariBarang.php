<?php
    
    require('StokBarang.php');

    $barangA = new StokBarang();
    $barangA->isiStok("A001", "Indomie Kari Ayam", "20", "2.500", "2024");

    $barangB = new StokBarang();

    $barangA->cetakStok();
    $barangB->cetakStok();
?>
