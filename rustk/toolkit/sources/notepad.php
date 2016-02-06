<?php

//--------------------------------------------------\\
// Created By No1 1000                -  10/18/2005 \\
// Last Edited By No1 1000            -  11/12/2006 \\
//--------------------------------------------------\\
//	Notepad module [deprecated v1.1]				\\
//==================================================\\

if(!defined('IN_TIKO')) {
  require('die.php');
}
if($_SESSION['perm'] == 0) {
  $_GET['e'] = 611;
  require('blnk.php');
  return;
}

if($_GET['subm'] == 1) $db->query("UPDATE `users` SET `notes` = '".$_POST['notes']."' WHERE `mid`=".$_SESSION['mid']);

$notes = $db->fetch_row('SELECT `notes` FROM `users` WHERE `mid`='.$_SESSION['mid']);
$TMPL['notes'] = str_replace('<br />', "\n", $notes['notes']);
$TMPL['maxlimit'] = $CONFIG['ntlen'][$_SESSION['perm']];

do_template('notepad');

$pagetitle = 'Notepad';

?>