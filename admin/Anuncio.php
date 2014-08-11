<!DOCTYPE html>

<html>
    <head>
        <title>Toca do Bixo</title>
        <link rel="stylesheet" type="text/css" href="style/style.css" />
<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="style/style7.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>   
    
    		<script type="text/javascript">
     function confirma() {
    var x;
    if (confirm("Tem certeza que deseja excluir este usuário?") == true) {
        x = "Certo então";
   } else {
        x = "Aí tu desistiu, franguin";
    }
    document.getElementById("confirmar").innerHTML = x;
}

        </script>  	

    
    
    </head>
	
    <body>	 

         <header>
             
           <div id='topoAbso'>  
             
<div id="logo">
<a href="index.php"><img src="../imagens/logo3.png" width="170px" /></a>
</div>
                      
		   <nav id="menu-inferior">
                       
                       <img id="imagem-pesquisa" src="../imagens/pesquisa.png" onclick="if(document.getElementById('pesquisa') .style.display=='none') {document.getElementById('pesquisa') .style.display=''}else{document.getElementById('pesquisa') .style.display='none'}" title="Clique para mostrar/ocultar"  width="25px" height="30" class="pesquisa"/>
<div id="pesquisa" style="display: none;">  
<form name="frmBusca" action="../resultadoPesquisa.php" method="POST">
 		<input type="text"  name="palavra" rows="2">
		<input type="submit" value='Pesquisar' id="botaopesquisa">
</form>
</div> 
              <div id='linksTopo'>         
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="index.php"><img src="../imagens/casa.png" width="4%"/> Home </a> &nbsp;&nbsp;
 <a href="../logout_toca.php"> <img src="../imagens/login2.png" width="3%" /> Efetuar Logout </a>
 
              </div> 
                   </nav>

 </div> 
        </header>


        <div id='simulaTop'> </div>


               <ul class="ca-menu">
                    <li>
                        <a href="Usuario.php">
                            <span class="ca-icon"><img src="../imagens/usuario.png" width="140px"  /></span>
                            <div class="ca-content">
                                
                                <h3 class="ca-sub">Usuário</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        
                        <a href="Comercio.php">
                            <span class="ca-icon"><img src="../imagens/comercio.png" width="140px" /></span>
                            <div class="ca-content">
                                
                                <h3 class="ca-sub">Comércio</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="listarAnuncio.php">
                            <span class="ca-icon"><img src="../imagens/anuncio.png" width="140px" /></span>
                            <div class="ca-content">
                                
                                <h3 class="ca-sub">Anúncio</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="Lazer.php">
                            <span class="ca-icon"><img src="../imagens/lazer.png" width="140px" /></span>
                            <div class="ca-content">
                                
                                <h3 class="ca-sub">Lazer</h3>
                            </div>
                        </a>
                    </li>
                 					
                </ul>
         <article>
   <?php
//session_start();
require '../includes/funcoesuteis.inc';
validaAutenticacao('ADM','../frmlogin.html');
include_once '../conexao/conecta.inc';

echo '<div id="anuncio">';

echo '<h2>Ambiente Administrativo</h2>';

$sql = "SELECT * FROM anuncio_de_moradia";

$result = mysql_query($sql);

echo '<table border=1>';
echo '<caption> Anúncios Cadastrados </caption>';
echo '<tr>';
echo '<th> Título </th>';
echo '<th> Descrição </th>';
echo '<th> CPF </th>';
echo '<th> CEP </th>';
echo '<th> Logradouro </th>';
echo '<th> Bairro </th>';
echo '<th> Preço </th>';

echo '<th colspan=2> Ação </th>';
echo '</tr>';
while($usuarios = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $usuarios['TITULO_POSTAGEM'] . '</td>';
    echo '<td>' . $usuarios['DESCRICAO_ANUNCIO'] . '</td>';
    echo '<td>' . $usuarios['CPF_ANUNCIANTE'] . '</td>';
    echo '<td>' . $usuarios['CEP_ANUNCIO'] . '</td>';
    echo '<td>' . $usuarios['LOGRADOURO_ANUNCIO'] . '</td>';
    echo '<td>' . $usuarios['BAIRRO_ANUNCIO'] . '</td>';
    echo '<td>' . $usuarios['PRECO_ANUNCIO'] . '</td>';
    
    
    echo '<td> <a href=../frmAtualizar.php?codigo='.$usuarios['COD_ANUNCIANTE'].'> Atualizar </a> </td>';
    echo '<td> <a href=excluirAnuncio.php?codigo='.$usuarios['COD_ANUNCIANTE'].'> Excluir </a> </td>';

    
    echo '</tr>';
}

echo '</table>';


echo '<a href=../logout_toca.php>Efetuar Logout</a><br/>';
echo '<a href=indexadmin.php> Voltar </a><br/>';
echo '<meta charset=UTF-8>';

echo '</div>';

?> 



          </article>  
             
    </body>
</html>
