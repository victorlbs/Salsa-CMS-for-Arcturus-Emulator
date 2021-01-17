<?php

$q = $_REQUEST["q"];
$hint = ""; 
$vlsalsa = 1;


if ($q !== "") {
	 $q = strtolower($q);
    $len=strlen($q);

   $hint = "<a href='/perfil?=".$q."'> Ver perfil de ".$q." ";
}
echo $hint === "" ? "" : $hint;

?>