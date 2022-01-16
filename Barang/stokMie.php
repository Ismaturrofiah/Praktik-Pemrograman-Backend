<?php
    
    require('StokBarang.php');

    class stokMie extends StokBarang {
        var $mie;
        var $rasa;

        function __construct()
        {
            parent::__construct();
            $this->mie = "Mie Instan";
            $this->rasa = "No Rasa";
        }

        function stokRasa($mie, $rasa)
        {
            $this->mie = $mie;
            $this->rasa = $rasa;
        }

        function cetakStokMie()
        {
            $str = "{$this->cetakStok()}";
            echo "Nama produk mie instan : ".$this->mie."<br>";
            echo "Rasa mie instan : ".$this->rasa."<br>";
            echo "----------------------------------------------<br>";
            return $str;
        }
    }

?>