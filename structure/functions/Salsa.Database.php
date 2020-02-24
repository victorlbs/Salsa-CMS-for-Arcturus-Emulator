<?php
error_reporting(E_ALL); 
ini_set('display_errors', 'On'); 
/***
 *                _
 *               | |
 *      ___  __ _| |___  __ _
 *     / __|/ _` | / __|/ _` |
 *     \__ \ (_| | \__ \ (_| |
 *     |___/\__,_|_|___/\__,_|
 *     GitHub: https://github.com/victorlbs/Salsa-CMS-for-Arcturus-Emulator/
 *
*/
if (strrpos($_SERVER["REQUEST_URI"], ".php") || strrpos($_SERVER["REQUEST_URI"], ".php") !== false) {
        header("Location: /");
        exit;
}
$conn = mysqli_connect($config['database_hostname'], $config['database_username'], $config['database_password'], $config['database_name']);
if (!$conn) {
?>

<html>
<head>
	<title>Erro - Não foi possível conectar-se ao banco de dados</title>
</head>
<body>
	<style type="text/css">
		body{font-family: Arial, Helvetica, sans-serif; font-size: 13px; } .info, .success, .warning, .error, .validation {border: 1px solid; margin: 10px 0px; padding: 15px 10px 15px 50px; background-repeat: no-repeat; background-position: 10px center; } .error{color: #D8000C; background-color: #FFBABA; background-image: url('https://i.imgur.com/GnyDvKN.png'); } </style>
	<div class="error">Erro - Não foi possível conectar-se ao banco de dados. Isso ocorreu por um desses motivos: <br>
	• O nome de usuário na configuração está incorreto; <br>
	• A senha do  usuário banco de dados está incorreta; <br>
	• O nome do banco de dados está incorreto; <br>
	• A conexão foi recusada.

	<br>

	Verifique o arquivo de configuração e tente novamente.


</div>
   <?php
    exit;
}
?>
<body>
</html>
 