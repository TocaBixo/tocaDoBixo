<!DOCTYPE html>
<html>
    <head>
        <title>Toca dos Bixos</title>
        <link rel="stylesheet" type="text/css" href="style/stylePrincipal.css" />
        <link rel="stylesheet" type="text/css" href="style/styleRotativo.css" />
        <link rel="stylesheet" type="text/css" href="style/style2.css" />
        <link rel="stylesheet" type="text/css" href="style/styleMenu.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
     
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
        <script type="text/javascript" src="js/cadastro.js"></script>
        <script type="text/javascript" src="js/banner.js"></script> 
        <script type="text/javascript" src="js/mostrar.js"></script> 
        <script type="text/javascript" src="js/login.js"></script> 
        <script type="text/javascript" src="js/valida.js"></script>
        <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>	
	<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
        
    </head>

<body>
    <header>
        
<div id="pesquisa">
                <form name="frmBusca" action="buscar.php" method="POST">
		<img id="imagem-pesquisa" src="imagens/pesquisa.png" alt="pesquisa"/>
                    <input type="text" name="txtPesquisa">
		<input type="submit" id="botaopesquisa" value="Pesquisar" >
		</form>
</div>
        
        <div id="logo">
	  <a href="index.php"><img src="imagens/logo3.PNG" alt="logo"/></a>
	</div>
        
    <nav id="menu-superior">
  <a href="index.php"> <img class="menu_img" src="imagens/casa.png" onmouseover="this.src='imagens/casaHover.png'" onmouseout="this.src='imagens/casa.png'"/></a>
  <a href="faleconosco.html"> <img class="menu_img" src="imagens/faleconosco.png" onmouseover="this.src='imagens/faleconoscoHover.png'" onmouseout="this.src='imagens/faleconosco.png'"/></a> 
  <a href="anunciarmoradia.html"> <img class="menu_img2" src="imagens/anuncio.png" onmouseover="this.src='imagens/anuncioHover.png'" onmouseout="this.src='imagens/anuncio.png'" /></a> 
  <a href="#dialog" name="login"> <img class="menu_img2" src="imagens/login.png" onmouseover="this.src='imagens/loginHover.png'" onmouseout="this.src='imagens/login.png'" /></a>
  <a href="#dialog2" name="login"></a>
  

<div id="boxes">
  <div id="dialog" class="window">
      <a href="#" class="close"> <img class="img_fechar" src="imagens/fechar.png"> </a> 
         <form method="post" action="login_toca.php"> 
             <table>
                 <center>
            <h1>Acesse sua conta</h1>
                 </center> 
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
         <a href="#" class="close2"> <img class="img_fechar" src="imagens/fechar.png"/> </a> 
        <form id="meu_form" action="novoUsuario.php" method="post">
           
            <center>
            <h1> Cadastre-se </h1>
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
             <label>Li e aceito os <a href="termosUso.html"> Termos de uso e condiÃ§Ãµes</a></label></td>
             </tr>
            </table>
             
     </form>
          </div>
          </div> 
     </nav>    
 
    </header>
    
    <section>   
        
        <div id="banner">
 	<div id="banner_img">
   	  <img class="banner_img" src="banner_img/1.jpg" alt="Banner"/>
        
        </div>
    
        <div id="botoes">
    		<a href="javascript:void(0);" id="banner_img_1" class="hover" onclick="mudaImg('0');"> 1 </a>
        	<a href="javascript:void(0);" id="banner_img_2" onclick="mudaImg('1');"> 2 </a>
        </div>
        </div>
        
    </section>
    
    <nav id="menu_principal">
        
        <ul class="dropdown">
        	<li class="espacoimg-usp"><a href="usp.php"><img id="imgusp" src="imagens/usp.png"  width="113px" height="105px" alt="USP" /></a>
        		<ul class="sub_menu">
        			 <li>
        				<a href="#">Exemplo1.1</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="#">Exemplo1.2</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo1.3</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo1.4</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        		</ul>
        	</li>
			
			<li class="espacoimg"><a href="unicamp.php"><img src="imagens/unicamp.png" width="120px" height="140px" alt="Unicamp" /></a>
        		<ul class="sub_menu">
        			 <li>
        				<a href="#">Exemplo2.1</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="#">Exemplo2.2</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo2.3</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo2.4</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			
        		</ul>
        	</li>
			
			<li class="espacoimg"><a href="UNESP.php"><img src="imagens/unesp.png"   width="180px" height="140px" alt="Unesp" ></a>
        		<ul class="sub_menu">
        			 <li>
        				<a href="#">Exemplo3.1</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="#">Exemplo3.2</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo3.3</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo3.4</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			
        		</ul>
        	</li>
			
			<li class="espacoimg"><a href="UNIFESP.php"><img src="imagens/unifesp.png"  width="140px" height="140px"  alt="Unifesp" /></a>
        		<ul class="sub_menu">
        			  <li>
        				<a href="#">Exemplo4.1</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="#">Exemplo4.2</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo4.3</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo4.4</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			
        		</ul>
        	</li>
			
			<li><a href="puc.php"><img src="imagens/puc.png"  width="160px" height="140px"  alt="PUC"/></a>
        		<ul class="sub_menu">
        			 <li>
        				<a href="#">Exemplo5.1</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="#">Exemplo5.2</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo5.3</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo5.4</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			
        		</ul>
        	</li>
			
			<li><a href="mackenzie.php"><img src="imagens/mackenzie.png"  width="165px" height="140px" alt="Mackenzie" /></a>
        		<ul class="sub_menu">
        			 <li>
        				<a href="#">Exemplo6.1</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="#">Exemplo6.2</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo6.3</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
					 <li>
        				<a href="#">Exemplo6.4</a>
        				<ul>
        					<li><a href="#">Alimentação</a></li>
        					<li><a href="#">Moradia</a></li>
							<li><a href="#">Compras</a></li>
							<li><a href="#">Bares</a></li>
							<li><a href="#">Lazer</a></li>
        				</ul>
        			 </li>
        			
        		</ul>
        	</li>
        	
    </nav>
    
    <article>
        <div class="conteudo">
            
        </div>
        <div class="conteudo">
            
        </div>
        <div class="conteudo">
            
        </div>
    </article>
    
    <footer>
        <center>Copyright</center>
        <img class="aviva" src="imagens/aviva.png" />
        <img class="redesocial" src="imagens/facebook.png" />
        <img class="redesocial" src="imagens/instagram.png" />
        <img class="redesocial" src="imagens/twitter.png" />
        
    </footer>
    
    
</body>
</html>
