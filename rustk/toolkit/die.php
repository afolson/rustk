<?php
// Security Module
header("HTTP/1.0 404 Not Found");

$errmsg = "<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">\n".
"<html><head>\n".
"<title>404 Not Found</title>\n".
"</head><body>\n".
"<h1>Not Found</h1>\n".
"<p>The requested URL " . $_SERVER['PHP_SELF'] . " was not found on this server.</p>\n".
"</body></html>";

die($errmsg);