<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Testing PCRE</title>
</head>
<body>
<?php // Script 14.2 - matches.php
// This script takes a submitted string and checks it against a submitted pattern.
// This version prints every match made.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Trim the strings:
	$pattern = trim($_POST['pattern']);
	$subject = trim($_POST['subject']);
			
	// Print a caption:
	echo "<p>The result of checking<br /><b>$pattern</b><br />against<br />$subject<br />is ";
	
	// Test:
	if (preg_match_all ($pattern, $subject, $matches) ) {
		echo 'TRUE!</p>';
		
		// Print the matches:
		echo '<pre>' . print_r($matches, 1) . '</pre>';
		
	} else {
		echo 'FALSE!</p>';
	}
	
} // End of submission IF.
// Display the HTML form.
?>
<form action="matches.php" method="post">
	<p>Regular Expression Pattern: <input type="text" name="pattern" value="<?php if (isset($pattern)) echo htmlentities($pattern); ?>" size="40" /> (include the delimiters)</p>
	<p>Test Subject: <textarea name="subject" rows="5" cols="40"><?php if (isset($subject)) echo htmlentities($subject); ?></textarea></p>
	<input type="submit" name="submit" value="Test!" />
</form>
</body>
</html>