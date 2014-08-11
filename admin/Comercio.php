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
document.getElementById("comercio").style.display="block";
document.getElementById("cadastroComercio").style.display="none";
document.getElementById("listarComercio").style.display="none";
}else {
document.getElementById("cadastroComercio").style.display="block";
document.getElementById("comercio").style.display="none";
document.getElementById("listarComercio").style.display="block";
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
include_once '../conexao/conecta.inc';

echo '<div id="comercio">';

$sql = "SELECT * FROM comercio";

$result = mysql_query($sql);

echo '<table border=1 class="tabela">';
echo '<caption> Comércios Cadastrados </caption>';
echo '<tr>';
echo '<th> Comercio </th>';
echo '<th> Descrição </th>';
echo '<th> Logradouro </th>';
echo '<th> Bairro</th>';
echo '<th> Telefone</th>';
echo '<th> Horario</th>';
echo '<th> Estacionamento</th>';
echo '<th> Wifi</th>';
echo '<th> IMAGEM </th>';

echo '<th colspan=2> Ação </th>';
echo '</tr>';
while($comercios = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $comercios['NOME_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['DESCRICAO_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['LOGRADOURO_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['BAIRRO_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['TELEFONE_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['HORARIO_COMERCIO'] . '</td>';
    echo '<td>' . $comercios['ESTACIONAMENTO_COMERCIO'].'</td>';
    echo '<td>' . $comercios['WIFI_COMERCIO'] . '</td>';
     echo '<td rowspan="1"> <img src="../imagens/' . $comercios["IMAGEM_COMERCIO"]. '"' . ' width="150px"></center></td>';   
  echo '<td> <a id="link2" href=../frmAtualizar.php?codigo='.$comercios['COD_COMERCIO'].'> Atualizar </a> </td>';
    echo '<td> <a id="link2" href=excluirComercio.php?codigo='.$comercios['COD_COMERCIO'].'> Excluir </a> </td>';

    
    echo '</tr>';
	}

echo '</table>';


echo '<a href=javascript:history.back(1)> Voltar </a><br/>';
echo '<a href="#" onclick="mostrar(2)"> Cadastrar Comercio </a><br/>';

echo '</div>';

?> 
	
<div id="cadastroComercio">
   
  <h1> Cadastro de Comercio </h1>
<form id="form_comercio" action="novoComercio.php?funcao=gravar" method="post" enctype="multipart/form-data">
  <center>         
    <table class="form">
      <tr>
             <td id="label">Digite o Nome do Comercio</td>
             <td><input type="text" name="nomeComercio" id="nomeComercio" onkeypress="return SomenteLetra(event);" /></td>
             </tr>
            
             <tr>
             <td id="label">Descrição do Comercio</td>
             <td><input type="text" name="descricaoComercio" id="descricaoComercio" /></td>
             </tr>
             
             <tr>
             <td id="label">Logradouro do Comercio</td>
             <td><input type="text" name="logradouro" id="logradouro" /></td>
             </tr>
             
             <tr>
             <td id="label">Bairro do Comercio</td>
             <td><input type="text" name="bairroComercio" id="bairroComercio" /></td>
             </tr>
             
             <tr>
             <td id="label">Telefone do Comercio</td>
             <td><input type="text" name="telComercio" id="telComercio" onkeypress="return SomenteNumero(event); return mascara(this,'##-####-####')" maxlength="12"/></td>
             </tr>
             
              <tr>
             <td id="label">Horário de Funcionamento</td>
             <td><input type="text" name="horarioComercio" id="horarioComercio" /></td>
             </tr>
             
             
             
             <tr>
             <td id="label">O comercio possui estacionamento?</td>
             <td><select name="estacionamento">
                  <option value="SIM"> Sim </option>
                  <option value="NÃO"> Não </option>
                </select></td>
             </tr>

             <tr>
             <td id="label">O comercio possui Wifi?</td>
             <td><select name="wifi">
                   <option value="SIM"> Sim </option>
                   <option value="NÃO"> Não </option>
                </select></td>
             </tr>
             
              <tr>
              <td id="label"> <span>Arquivo:</span>
            <input type="file" name="arquivo" /> <br /><br /> </td>
             </tr>
             
             
             <tr>
             <td></td>
             <td><input type="submit" value="Cadastrar Comercio" /></td>
             </tr>
             
             
             </table>		
	</center>
	</form>

</div>

<a href="#" onclick="mostrar(1)" id="listarComercio"> Listar Comercio </a>
    </body>
</html>
