<?php 
    //CRIADO: Daniel Santiago, Devstiago
    //DATA:07.02.2025

    $fileInclude = '../util/conx.php';
    if (file_exists($fileInclude)) {
        include_once $fileInclude;
    }

    class cTicket {

        public $Valor;
        public $taxa;
        public $total;

        public function __construct()
        {
            $this->Valor = 0;
            $this->taxa = 0;
            $this->total   = 0;

        }

        public function GetInfoIngresso(){
           
            //At this point, you can fetch information from the database.
            $this->Valor = 25;
            $this->taxa = 1;
            $this->total   = 26;
        }


    }

?>