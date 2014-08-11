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
     function mostrar(m)
{ 
if (m === 1){
document.getElementById("lazer").style.display="block";
document.getElementById("cadastroLazer").style.display="none";
document.getElementById("listarLazer").style.display="none";
}else {
document.getElementById("lazer").style.display="block";
document.getElementById("cadastroLazer").style.display="none";
document.getElementById("listarLazer").style.display="block";
}
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
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="index.html"><img src="../imagens/casa.png" width="4%"/> Home </a> &nbsp;&nbsp;
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

              <?php
//session_start();
require '../includes/funcoesuteis.inc';
validaAutenticacao('ADM','javascript:history.back(1)');

echo '<div id="lazer">';

echo '<h3>Ambiente Administrativo</h3>';

$sql = "SELECT * FROM lazer";

$result = mysql_query($sql);

echo '<table border=1>';
echo '<caption> Lazeres Cadastrados </caption>';
echo '<tr>';
echo '<th> Código </th>';
echo '<th> Nome</th>';
echo '<th> Informação </th>';
echo '<th> Logradouro </th>';
echo '<th> Bairro</th>';

echo '<th colspan=2> Ação </th>';
echo '</tr>';
while($lazer = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $lazer['COD_LAZER'] . '</td>';
    echo '<td>' . $lazer['NOME_LAZER'] . '</td>';
    echo '<td>' . $lazer['INFORMACAO_LAZER'] . '</td>';
    echo '<td>' . $lazer['LOGRADOURO_LAZER'] . '</td>';
    echo '<td>' . $lazer['BAIRRO_LAZER'] . '</td>';
    
    echo '<td> <a id="link2" href=../frmAtualizar.php?codigo='.$lazer['COD_LAZER'].'> Atualizar </a> </td>';
    echo '<td> <a id="link2" href=excluirLazer.php?codigo='.$lazer['COD_LAZER'].'> Excluir </a> </td>';

    
    echo '</tr>';
}

echo '</table>';
echo '</div>';

echo '<a href="#" onclick="mostrar(2)"> Cadastrar Lazer </a><br/>';

echo '<meta charset=UTF-8>'; 
?>

<div id="cadastroLazer">

<h1>Cadastro de Lazer</h1>
<form id="form_lazer" action="novoLazer.php" method="post" >
    <table>
        <tr>
            
            <td><label>Nome do Lazer</label></td>
            <td><input type="text" name="nomeLazer" id="nomeLazer" /></td>
	
        </tr>
        
        
        
        <tr>
            <td><label>Informações do Lazer</label></td>
            <td><input type="text" name="informacaoLazer" id="informacaoLazer" /></td>
		
        </tr>
        
        
        <tr>
            
            <td><label>Logradouro do Lazer</label></td>
            <td><input type="text" name="logradouroLazer" id="logradouroLazer" /></td>
		
        </tr>   
        
        
        <tr>
            <td><label>Bairro do Lazer</label></td>
            <td><input type="text" name="bairroLazer" id="bairroLazer" /></td>
		<br />
                
        </tr>    
        
        <tr>
            
            <td></td>
            <td><input type="submit" value="Cadastrar Lazer" /></td>
        </tr>
		
    </table>

</form>
<br/><br/>

</div>

<a href="#" onclick="mostrar(1)" id="listarLazer"> Listar Lazer </a>             
<a href=../logout_toca.php>Efetuar Logout</a><br/>
<a href=javascript:history.back(1)> Voltar </a><br/>
       
<a href="#" onclick="mostrar(1)" id="listarComercio"> Listar Comercio </a>
    </body>
</html>