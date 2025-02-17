<?php

include_once '../model/evento.php';  
include_once '../model/ticket.php'; 

$myEVENTO = new cEvento();
$myTICKET = new cTicket();

$VALIDA_OK = 1;
$MSG = '';

$myTICKET->REL_EVENTO = $_GET['p_RELEVENTO'];
$myTICKET->NOME       = $_GET['p_NOME'];
$myTICKET->CPF        = $_GET['p_CPF'];
$myTICKET->FONE       = $_GET['p_FONE'];
$myTICKET->EMAIL      = $_GET['p_EMAIL'];


if(empty($myTICKET->NOME)){

  $VALIDA_OK = 0;
  $MSG = 'Informe um Nome!';

} 

if(empty($myTICKET->CPF)&&($VALIDA_OK==1)){

  $VALIDA_OK = 0;
  $MSG = 'Informe um CPF!';
  
} 

if(empty($myTICKET->FONE)&&($VALIDA_OK==1)){

  $VALIDA_OK = 0;
  $MSG = 'Informe um Whattsapp!';
  
} 

if(empty($myTICKET->EMAIL)&&($VALIDA_OK==1)){

  $VALIDA_OK = 0;
  $MSG = 'Informe um EMAIL!';
  
} 

$return_arr = array();

if($VALIDA_OK == 1){

  //Verifica se ja esta na list $myTICKET->TemTicket();
  //Se false
  $myTICKET->ComprarTicket();
  //Tem pagamento Pendente - Se tem Mostra Qrcode
  //Se Não -> Gera QrCodePagamento

  $return_arr[] = array("codigo_retorno" => 1,
                        "msg" => 'Pagamento Gerado',
                        "CODIGO_TICKET" => $myTICKET->CODIGO
                       );

}else{
 
  $return_arr[] = array("codigo_retorno" => 0,
                        "msg" => $MSG);

}



    
//     if($myEVENTO->GetEvento()){

//       $myTICKET->ComprarTicket();

//         //Se encontrar o evento retorna um json com as info
//         $return_arr[] = array("codigo_retorno" => 1,
//                                   "NomeEvento" => $myEVENTO->NomeEvento,
//                                    "DescEvento" => $myEVENTO->DescEvento,
//                                   "DescData"   => $myEVENTO->DescData,
//                                   "DescHora"   => $myEVENTO->DescHora,
//                                   "Local"      => $myEVENTO->Local,
//                                   "vValor"    => $myTICKET->Valor,
//                                   "vTaxa"     => $myTICKET->taxa,
//                                   "vTotal"    => $myTICKET->total                
//                                 );

                                     
//     }else{
        
//         //retorna um json de null
//         $return_arr[] = array("codigo_retorno" => 0,
//                                         "msg" => 'Nenhum evento encontrado!');
//     }
 
 echo json_encode($return_arr); 

?>