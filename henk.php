<?php
if(!isset($_GET['key'])) {
    die('Geen toegang');
}
$key = $_GET['key'];
$ww = "appelsap";
if($key != $ww) {
    die('Geen toegang');
}