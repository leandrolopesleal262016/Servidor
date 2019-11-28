<?php

$server = 'localhost';
$host = 'leandro';
$senha = '5510';
$bd = 'CMM';
$mysqli = new mysqli($server, $host, $senha, $bd);

if(mysqli_connect_errno()){
	echo "Falha na conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;
	exit();
}

$sql = "SELECT * FROM leitores_qrcode ORDER BY id DESC LIMIT 1";
$qrcode = $mysqli->query($sql);
$entrada = $qrcode->fetch_array(MYSQLI_ASSOC);

if (empty($entrada)) {
    $sql = "INSERT INTO leitores_qrcode(
        leitor_1,
        leitor_2,
        leitor_3,
        leitor_4,
        leitor_5,
        leitor_6,
        leitor_7,
        leitor_8,
        leitor_9,
        leitor_10,
        leitor_11,
        leitor_12,
        leitor_13,
        leitor_14,
        leitor_15,
        leitor_16,
        portao_1,
        portao_2,
        portao_3,
        portao_4,
        portao_5,
        portao_6,
        portao_7,
        portao_8,
        portao_9,
        portao_10,
        portao_11,
        portao_12,
        portao_13,
        portao_14,
        portao_15,
        portao_16,
        mensagem_1,
        mensagem_2,
        mensagem_3,
        mensagem_4,
        mensagem_5,
        mensagem_6,
        mensagem_7,
        mensagem_8,
        mensagem_9,
        mensagem_10,
        mensagem_11,
        mensagem_12,
        mensagem_13,
        mensagem_14,
        mensagem_15,
        mensagem_16
    ) VALUES (
        '".$_REQUEST['leitor_1']."',
        '".$_REQUEST['leitor_2']."',
        '".$_REQUEST['leitor_3']."',
        '".$_REQUEST['leitor_4']."',
        '".$_REQUEST['leitor_5']."',
        '".$_REQUEST['leitor_6']."',
        '".$_REQUEST['leitor_7']."',
        '".$_REQUEST['leitor_8']."',
        '".$_REQUEST['leitor_9']."',
        '".$_REQUEST['leitor_10']."',
        '".$_REQUEST['leitor_11']."',
        '".$_REQUEST['leitor_12']."',
        '".$_REQUEST['leitor_13']."',
        '".$_REQUEST['leitor_14']."',
        '".$_REQUEST['leitor_15']."',
        '".$_REQUEST['leitor_16']."',
        '".$_REQUEST['portao_1']."',
        '".$_REQUEST['portao_2']."',
        '".$_REQUEST['portao_3']."',
        '".$_REQUEST['portao_4']."',
        '".$_REQUEST['portao_5']."',
        '".$_REQUEST['portao_6']."',
        '".$_REQUEST['portao_7']."',
        '".$_REQUEST['portao_8']."',
        '".$_REQUEST['portao_9']."',
        '".$_REQUEST['portao_10']."',
        '".$_REQUEST['portao_11']."',
        '".$_REQUEST['portao_12']."',
        '".$_REQUEST['portao_13']."',
        '".$_REQUEST['portao_14']."',
        '".$_REQUEST['portao_15']."',
        '".$_REQUEST['portao_16']."',
        '".$_REQUEST['mensagem_1']."',
        '".$_REQUEST['mensagem_2']."',
        '".$_REQUEST['mensagem_3']."',
        '".$_REQUEST['mensagem_4']."',
        '".$_REQUEST['mensagem_5']."',
        '".$_REQUEST['mensagem_6']."',
        '".$_REQUEST['mensagem_7']."',
        '".$_REQUEST['mensagem_8']."',
        '".$_REQUEST['mensagem_9']."',
        '".$_REQUEST['mensagem_10']."',
        '".$_REQUEST['mensagem_11']."',
        '".$_REQUEST['mensagem_12']."',
        '".$_REQUEST['mensagem_13']."',
        '".$_REQUEST['mensagem_14']."',
        '".$_REQUEST['mensagem_15']."',
        '".$_REQUEST['mensagem_16']."'
    )";
    $insere_qrcode = $mysqli->query($sql);
} else {
    $sql = "UPDATE leitores_qrcode 
    SET leitor_1 = '".$_REQUEST['leitor_1']."',
        leitor_2 = '".$_REQUEST['leitor_2']."',
        leitor_3 = '".$_REQUEST['leitor_3']."',
        leitor_4 = '".$_REQUEST['leitor_4']."',
        leitor_5 = '".$_REQUEST['leitor_5']."',
        leitor_6 = '".$_REQUEST['leitor_6']."',
        leitor_7 = '".$_REQUEST['leitor_7']."',
        leitor_8 = '".$_REQUEST['leitor_8']."',
        leitor_9 = '".$_REQUEST['leitor_9']."',
        leitor_10 = '".$_REQUEST['leitor_10']."',
        leitor_11 = '".$_REQUEST['leitor_11']."',
        leitor_12 = '".$_REQUEST['leitor_12']."',
        leitor_13 = '".$_REQUEST['leitor_13']."',
        leitor_14 = '".$_REQUEST['leitor_14']."',
        leitor_15 = '".$_REQUEST['leitor_15']."',
        leitor_16 = '".$_REQUEST['leitor_16']."',
        portao_1 = '".$_REQUEST['portao_1']."',
        portao_2 = '".$_REQUEST['portao_2']."',
        portao_3 = '".$_REQUEST['portao_3']."',
        portao_4 = '".$_REQUEST['portao_4']."',
        portao_5 = '".$_REQUEST['portao_5']."',
        portao_6 = '".$_REQUEST['portao_6']."',
        portao_7 = '".$_REQUEST['portao_7']."',
        portao_8 = '".$_REQUEST['portao_8']."',
        portao_9 = '".$_REQUEST['portao_9']."',
        portao_10 = '".$_REQUEST['portao_10']."',
        portao_11 = '".$_REQUEST['portao_11']."',
        portao_12 = '".$_REQUEST['portao_12']."',
        portao_13 = '".$_REQUEST['portao_13']."',
        portao_14 = '".$_REQUEST['portao_14']."',
        portao_15 = '".$_REQUEST['portao_15']."',
        portao_16 = '".$_REQUEST['portao_16']."',
        mensagem_1 = '".$_REQUEST['mensagem_1']."',
        mensagem_2 = '".$_REQUEST['mensagem_2']."',
        mensagem_3 = '".$_REQUEST['mensagem_3']."',
        mensagem_4 = '".$_REQUEST['mensagem_4']."',
        mensagem_5 = '".$_REQUEST['mensagem_5']."',
        mensagem_6 = '".$_REQUEST['mensagem_6']."',
        mensagem_7 = '".$_REQUEST['mensagem_7']."',
        mensagem_8 = '".$_REQUEST['mensagem_8']."',
        mensagem_9 = '".$_REQUEST['mensagem_9']."',
        mensagem_10 = '".$_REQUEST['mensagem_10']."',
        mensagem_11 = '".$_REQUEST['mensagem_11']."',
        mensagem_12 = '".$_REQUEST['mensagem_12']."',
        mensagem_13 = '".$_REQUEST['mensagem_13']."',
        mensagem_14 = '".$_REQUEST['mensagem_14']."',
        mensagem_15 = '".$_REQUEST['mensagem_15']."',
        mensagem_16 = '".$_REQUEST['mensagem_16']."'
    WHERE
        id = 1";
    $update_qrcode = $mysqli->query($sql);
}


header('Location: qrcode.php');
?>
