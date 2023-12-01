<?php


try {


    $cnt = new PDO( "mysql:HOST=localhost; dbname=classdes_cosmyxx; charset=utf8", "classdes_cosmyxx", "cosmyxx.com" );


    $cnt->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


} catch ( Exception $e ) {


    echo "EL Error de Conexión es el siguiente:<br>" . $e->getMessage();


}


?>