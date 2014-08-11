<!DOCTYPE html>

<html>
    <head>
        <title>Toca dos Bixos</title>
        <link rel="stylesheet" type="text/css" href="style/style.css" />
<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/cadastro.js"></script>
<script type="text/javascript" src="js/banner.js"></script> 
<script type="text/javascript" src="js/mostrar.js"></script> 
<script type="text/javascript" src="js/login.js"></script> 
<script type="text/javascript" src="js/valida.js"></script>  
    </head>
	
    <body>	 

         <header>

<img id="imagem-pesquisa" src="imagens/pesquisa.png" onclick="if(document.getElementById('pesquisa') .style.display=='none') {document.getElementById('pesquisa') .style.display=''}else{document.getElementById('pesquisa') .style.display='none'}" title="Clique para mostrar/ocultar"  width="25px" height="30" class="pesquisa"/>
<div id="pesquisa" style="display: none;">  
<form name="frmBusca" action="resultadoPesquisa.php" method="POST">
 		<input type="text" name="palavra" rows="2">
		<input type="submit"id="botaopesquisa">
</form>
</div> 

					
            <div id="logo">
			<a href="index.php"><img src="imagens/logo-oficial.png" width="135px" height="135px" /></a>
			</div>	
           
		   <nav id="menu-inferior">
  <a href="index.php"><img src="imagens/casa.png" width="4.5%" height="7.5%" /> Home </a> &nbsp;&nbsp;
  <a href="faleconosco.html"><img src="imagens/faleconosco.png" width="5%" height="8%" /> Fale conosco</a> &nbsp;&nbsp;
  <a href="anuncieaqui.html"><img src="imagens/anuncio.png" width="4%" height="7%" /> Anuncie Aqui</a> &nbsp;&nbsp;
 <a href="#dialog" name="login"> <img src="imagens/login.png" width="4%" height="7%" /> Entrar/  </a>
 <a href="#dialog2" name="login"> Cadastrar  </a>
  

<div id="boxes">
  <div id="dialog" class="window">
      <a href="#" class="close"> <img src="imagens/fechar.png" width="30px" height="25px"/> </a> 
         <form method="post" action="login_toca.php"> 
         <center>
            
             <table>
              
                
            <h1>Acesse sua conta</h1>
            
             
             <tr>
             <td><label>Email</label></td>
             <td><input type="text" id="caixa"   name="email" onblur="return ValidaEmail(this.value)"  required autofocus /></td> 
             </tr>
             
             <tr>
             <td><label>Senha</label></td>
             <td><input id="caixa" type="password" name="senha" required /></td> 
             </tr>
             
             
             <tr>
             <td> </td>
             <td><label><input id="caixa" type="submit" value="Entrar" class="entrar" /></label></td>
             
             </tr>
             
             <tr>
             <td> </td>
             <td><a href="#"> Esqueceu a sua senha? </a></td> 
             </tr>
            
             
             
             </table>
 
             
            </form>
</div>
    
    </div>  
    <div id="boxes2">
  <div id="dialog2" class="window2">
      <a href="#" class="close2"> <img src="imagens/fechar.png" width="30px" height="25px"/> </a> 
        <form id="meu_form" action="novoUsuario.php" method="post">
           
            <center>
            <h1> Cadastre-se </h1
            </center>
            
           <table>
             <tr>
             <td><label>Nome</label></td>
             <td><input type="text" name="nome" id="nome" onkeypress="return SomenteLetra(event)" required required autofocus/></td> 
             </tr>
             
             <tr>
             <td><label>Email</label></td>
             <td><input type="text" id="email1"   name="email" onblur="return ValidaEmail(this.value)" /></td>
             </tr>
             
             <tr>
             <td><label>Confirme o  email</label></td>
             <td><input type="text" name="conflogin" onblur="igual(email1.value, this.value)" id="conflogin" required /></td>
             </tr>
             
             <tr>
             <td><label>Senha</label></td>
             <td><input type="password" name="senha" id="senha" required/></td>
             </tr>
             
             <tr>
             <td><label>Confirme a senha</label></td>
             <td><input type="password" name="confsenha" id="confsenha" required/></td>
             </tr>
             
             
             
             
             <tr>
             <td> </td> 
             <td><input type="submit" value="Cadastrar" /></td>
             </tr>
           </table>
            
            
            <table>
             <tr>
             <td> </td>
             <td><input type="checkbox" name="termos" id="termos">
             <label>Li e aceito os <a href="termosUso.html">termos de uso e condições</a></label></td>
             </tr>
            </table>
             
	</form>
</div>
    
    </div> 

        </header>



<section>		
  <div id="banner" class="banner">
 
	<div id="banner_img">
    
   	  <img src="banner_img/1.jpg" width="100%" height="444px" border="0" alt="Banner">
        
    </div>
    
    <div id="botoes">
    		<a href="javascript:void(0);" id="banner_img_1" class="hover" onclick="mudaImg('0');"> 1 </a>
        	<a href="javascript:void(0);" id="banner_img_2" onclick="mudaImg('1');"> 2 </a>
    </div>
 
