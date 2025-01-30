<?php
    function OpenCon()
    {
        if (1==0){
			
			//PRODUCAO
            $dbhost = "GHJDDSK43234JNSAKJDSHDSAKJDSHA";
            $dbuser = "GHJDDSKJNSAKJDSHDSAKJD43223SHA";
            $dbpass = "GHJDDSKJNSAKJDSHDSAK43123JDSHA";
            $db     = "GHJDDSKJNSAKJDSHDFSDDSSAKJDSHA";
        }else{
			
			//HOMOLOGACAO
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db     = "ingresse";
        }
               
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
        
        $conn->set_charset("utf8");

        return $conn;
    }
?>