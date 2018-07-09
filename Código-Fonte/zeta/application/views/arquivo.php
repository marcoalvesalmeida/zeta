<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Abre ou cria o arquivo sobre.txt -- O parâmetro "a" significa que o arquivo será aberto para ser escrito
$texto = fopen("arquivos/sobre.txt", "w+");

//Escreve o texto necessário no arquivo
$escreve = fwrite($texto, "Sobre|O melhor lanche da cidade.");

fclose($texto);

//Leitura do arquivo
$abre = fopen("arquivos/sobre.txt", "r");
$leitura = fread($abre, filesize("arquivos/sobre.txt"));

list($titulo, $sobre) = explode("|", $leitura);

echo '
<h1>'.$titulo.'</h1></br>
'.$sobre;
//Fecha o arquivo*/

?>