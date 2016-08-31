<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Displaying Errors</title>
</head>
<body>
<h2>Testing Display Errors</h2>
<?php # Script 8.1 - display_errors.php

// Show errors:
ini_set('display_errors', 1);

// Create errors:
foreach ($var as $v) {}
$result = 1/0;

?>
</body>
</html>