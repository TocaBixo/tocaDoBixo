<hml>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css" />
        <meta charset="UTF-8">
        <script type="text/javascript" src="js/menu.js"></script>
    </head>   
    
    <body>
    <header>   
            <div id="logo"> 
                
                <center><img src="imagens/logo.png"/></center>
                
            </div>
            
           
           <div id="menu">
                
                
                <div id="menuTopo">
                  <div id="pesquisar">
                    <label>Pesquisar</label>
                    <input type="text" size="50">
                  </div>
                   <img src="imagens/home.png" class="linkImg" width="120px" onmouseover="this.src='imagens/homeHover.png'"  onmouseout="this.src='imagens/home.png'" />
                   <a href="cadastrocomercios.php"><img src="imagens/comerciosHoje+.png" class="linkImg" width="140px" onmouseover="this.src='imagens/comerciosHojeHover+.png'"  onmouseout="this.src='imagens/comerciosHoje+.png'"/></a>
                   <a href="pedidosOracao.php"><img src="imagens/pedidosOracao.png" class="linkImg" width="200px" onmouseover="this.src='imagens/pedidosOracaoHover.png'"  onmouseout="this.src='imagens/pedidosOracao.png'" /></a>
                   <img src="imagens/testemunhos.png" class="linkImg2" width="150px" onmouseover="this.src='imagens/testemunhosHover.png'"  onmouseout="this.src='imagens/testemunhos.png'"/>
                   <img src="imagens/sair.png" class="linkImg" width="80px" onmouseover="this.src='imagens/sairHover.png'"  onmouseout="this.src='imagens/sair.png'" />
               
              
                </div>
                </div>
                
        
        </header>
        
        
        <div id="simulaMenu"> </div> 
        
        <div id="conteudo">
<center>        
<?php
session_start();

include_once 'conexao/conecta.inc';

$sql = "SELECT * FROM comercios_hoje ORDER BY DATA_comercios asc";

$result = mysql_query($sql);
echo '<table class="tabela" >';
echo '<tr>';
echo '<th class="titulocomercios" colspan=5>comercioss Hoje</th>';
echo '</tr>';


while($comercios = mysql_fetch_array($result)){
    echo '<tr cellpadding="0" cellspacing="0">';
    echo '<td rowspan="3" class="imgTable"><center><img src="imagens/imagens-evagelicas-dinamicas-evangelicas-418f45.jpg" width="200px"/></center></td>';
    echo '<td colspan="3"><center>' . $comercios['IGREJA_comercios'] . '</td>' . '<td><b>Descrição do comercios:</td></b></center>';
    echo '<tr><td class="labelTable">'
    . 'Categoria:<br/>'
    . 'Cidade:<br/>'
    . 'Endereço:<br/>'
    . 'Data<br/>'
    . 'Hora<br/>'
    . '</td>';
    
    echo '<td colspan=2>' 
                          . $comercios['CATEGORIA_comercios'] .'<br/>'
                          . $comercios['CIDADE_comercios'] . '<br/>'
                          . $comercios['LOGRADOURO_comercios'] . '<br/>'
                          . $comercios['DATA_comercios']  .'<br/>'
                          . $comercios['HORA_comercios']  .'<br/>'
                          . '</td>';
    
    echo '<td><label>' . $comercios['DESCRICAO_comercios'] . '</label></td></tr>';
    echo '<tr><td colspan=4 class="labelTable">' . $comercios['CONTATO_comercios'] . '</td></tr>';
    
    
    
    echo '</tr>';
    echo '<th class="quebralinha" colspan=5>&nbsp;</th></tr>';
    
    echo '<br/>';
}


?>
</center>       

         
</table>

            
            
        </div>


    </body>
    
    </html>