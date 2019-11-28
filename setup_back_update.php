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

$sql = "SELECT * FROM entradas ORDER BY id DESC LIMIT 1";
$entradas = $mysqli->query($sql);
$entrada = $entradas->fetch_array(MYSQLI_ASSOC);

if (empty($entrada)) {
    $sql = "INSERT INTO entradas(
        in1,
        in2,
        in3,
        in4,
        in5,
        in6,
        in7,
        in8,
        a,
        b,
        c,
        d,
        exp1,
        exp2,
        exp3,
        exp4,
        exp5,
        exp6,
        exp7,
        exp8,
        exp9,
        exp10,
        exp11,
        exp12,
        exp13,
        exp14,
        exp15,
        exp16
    ) VALUES (
        '".$_REQUEST['in1']."',
        '".$_REQUEST['in2']."',
        '".$_REQUEST['in3']."',
        '".$_REQUEST['in4']."',
        '".$_REQUEST['in5']."',
        '".$_REQUEST['in6']."',
        '".$_REQUEST['in7']."',
        '".$_REQUEST['in8']."',
        '".$_REQUEST['a']."',
        '".$_REQUEST['b']."',
        '".$_REQUEST['c']."',
        '".$_REQUEST['d']."',
        '".$_REQUEST['exp1']."',
        '".$_REQUEST['exp2']."',
        '".$_REQUEST['exp3']."',
        '".$_REQUEST['exp4']."',
        '".$_REQUEST['exp5']."',
        '".$_REQUEST['exp6']."',
        '".$_REQUEST['exp7']."',
        '".$_REQUEST['exp8']."',
        '".$_REQUEST['exp9']."',
        '".$_REQUEST['exp10']."',
        '".$_REQUEST['exp11']."',
        '".$_REQUEST['exp12']."',
        '".$_REQUEST['exp13']."',
        '".$_REQUEST['exp14']."',
        '".$_REQUEST['exp15']."',
        '".$_REQUEST['exp16']."'
    )";
    $insere_entradas = $mysqli->query($sql);
} else {
    $sql = "UPDATE entradas 
    SET in1 = '".$_REQUEST['in1']."',
    in2 = '".$_REQUEST['in2']."',
    in3 = '".$_REQUEST['in3']."',
    in4 = '".$_REQUEST['in4']."',
    in5 = '".$_REQUEST['in5']."',
    in6 = '".$_REQUEST['in6']."',
    in7 = '".$_REQUEST['in7']."',
    in8 = '".$_REQUEST['in8']."',
    a = '".$_REQUEST['a']."',
    b = '".$_REQUEST['b']."',
    c = '".$_REQUEST['c']."',
    d = '".$_REQUEST['d']."',
    exp1 = '".$_REQUEST['exp1']."',
    exp2 = '".$_REQUEST['exp2']."',
    exp3 = '".$_REQUEST['exp3']."',
    exp4 = '".$_REQUEST['exp4']."',
    exp5 = '".$_REQUEST['exp5']."',
    exp6 = '".$_REQUEST['exp6']."',
    exp7 = '".$_REQUEST['exp7']."',
    exp8 = '".$_REQUEST['exp8']."',
    exp9 = '".$_REQUEST['exp9']."',
    exp10 = '".$_REQUEST['exp10']."',
    exp11 = '".$_REQUEST['exp11']."',
    exp12 = '".$_REQUEST['exp12']."',
    exp13 = '".$_REQUEST['exp13']."',
    exp14 = '".$_REQUEST['exp14']."',
    exp15 = '".$_REQUEST['exp15']."',
    exp16 = '".$_REQUEST['exp16']."'
    WHERE
        id = 1";
    $update_entradas = $mysqli->query($sql);
}

$sql = "SELECT * FROM saidas ORDER BY id DESC LIMIT 1";
$saidas = $mysqli->query($sql);
$saida = $saidas->fetch_array(MYSQLI_ASSOC);

if (empty($saida)) {
    $sql = "INSERT INTO saidas (
        out1,
        out2,
        out3,
        out4,
        out5,
        out6,
        out7,
        out8,
        out9,
        out10,
        out11,
        out12,
        out13,
        out14,
        out15,
        out16
    ) VALUES (
        '".$_REQUEST['out1']."',
        '".$_REQUEST['out2']."',
        '".$_REQUEST['out3']."',
        '".$_REQUEST['out4']."',
        '".$_REQUEST['out5']."',
        '".$_REQUEST['out6']."',
        '".$_REQUEST['out7']."',
        '".$_REQUEST['out8']."',
        '".$_REQUEST['out9']."',
        '".$_REQUEST['out10']."',
        '".$_REQUEST['out11']."',
        '".$_REQUEST['out12']."',
        '".$_REQUEST['out13']."',
        '".$_REQUEST['out14']."',
        '".$_REQUEST['out15']."',
        '".$_REQUEST['out16']."'
    )";
    
    $insere_saidas = $mysqli->query($sql);
} else {
    $sql = "UPDATE saidas 
    SET out1 = '".$_REQUEST['out1']."',
    out2 = '".$_REQUEST['out2']."',
    out3 = '".$_REQUEST['out3']."',
    out4 = '".$_REQUEST['out4']."',
    out5 = '".$_REQUEST['out5']."',
    out6 = '".$_REQUEST['out6']."',
    out7 = '".$_REQUEST['out7']."',
    out8 = '".$_REQUEST['out8']."',
    out9 = '".$_REQUEST['out9']."',
    out10 = '".$_REQUEST['out10']."',
    out11 = '".$_REQUEST['out11']."',
    out12 = '".$_REQUEST['out12']."',
    out13 = '".$_REQUEST['out13']."',
    out14 = '".$_REQUEST['out14']."',
    out15 = '".$_REQUEST['out15']."',
    out16 = '".$_REQUEST['out16']."'
    WHERE
        id = 1";
    $update_saidas = $mysqli->query($sql);
}

header('Location: io.php');
?>
