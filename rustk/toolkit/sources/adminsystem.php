<?php

//--------------------------------------------------\\
//	System module -- Turn Rustk offline				\\
//==================================================\\

if(!defined('IN_TIKO') || $_SESSION['perm'] < 9) { // Root-only
  require('die.php');
}

if(isset($_POST['status'])) { // Update online status
	$status = intval($_POST['status']);
	$message = $status == 0 ? '' : $_POST['message'];
	$db->query("UPDATE system SET status=".$status.", message='".$message."'");
}
else { // No action
	$row = $db->fetch_row("SELECT status, message FROM system");
	$message = $row['message'];
	$status = $row['status'];
}

$st0 = $status == 0 ? ' selected="selected"' : '';
$st1 = $status == 1 ? ' selected="selected"' : '';
$st2 = $status == 2 ? ' selected="selected"' : '';

$TMPL['content'] =  <<<EOT
<form action="index.php?a=adminsystem" method="post">
Rustk Status <select name="status"><option value="0"{$st0}>Online</option><option value="1"{$st1}>Offline</option><option value="2"{$st2}>Global Offline</option></select>
Off Message:<input type="text" name="message" value="{$message}" />
<input type="submit" value="Change" />
</form>
EOT;
	
$TMPL['head'] = <<<BLK
<style type="text/css">
body {
	margin: 5px;
	line-height: 1.93em;
	}
</style>
$report
BLK;

$pagetitle = 'Online Status';

?>