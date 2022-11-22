<?php

$con = new MYSQLI('localhost', 'root', '', 'devweb');

if(!$con){
    echo "Conexão perdida com o servidor!";
}

?>