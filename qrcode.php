<?php
$imageName = $_GET['name'].'.png';
header('Content-Disposition: inline; filename="'.$imageName.'"');
require_once __DIR__ . '/qrtools/qrlib.php';
$confName = $_GET['name'].'.conf';
$confBody = file_get_contents('configs/'.$confName);
QRcode::png($confBody, false, 'M', 6, 2);