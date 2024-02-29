<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){die();}
?>

<!DOCTYPE html>
<html xml:lang="<?= $language;?>" lang="<?= $language;?>" class="<?php $APPLICATION->ShowProperty('HtmlClass');?>">
<head>
	<?php $APPLICATION->ShowProperty('AfterHeadOpen');?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<meta name="HandheldFriendly" content="true" >
	<meta name="MobileOptimized" content="width">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="stylesheet" href="/local/templates/furniture_blue/css/custom.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
	<title><?php $APPLICATION->ShowTitle();?></title>
	<?php
	$APPLICATION->ShowHead();
	$APPLICATION->ShowProperty('MetaOG');
	$APPLICATION->ShowProperty('BeforeHeadClose');
	?>
	<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>
<body>
<?php $APPLICATION->ShowPanel();?>
<main>
