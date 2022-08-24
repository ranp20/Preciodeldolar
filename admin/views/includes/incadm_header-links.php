<?php 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
// CONFIGURACIÓN LOCALHOST
$url = $actual_link . "/preciodeldolar/admin/views/";
$urlCli = $actual_link . "/preciodeldolar/";
// CONFIGURACIÓN SERVIDOR
/*
$url = $actual_link . "/admin/views/";
$urlCli = $actual_link . "/";
*/
?>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no, viewport-fit=cover"/>
<meta name="keywords" content="camellogistics, Calculadora de envíos, Agente de aduanas, Transporte marítimo"/>
<meta name="description" content="¡Calcula el costo de tu importación en 4 simples pasos!"/>
<meta name="theme-color" content="#B58440"/>
<meta name="author" content="R@np-2021"/>
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<meta name="twitter.card" content="summary"/>
<meta property="og:locale" content="es_ES"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="Camel Logistics"/>
<meta property="og:url" name="twitter.url" content="https://localhost/preciodeldolar"/>
<meta property="og:title" name="twitter.title" content="Calculadora de Envíos | Camel Logistics"/>
<meta property="og:description" name="twitter.description" content="¡Calcula el costo de tu importación en 4 simples pasos!"/>
<meta property="og:image" name="twitter.image" content="./views/assets/img/logos/logo-negro.svg"/>
<link rel="icon" type="image/x-icon" href="./views/assets/img/favicon/logo-negro.png"/>
<link rel="apple-touch-icon" href="./views/assets/img/favicon/logo-negro.png"/>
<link rel="canonical" href="https://localhost/preciodeldolar"/>
<!-- PRELOADER FILES -->
<link rel="preload" href="<?= $url;?>assets/css/styles.min.css" as="style"/>
<link rel="preload" href="<?= $url;?>js/plugins/jquery/jquery-3.6.0.min.js" as="script"/>
<!-- JQUERY COMPRESSED -->
<script type="text/javascript" src="<?= $url;?>js/plugins/jquery/jquery-3.6.0.min.js"></script>
<!-- STYLESSHEET -->
<link rel="stylesheet" href="<?= $url;?>assets/css/styles.min.css"/>
<!-- GOOGLE FONTS -->
<!-- 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap&subset=latin" rel="stylesheet">
 -->