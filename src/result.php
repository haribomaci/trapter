<?php
/*
* File: result.php
* Author: Tóth Júlia
* Copyright: 2022, Tóth Júlia
* Group: Szoft 1/n
* Date: 2022-05-12
* Github: https://github.com/haribomaci/
* Licenc: GNU GPL
*/

$aside = $_GET['aSide'];
$bside = $_GET['bSide'];
$cside = $_GET['cSide'];
$dside = $_GET['dSide'];

$terulet = (($aside + $cside) / (4 * ($aside - $cside))) * sqrt(
    ($aside + $bside - $cside + $dside) *
    ($aside - $bside - $cside + $dside) * 
    ($aside + $bside - $cside - $dside) * 
    (-$aside + $bside + $cside + $dside));

echo file_get_contents('templates/head.html');
echo file_get_contents('templates/nav.html');
$page = file_get_contents('templates/result.html');
$page = str_replace('{{Terület}}', $terulet, $page);
echo $page;
echo file_get_contents('templates/foot.html');