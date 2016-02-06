<?php

//--------------------------------------------------\\
// Created By No1 1000                -  07/11/2006 \\
// Last Edited By No1 1000            -  07/11/2006 \\
//--------------------------------------------------\\
//	Blank page + lesser error module				\\
//==================================================\\

if(!defined('IN_TIKO')) {
  require('die.php');
}

$pagetitle = '';

$error = empty($_GET['e']) ? 0 : $_GET['e'];

switch($error) {
	case 404 : $text = '<p>Not Found. The requested URL '.$_SERVER['PHP_SELF'].' was not found on this server.</p>'; break;
	case 611 : $text = '<p style="padding: 0 5px; font-weight: bold;">This area is not available to guests--please register in order to access it.</p>'; break;
	default: $text = '';
}

$TMPL['content'] = $text;
$pagetitle = 'Rustk - Error';

?>