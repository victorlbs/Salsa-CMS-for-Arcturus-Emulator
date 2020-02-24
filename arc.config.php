<?php
// Configurações do banco de dados
$config['database_hostname'] = "localhost"; // Hostname
$config['database_username'] = "user"; // Nome de usuário do banco de dados
$config['database_password'] = "pass"; // Senha do usuário do banco de dados
$config['database_name'] = "db"; // Nome do banco de dados
// Configurações do site


$config['site.nome'] = "Habbo"; // Nome do Hotel
$config['site.url'] = "http://localhost"; // URL do Hotel
$config['404page'] = "404"; // Nome da página de erro
$config['site.manutencao'] = 0; // Colocar ou remover manutenção do hotel
$config['site.login'] = 1; // Desativar ou ativar o login no Hotel
$config['site.avatar'] = "https://habbo.city/habbo-imaging/avatarimage?figure="; // URL do avatarimage da CMS
$config['site.red'] = "1";
$config['site.rank.minimo'] = 3; // Rank mínimo que poderá entrar com o Hotel em manutenção
$config['site.cmfclient'] = 0; // Função para camuflar IP e Porta na client


// Configurações do Painel de Controle
$config['painel.rankminimo'] = 5; // Rank minímo para poder acessar o Painel
$config['painel.premiar_creditos'] = 200; // Quantidade de créditos que o premiar do painel dará
$config['painel.premiar_diamantes'] = 10; // Quantidade de diamantes que o premiar do painel dará
$config['painel.premiar_codigo_emblema'] = "NV"; // Código do emblema de níveis que o premiar dará


// Configurações do Registro
$config['registro.ativado'] = 1; // Desativar ou ativar o registro do Hotel
$config['registro.captcharegistro'] = 1; // Captcha ativada/desativada para  impedir BOTS
$config['registro.missao'] = "Dominar o mundo"; // Missão inicial
$config['registro.creditos'] = "100"; // Créditos iniciais
$config['registro.visual'] = "hr-115-45.hd-209-2.ch-255-76.lg-275-62.fa-1204.ca-1806-65"; // Visual inicial
$config['registro.quartoinicial'] = "1"; // Quarto inicial
$config['registro.contasporip'] = 50; // Quantidade de contas por IP


// Configurações da Client
$config['connection.info.host'] = "localhost"; // IP da VPS ou Hamachi
$config['connection.info.port'] = "30000"; // Porta do emulador
$config['url.prefix'] = "http://localhost";
$config['client.starting'] = "Bem vindo!";
$config['external.texts.txt'] = "http://localhost/swf/gamedata/external_flash_texts.txt";
$config['furnidata.load.url'] = "http://localhost/swf/gamedata/furnidata.xml";
$config['external.variables.txt'] = "http://localhost/swf/gamedata/external_variables.txt";
$config['external.override.texts.txt'] = "http://localhost/swf/gamedata/override/external_flash_override_texts.txt";
$config['external.figurepartlist.txt'] = "http://localhost/swf/gamedata/figuredata.xml";
$config['productdata.load.url'] = "http://localhost/swf/gamedata/productdata.txt";
$config['external.override.variables.txt'] = "http://localhost/swf/gamedata/override/external_override_variables.txt";
$config['flash.client.url'] = "http://localhost//swf/gordon/PRODUCTION-201601012205-226667486/";
$config['habbo.swf'] = "http://localhost/swf/gordon/PRODUCTION-201601012205-226667486/Habbo.swf";


// Configurações do tema atual
$config['tema.tema'] = "habbo";
$config['tema.logo'] = "http://habbox.com/text/70/Habbo";
$config['tema.topheader'] = "https://i.imgur.com/tgTqRgb.gif";
$config['tema.urlemblemas'] = "http://images.habbo.com/c_images/album1584/"; // Pasta de emblemas do perfil
$config['tema.postagens'] = 1; // Desativar ou ativar as postagens na página principal
$config['tema.facebook'] = "http://facebook.com/Habbo";
$config['tema.twitter'] = "http://twitter.com/Habbo";
$config['tema.discord'] = "http://discord.gg/Habbo";
