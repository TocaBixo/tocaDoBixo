<?php

echo '<meta charset=UTF-8>';
include '../conexao/conecta.inc';   

if("excluir='c'"){
$codigo_usuario = $_REQUEST['codigo'];

            $sql = "DELETE FROM usuario WHERE COD_LOGIN = '$codigo_usuario'";
           
             if(mysql_query($sql)){

            echo 'Dado Excluido com Sucesso!';
            
        }
        
        else {
            echo mysql_error() . '<br/>';
        } 
         echo '<br/>';
echo '<a href=javascript:history.back(1)> Voltar </a> <br/>';}









        ?>