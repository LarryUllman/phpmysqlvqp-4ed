<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Concatenation</title>
</head>
<body>
<?php # Script 1.7 - concat.php

// Create the variables:
$first_name = 'Melissa';
$last_name = 'Bank';
$author = $first_name . ' ' . $last_name;

$book = 'The Girls\' Guide to Hunting and Fishing';

//Print the values:
echo "<p>The book <em>$book</em> was written by $author.</p>";

?>
</body>
</html>