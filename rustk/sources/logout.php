<?php

if(!defined('IN_TIKO')) {
	require('../toolkit/die.php');
}

// Destroy Session
$_SESSION = array();
setcookie($CONFIG['sess_name'], '', time()-42000, '/');
session_destroy();

// Redirect to login page.
header('Location: index.php?done=logged');
exit;
