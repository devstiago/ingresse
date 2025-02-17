<?php 
    //CRIADO: Daniel Santiago, Devstiago
    //DATA:07.02.2025

    $fileInclude = '../util/conx.php';
    if (file_exists($fileInclude)) {
        include_once $fileInclude;
    }

    class cTicket {

        public $CODIGO;

        public $Valor;
        public $taxa;
        public $total;

        public $REL_EVENTO;
        public $REL_PAGAMENTO;
        public $NOME;
        public $CPF;
        public $FONE;
        public $EMAIL;
        public $DATAHORA;
        public $GEROU_PIX;
        public $PAGOU;


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

        public function ComprarTicket(){

            $this->PAGOU = 0;
            $this->GEROU_PIX = 0;
            $this->REL_PAGAMENTO = 0;

            date_default_timezone_set('America/Sao_Paulo');
            $this->DATAHORA = date('d/m/Y H:i:s', time());

            $return_ = false;

            $conn = OpenCon();
             
			$sql = "INSERT INTO A002_TABTICKET (REL_EVENTO,
                                                REL_PAGAMENTO,
                                                NOME,
                                                CPF,
                                                FONE,
                                                EMAIL,
                                                DATAHORA,
                                                GEROU_PIX,
                                                PAGOU)
                                                VALUES
                                                ($this->REL_EVENTO,
                                                 $this->REL_PAGAMENTO,
                                                 '$this->NOME',
                                                 '$this->CPF',
                                                 '$this->FONE',
                                                 '$this->EMAIL',
                                                 '$this->DATAHORA',
                                                 $this->GEROU_PIX,
                                                 $this->PAGOU
                                                )";

            if (mysqli_query($conn, $sql)) {	
                    
                $BoolAux = true;

                if( mysqli_affected_rows( $conn ) > 0 ) { 
                    $this->CODIGO = mysqli_insert_id( $conn );
                    $return_ = true;
                } else {
                    $this->CODIGO = 0;
                }
            }

            return $return_;

        }


    }

?>