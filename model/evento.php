<?php
    //CRIADO: Daniel Santiago, Devstiago
    //DATA:31.01.2025

    $fileInclude = '../util/conx.php';
    if (file_exists($fileInclude)) {
        include_once $fileInclude;
    }
    
    class cEvento {
        
        public $NomeEvento;
        public $DescEvento;
        public $DescData;
        public $DescHora;
        public $Local;

        public function __construct()
        {
            $this->NomeEvento = '';
            $this->DescEvento = '';
            $this->DescData   = '';
            $this->DescHora   = '';
            $this->Local      = '';
        }

        public function GetEvento(){
            //retorna do banco as info do evento

            $return_ = false;

            $conn = OpenCon();
             
			$sql = "SELECT * FROM A001_TABEVENTO WHERE ATIVO = 1 ";
			$result = mysqli_query($conn, $sql);	 
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            if(mysqli_num_rows($result) <= 0){
                //Não encontrou nenhum evento ativo
            }else{

                $this->NomeEvento = $row["NOME_EVENTO"];
                $this->DescEvento = $row["DESC_EVENTO"];
                $this->DescData   = $row["DESC_DATA"];
                $this->DescHora   = $row["DESC_HORA"];
                $this->Local      = $row["DESC_LOCAL"];
                
                $return_ = true;
            
            }

            return $return_;
        }

    }

?>