</div>

</section>	
		 
		 
         <nav id="menu-index">
            <br />
		<div id="casa">
	        <a href="usp.php"><img src="imagens/usp.png" width="10%" height="30%" alt="USP"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="unicamp.php"><img src="imagens/unicamp.png" width="10%" height="30%" alt="Unicamp"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="UNESP.html"><img src="imagens/unesp.png" width="10%" height="30%" alt="Unesp"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="unifesp.html"><img src="imagens/unifesp.png" width="10%" height="30%" alt="Unifesp"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="puc.html"><img src="imagens/puc.png" width="10%" height="30%" alt="PUC"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="mackenzie.html"><img src="imagens/mackenzie.png" width="10%" height="30%" alt="Mackenzie"/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
                </div>
         </nav>	       
     	 
         <?php  $ctg = $_REQUEST['ctg']; ?>
        <article>
            <br/>
            <br/>
            <br/>
            <br/>
              
            <div class="menuLateral">
                <a href="usp.php?ctg=1"><div class="menuDentro">C</div></a>
                <a href="usp.php?ctg=2"><div class="menuDentro">L</div></a>
                <a href="usp.php?ctg=3"><div class="menuDentro">M</div></a>
                <a href="usp.php?ctg=4"><div class="menuDentro">Co</div></a>
            </div>
            
	<?php
        
        include_once 'conexao/conecta.inc';
             
             $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
             if($ctg == 1){
             $cmd = "SELECT * FROM comercio ORDER BY COD_COMERCIO DESC";
             $produtos = mysql_query($cmd);
   echo '<center>';        



while($comercios = mysql_fetch_array($produtos)){
    
    echo '<table class="tabela" >';
echo '<tr>';

echo '</tr>';
    
    echo '<tr cellpadding="0" cellspacing="0">';
    echo '<td rowspan="3" class="imgTable"> <img src="imagens/' . $comercios["IMAGEM_COMERCIO"]. '"' . ' width="150px"></center></td>';
    echo '<td colspan="1" class="tituloTabela"><center>' . $comercios['NOME_COMERCIO'] . '</td>' .'</center>';
    echo '<tr><td class="labelTable">'
    . 'Descricão:'
    . '</td></tr>';
    
    echo '<tr><td colspan=1>' 
                          . $comercios['DESCRICAO_COMERCIO'] .'<br/>'
                         
                          . '</td></tr>';
    
    
    echo '</tr>';
    echo '<th class="quebralinha" colspan=5>&nbsp;</th></tr>';
    
    echo '<br/>';
    
    echo '</center>';
}
    
    
} else if($ctg == 2){
    
    
    $cmd = "SELECT * FROM lazer ORDER BY COD_LAZER DESC";
             $produtos = mysql_query($cmd);
   echo '<center>';        



while($lazer = mysql_fetch_array($produtos)){
    
    echo '<table class="tabela" >';
echo '<tr>';

echo '</tr>';
    
    echo '<tr cellpadding="0" cellspacing="0">';
    //echo '<td rowspan="3" class="imgTable"> <img src="imagens/' . $lazer["IMAGEM_LAZER"]. '"' . ' width="150px"></center></td>';
    echo '<td colspan="1" class="tituloTabela"><center>' . $lazer['NOME_LAZER'] . '</td>' .'</center>';
    echo '<tr><td class="labelTable">'
    . 'Descricão:'
    . '</td></tr>';
    
    echo '<tr><td colspan=1>' 
                          . $lazer['INFORMACAO_LAZER'] .'<br/>'
                         
                          . '</td></tr>';
    
    
    echo '</tr>';
    echo '<th class="quebralinha" colspan=5>&nbsp;</th></tr>';
    
    echo '<br/>';
    
    echo '</center>';
    

    }

} else if($ctg == 3){
    
    
    $cmd = "SELECT * FROM anuncio_de_moradia ORDER BY COD_ANUNCIANTE DESC";
             $produtos = mysql_query($cmd);
   echo '<center>';        



while($lazer = mysql_fetch_array($produtos)){
    
    echo '<table class="tabela" >';
echo '<tr>';

echo '</tr>';
    
    echo '<tr cellpadding="0" cellspacing="0">';
    //echo '<td rowspan="3" class="imgTable"> <img src="imagens/' . $lazer["IMAGEM_LAZER"]. '"' . ' width="150px"></center></td>';
    echo '<td colspan="1" class="tituloTabela"><center>' . $lazer['TITULO_POSTAGEM'] . '</td>' .'</center>';
    echo '<tr><td class="labelTable">'
    . 'Descricão:'
    . '</td></tr>';
    
    echo '<tr><td colspan=1>' 
                          . $lazer['DESCRICAO_ANUNCIO'] .'<br/>'
                         
                          . '</td></tr>';
    
    
    echo '</tr>';
    echo '<th class="quebralinha" colspan=5>&nbsp;</th></tr>';
    
    echo '<br/>';
    
    echo '</center>';
    

    }

}
?>
                
            
		</article>
		
	  	
       
    </body>
</html>
