<?php
	date_default_timezone_set("America/Sao_Paulo");

ini_set('smtp_port', '587'); // porta de email
	mysql_connect('localhost','elect740_codeign','windows8'); // mudar de acordo com o banco de dado do site
	mysql_select_db('elect740_codeigniter'); //selecionar o banco de dados do site
?>