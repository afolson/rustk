<?php

//--------------------------------------------------\\
// Created By No1 1000                -  11/18/2006 \\
// Last Edited By No1 1000            -  03/07/2007 \\
//==================================================\\
//		Guest Module								\\
//==================================================\\

if(!defined('IN_TIKO')) {
	require('../toolkit/die.php');
}

if ($_GET['cont'] == 1) {
	$info = array(	'mid'			=> '0',
					'username'		=> 'Guest',
					'tformat'		=> 'g:i A',
					'activechar'	=> '',
					'irc_user'		=> '',
					'irc_channel'	=> '#rustk',
					'saven'			=> '&#039;rustk&#039;_yyyy-MM-dd_HHmmss',
					'savel'			=> 'C:!rustk!',
					'scrncap'		=> 0,
					'prompts'		=> 1,
					'lang'			=> 'en',
					'lastactive'	=> time(),
					'modules'		=> '1-0,1-1,1-2,1-3,1-4,1-5,0-6,0-7',
					'skin'			=> 'def-lite',
					'css'			=> 'skins/def-lite/page.css',
					'custom_css'	=> 0,
					'form'			=> 0,
					'perm'			=> 0,
					'links'			=> NULL,
					'counters'		=> $CONFIG['counters'],
					'zone'			=> '0',
					'ip'			=> $_SERVER['REMOTE_ADDR'] );

	foreach($info AS $key => $value) {
		$_SESSION[$key] = $value;
	}
	
	session_write_close();
	$db->disconnect();
	
	header("Location: toolkit/index.php");
	exit;
}
else {
	$TMPL['head'] = $defhead;
	$TMPL['body'] = $defbody;
}