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

$sql = "INSERT INTO entradas(
    pm_social,
    pm_eclusa,
    abre_social,
    abre_eclusa,
    btn_social,
    btn_eclusa,
    qbv_comunica,
    qbv_abre,
    chave_mud,
    qde,
    pm_quadro,
    alarme,
    sauda
) VALUES (
    '".$_REQUEST['pm_social_entrada']."',
    '".$_REQUEST['pm_eclusa_entrada']."',
    '".$_REQUEST['abre_social_entrada']."',
    '".$_REQUEST['abre_eclusa_entrada']."',
    '".$_REQUEST['btn_social_entrada']."',
    '".$_REQUEST['btn_eclusa_entrada']."',
    '".$_REQUEST['qbv_comunica_entrada']."',
    '".$_REQUEST['qbv_abre_entrada']."',
    '".$_REQUEST['chave_mud_entrada']."',
    '".$_REQUEST['qde_entrada']."',
    '".$_REQUEST['pm_quadro_entrada']."',
    '".$_REQUEST['alarme_entrada']."',
    '".$_REQUEST['sauda_entrada']."'
)";

$insere_entradas = $mysqli->query($sql);

$sql = "INSERT INTO saidas (
    abre_social,
    abre_eclusa,
    bloqueia_social,
    bloqueia_eclusa,
    foto,
    sirene,
    luz_automatica,
    exaustor_1,
    exaustor_2,
    luz_1,
    luz_2,
    bomba,
    aux_1,
    aux_2,
    aux_3,
    aux_4,
    garagem_terreo,
    garagem_sub_1,
    garagem_sub_2,
    garagem_sub_3,
    portal_acesso_1,
    portal_acesso_2
) VALUES (
    '".$_REQUEST['abre_social_saida']."',
    '".$_REQUEST['abre_eclusa_saida']."',
    '".$_REQUEST['bloqueia_social_saida']."',
    '".$_REQUEST['bloqueia_eclusa_saida']."',
    '".$_REQUEST['foto_saida']."',
    '".$_REQUEST['sirene_saida']."',
    '".$_REQUEST['luz_automatica_saida']."',
    '".$_REQUEST['exaustor_1_saida']."',
    '".$_REQUEST['exaustor_2_saida']."',
    '".$_REQUEST['luz_1_saida']."',
    '".$_REQUEST['luz_2_saida']."',
    '".$_REQUEST['bomba_saida']."',
    '".$_REQUEST['aux_1_saida']."',
    '".$_REQUEST['aux_2_saida']."',
    '".$_REQUEST['aux_3_saida']."',
    '".$_REQUEST['aux_4_saida']."',
    '".$_REQUEST['garagem_terreo_saida']."',
    '".$_REQUEST['garagem_sub_1_saida']."',
    '".$_REQUEST['garagem_sub_2_saida']."',
    '".$_REQUEST['garagem_sub_3_saida']."',
    '".$_REQUEST['portal_acesso_1_saida']."',
    '".$_REQUEST['portal_acesso_2_saida']."'
)";

$insere_saidas = $mysqli->query($sql);

header('Location: setup.php');
?>
