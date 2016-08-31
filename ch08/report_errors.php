<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Reporting Errors</title>
</head>
<body>
<h2>Testing Error Reporting</h2>
<?php # Script 8.2 - report_errors.php

// Show errors:
ini_set('display_errors', 1);

// Adjust error reporting:
error_reporting(E_ALL | E_STRICT);

// Create errors:
foreach ($var as $v) {}
$result = 1/0;

?>
</body>
</html>