<?php
// TODO: This was made obsolete.


//--------------------------------------------------\\
// Created By No1 1000                -  09/16/2006 \\
// Last Edited By No1 1000            -  03/26/2007 \\
//--------------------------------------------------\\
//	IRC module -- login, lock + load				\\
//==================================================\\

if(!defined('IN_TIKO')) {
  require('die.php');
}

switch($_GET['go']) {
	case 'start': // Load applet
		$TMPL['content'] = '<div style="width: 100%; height: 100%;"></div>';
		$TMPL['head'] = '<style type="text/css">html,body { height: 100%; }</style>';
		do_template('irc');
		break;
	default: // Print login form + warnings
		do_template('irc_loginp');
}
?>
