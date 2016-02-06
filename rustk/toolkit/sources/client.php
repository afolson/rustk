<?php
//--------------------------------------------------\\
// Created By No1 1000                -  09/06/2005 \\
// Last Edited By No1 1000            -  04/03/2007 \\
//--------------------------------------------------\\
//	Main module -- called on first load	of Rustk		\\
//		[contains frames + JS controls]				\\
//==================================================\\

if(!defined('IN_TIKO')) {
  require('die.php');
}

$array = array(
			'en' => 'http://www.runescape.com/',
			'de' => 'http://www.runescape.com/l=1/',
			'fr' => 'http://www.runescape.com/l=2/',
			'br' => 'http://www.runescape.com/l=3/',
			'ho' => 'http://www.rustk.com/welcome.php' );

$ie = strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ? 1 : 0;

$TMPL['fborder'] = ($ie == 1 || strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE) ? 'border="0"' : 'border="1"';
$TMPL['awidth'] = '783'; //($ie == 1 || strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE) ? '782' : '778';
//$TMPL['load'] = isset($_SESSION['lang']) ? $array[$_SESSION['lang']] : $array['en'];
$TMPL['load'] = $array['ho'];
$TMPL['isie'] = $ie;

?>
