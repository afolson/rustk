<?php
if(!defined('IN_TIKO')) {
  require('die.php');
}

// Default counters
$CONFIG['counters'][] = array('name' => 'Skull Timer', 'dir' => 'down', 'min' => 20, 'sec' => 0);
$CONFIG['counters'][] = array('name' => 'Mini Game Wait', 'dir' => 'down', 'min' => 5, 'sec' => 0);
$CONFIG['counters'][] = array('name' => 'Counter', 'dir' => 'cntr', 'val' => 0);

// Default custom links
$CONFIG['links'][] = array('name' => 'Zybez RS Help', 'url' => 'http://www.zybez.net', 'tab' => true);
$CONFIG['links'][] = array('name' => 'RS Community', 'url' => 'http://www.zybez.net/community/', 'tab' => true);
$CONFIG['links'][] = array('name' => 'RuneScape.com', 'url' => 'http://www.runescape.com/title.ws', 'tab' => true);

$CONFIG['version']			= '1.3.1';
$CONFIG['copyleft']			= 'Rustk &copy; 2011, based on Tiko &copy; 2006-2009 <a href="http://www.sublimism.com">No1 1000</a><br />';
$CONFIG['updtime']			= 5; // Update = 5s
$CONFIG['ntlen']			= array( // Max Notepad length corresponding to ranks.
	0 => 0,
	1 => 15000,
	2 => 25000,
	6 => 30000,
	7 => 40000,
	8 => 50000,
	9 => 99999);

$CONFIG['sess_life']		= 60*60*24*14; // Session life = +2 weeks
$CONFIG['sess_name']		= 'RustkSess';

$CONFIG['sys_root']			= dirname(__FILE__);
define('ROOT', $CONFIG['sys_root']);
$CONFIG['skins_path']		= 'skins';
$CONFIG['skins_url']		= ROOT.'/skins';
$CONFIG['default_skin']		= 'def-lite';

$CONFIG['sql_host']			= 'localhost';
$CONFIG['sql_user']			= 'rustk';
$CONFIG['sql_pass']			= 'vvtd74F9cxNz6tz6';
$CONFIG['sql_database']		= 'rustk';
$CONFIG['sql_main']         = 'rustk'; // Internal Zybez database; no longer relevant.

$TMPL['skins_path']			= $CONFIG['skins_path'];

$RANK = array(
	0 => 'Guest',
	1 => 'User',
	2 => 'User+',
	6 => 'Jr. Staff',
	7 => 'Staff',
	8 => 'Admin',
	9 => 'Sr. Admin');

$TMPL['analytics'] = <<<EOT

EOT;
