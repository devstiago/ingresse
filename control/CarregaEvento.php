<?php

include_once '../model/evento.php';  

$myEVENTO = new cEvento();

$return_arr = array();
    
    if($myEVENTO->GetEvento()){

        //Se encontrar o evento retorna um json com as info
        $return_arr[] = array("codigo_retorno" => 1,
                                  "NomeEvento" => $myEVENTO->NomeEvento,
                                   "DescEvento" => $myEVENTO->DescEvento,
                                  "DescData"   => $myEVENTO->DescData,
                                  "DescHora"   => $myEVENTO->DescHora,
                                  "Local"      => $myEVENTO->Local                
                                );

                                     
    }else{
        
        //retorna um json de null
        $return_arr[] = array("codigo_retorno" => 0,
                                        "msg" => 'Nenhum evento encontrado!');
    }
 
echo json_encode($return_arr); 

?>