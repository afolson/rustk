<?php
//--------------------------------------------------\\
// Created By No1 1000                -  03/16/2007 \\
// Last Edited By No1 1000            -  03/28/2007 \\
//--------------------------------------------------\\
//	Logo block -- logo + functions in Def-*			\\
//==================================================\\

if(!defined('IN_TIKO')) {
  require('die.php');
}

$pagetitle = 'Rustk - Logo Block';

$awidth = strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ? '782' : '778';

$back = $_SESSION['prompts'] == 1 ? "confirm('This will cause RuneScape to unload if it was the last thing opened. Proceed?') == true" : "true";
$dims = $_SESSION['form'] == 0 ? "'*,".$awidth."px' ? '102px,*' : '*,".$awidth."px'" : "'".$awidth."px,*' ? '*,102px' : '".$awidth."px,*'";
$side = $_SESSION['form'] == 0 ? 'right' : 'left';

$system = $db->fetch_row("SELECT count(`expiry`) as count FROM `sessions` WHERE (`expiry` - ".$CONFIG['sess_life'].") > (UNIX_TIMESTAMP() - 1800) AND `value` != ''");

// HTML
$TMPL['content'] = <<<BLK

<table id="logoframe" height="60" cellspacing="0" style="float: {$side};">
<tr><td style="padding: 0 3px; text-align: right;"><img src="skins/def-lite/imgs/red.png" id="logo" onclick="shuffle()" /><img src="skins/def-lite/imgs/gold.png" id="logow" onclick="shuffle()" />Online: <span id="uonline">${system['count']}</span></td></tr>
<tr><td style="padding: 0 3px; text-align: right;">Last GE: <span id="gedate">${ge['date']}-</span></td></tr>
<tr><td><div style="float: right; width: 48px; text-align: center;"><a href="javascript:back()" title="Go back one page"><img src="imgs/back.gif" alt="" /></a> <a href="javascript:rload()" title="Reload the current tab"><img src="skins/{$_SESSION['skin']}/imgs/rload.png" alt="" /></a> <a href="javascript:forward()" title="Go forward one page"><img src="imgs/forward.gif" alt="" /></a></div>
<a href="javascript:top.openTab('index.php?a=settings','Settings','conf');" title="Open settings">{$_SESSION['username']}</a> (<a href="../index.php?a=logout" target="_top" title="Log out">Log Out</a>)</td></tr>
</table>
BLK;


// CSS + JS funcs
$TMPL['head'] = <<<BLK
<style type="text/css">
a:link,
a:visited,
a:active {
	text-decoration: none;
	}
</style>
<script type="text/javascript">
<!--
function back() {
 if({$back}) {
  top.frames['fSide'+top.aId].window.history.back(1);
 }
}
function rload() {
 top.frames['fSide'+top.aId].document.location.reload();
}
function forward() {
 top.frames['fSide'+top.aId].window.history.forward(1);
}
function shuffle() {
 top.document.getElementById('fTop').cols = top.document.getElementById('fTop').cols == {$dims};
}
//-->
</script>
BLK;

?>
