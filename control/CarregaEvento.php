<?php

include_once '../model/evento.php';  
include_once '../model/ticket.php'; 

$myEVENTO = new cEvento();
$myTICKET = new cTicket();

$return_arr = array();
    
    if($myEVENTO->GetEvento()){

      $myTICKET->GetInfoIngresso();

        //Se encontrar o evento retorna um json com as info
        $return_arr[] = array("codigo_retorno" => 1,
                                  "NomeEvento" => $myEVENTO->NomeEvento,
                                   "DescEvento" => $myEVENTO->DescEvento,
                                  "DescData"   => $myEVENTO->DescData,
                                  "DescHora"   => $myEVENTO->DescHora,
                                  "Local"      => $myEVENTO->Local,
                                  "vValor"    => $myTICKET->Valor,
                                  "vTaxa"     => $myTICKET->taxa,
                                  "vTotal"    => $myTICKET->total                
                                );

                                     
    }else{
        
        //retorna um json de null
        $return_arr[] = array("codigo_retorno" => 0,
                                        "msg" => 'Nenhum evento encontrado!');
    }
 
echo json_encode($return_arr); 

?>