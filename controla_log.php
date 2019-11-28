<?php

if ($_REQUEST['arquivo'] == '') {
    $conteudo_log = file_get_contents('log/log.txt');
    $tipo = 'arquivo';
} elseif (!strstr($_REQUEST['arquivo'], '.')) { 
    $conteudo_log = '<option selected value="">--- nenhuma ---</option>';
    $path = 'log/'.$_REQUEST['arquivo']."/";
    $diretorio = dir($path);
    while($arquivo = $diretorio -> read()){
      if ($arquivo == '.' || $arquivo == '..') {
        continue;
      }
      $conteudo_log .= "<option value=".$arquivo.">".$arquivo."</option>";
    }
    $diretorio -> close();
    $tipo = 'pasta';
}else {
    $conteudo_log = file_get_contents('log/'.$_REQUEST['arquivo']);
    if (!$conteudo_log) {
        $conteudo_log = file_get_contents('log/'.$_REQUEST['pasta'].'/'.$_REQUEST['arquivo']);
    }
    $tipo = 'arquivo';
}

$retorno = [
    'retorno' => 'ok',
    'conteudo' => $conteudo_log,
    'tipo' => $tipo
];

echo json_encode($retorno);
?>