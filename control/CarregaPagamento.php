<?php
 
include_once '../model/ticket.php'; 

//$myEVENTO = new cEvento();
$myTICKET = new cTicket();

$myTICKET->CODIGO = $_GET['p_CODIGO'];

$return_arr = array();
    
    if($myTICKET->GetPagamento()){

        //Se encontrar o evento retorna um json com as info
        $return_arr[] = array("codigo_retorno" => 1,
                                  "CodigoTicket" => $myTICKET->CODIGO,
                                  "NOME" => $myTICKET->NOME,
                                   "CPF" => $myTICKET->CPF,
                                   "CodigoPIX" => $myTICKET->CODIGOPIX
                                               
                                );

                                     
    }else{
        
        //retorna um json de null
        $return_arr[] = array("codigo_retorno" => 0,
                                        "msg" => 'Nenhum ingresso encontrado!');
    }
 
echo json_encode($return_arr); 

?>