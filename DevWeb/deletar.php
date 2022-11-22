<?php

include 'conexao.php';

if(isset($_GET['exclue'])){
    $id=$_GET['exclue'];

    $sql="DELETE FROM `contatos` WHERE id=$id";
    $resultado = MYSQLI_query($con, $sql);
    if ($resultado){
     header('location:tabela.php');
    }

}

?>