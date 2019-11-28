<?php

$arquivo = [];

$path = "log/";
$diretorio = dir($path);
while($arquivo = $diretorio -> read()){
    if ($arquivo == '.' || $arquivo == '..') {
        continue;
    }
    $arquivos[] = $arquivo;
}
$diretorio -> close();

$qtde_arquivos = count($arquivos);
if ($qtde_arquivos == 30) {
    unlink('log/'.$arquivos[1]);
}
$log_antigo = file_get_contents('log/log.txt');
$salva_log_antigo = file_put_contents('log/log_'.date('dmYHis').'.txt', print_r($log_antigo, true));
$limpa_log = file_put_contents('log/log.txt', '');

?>