<?php
include '../conexao/conecta.inc';
if($_GET['funcao'] == "gravar" && is_file($_FILES['arquivo']['tmp_name'])){
    
    $foto = $_FILES['arquivo']['name'];
    $foto = str_replace(" ", "_", $foto);
    $foto = str_replace("á", "a", $foto);
    $foto = str_replace("à", "a", $foto);
    $foto = str_replace("â", "a", $foto);
    $foto = str_replace("ã", "a", $foto);
    $foto = str_replace("é", "e", $foto);
    $foto = str_replace("ê", "e", $foto);
    $foto = str_replace("í", "i", $foto);
    $foto = str_replace("ì", "i", $foto);
    $foto = str_replace("î", "i", $foto);
    $foto = str_replace("ó", "o", $foto);
    $foto = str_replace("ò", "o", $foto);
    $foto = str_replace("õ", "o", $foto);
    $foto = str_replace("ô", "o", $foto);
    $foto = str_replace("û", "u", $foto);
    $foto = str_replace("ù", "u", $foto);
    $foto = str_replace("ú", "u", $foto);
    $foto = str_replace("ç", "c", $foto);
    
    $foto = strtolower($foto);
    
    $tipos = array("image/pjpeg", "image/jpeg", "image/pjpeg", "image/jpeg", "image/gif", "image/png");
    $arqType = $_FILES['arquivo']['type'];
    if(array_search($arqType, $tipos) === false){
        echo "<meta http-equiv='refresh' content='0; url=adicionarImagem.php'>
              <script type='text/javascript'>alert('Formato inválido')</script>";      
    }else{
    
    if(file_exists("../imagens/$foto")){
       $a = 1;
       while(file_exists("../imagens/[$a]$foto")){
           $a++;
       }
       $foto = "[".$a."]$foto";
        }
    
     if(!move_uploaded_file($_FILES['arquivo']['tmp_name'], "../imagens/".$foto)){
         
       echo "<meta http-equiv='refresh' content='0; url=adicionarImagem.php'>
              <script type='text/javascript'>alert('Erro no upload do arquivo')</script>";        
     } 
        
     $sql = mysql_query("INSERT INTO imagem(IMAGEM) value('$foto')"); 
     header("Location: adicionarImagem.php");
     
    }   
}else{
    echo "<meta http-equiv='refresh' content='0; url=adicionarImagem.php'>
              <script type='text/javascript'>alert('Formato inválido')</script>";
        
    
}
