<?php
include_once '../conexao/conecta.inc';
$query = "SELECT * FROM foto";
$result = mysql_query($query);

while($usuarios = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $usuarios['foto'] . '</td>';
echo '</tr>';
}