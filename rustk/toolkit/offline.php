<?
if(!defined('IN_TIKO')) {
  require('die.php');
}

$message = !empty($SYST['message']) ? NL.'<br />OFFLINE MESSAGE: '.$SYST['message'].'<br />' : '';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Rustk Offline</title>
<?=$TMPL['analytics']?>
<style type="text/css">
body {
	background: #000;
	font: 12px/1 verdana, tahoma, helvetica, arial, sans serif;
	color: #bbb;
	margin: 0;
	padding: 0;
	}
.box {
	width: 400px;
	border: 1px solid #666;
	background: #363636;
	text-align: center;
	padding: 10px;
	margin: 30px auto 0px auto;
	}
input, select {
	font-size: 11px;
	margin: 10px 10px 0px 10px;
	}
</style>
</head>
<body>
<div class="box">
Sorry, the toolkit is currently offline. Please try again later.<br /><?=$message?>
<input type="button" value="Retry" onclick="window.location.href='<?=$_SERVER['REQUEST_URI']?>';" />
<input type="button" value="Logout" onclick="top.location.href='../index.php?a=logout';" />
</div>
</body>
</html>

<?
exit;
?>