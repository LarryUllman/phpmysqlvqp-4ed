<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Upload a RTF Document</title>
</head>
<body>
<?php # Script 13.3 - upload_rtf.php

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Check for an uploaded file:
	if (isset($_FILES['upload']) && file_exists($_FILES['upload']['tmp_name'])) {
		
		// Validate the type. Should be RTF.
		// Create the resource:
		$fileinfo = finfo_open(FILEINFO_MIME_TYPE);
		
		// Check the file:
		if (finfo_file($fileinfo, $_FILES['upload']['tmp_name']) == 'text/rtf') {
			
			// Indicate it's okay!
			echo '<p><em>The file would be acceptable!</em></p>';
			
			// In theory, move the file over. In reality, delete the file:
			unlink($_FILES['upload']['tmp_name']);
			
		} else { // Invalid type.
			echo '<p style="font-weight: bold; color: #C00">Please upload an RTF document.</p>';
		}
		
		// Close the resource:
		finfo_close($fileinfo);

	} // End of isset($_FILES['upload']) IF.
	
	// Add file upload error handling, if desired.
				
} // End of the submitted conditional.
?>
	
<form enctype="multipart/form-data" action="upload_rtf.php" method="post">
	<input type="hidden" name="MAX_FILE_SIZE" value="524288" />
	<fieldset><legend>Select an RTF document of 512KB or smaller to be uploaded:</legend>
	<p><b>File:</b> <input type="file" name="upload" /></p>
	</fieldset>
	<div align="center"><input type="submit" name="submit" value="Submit" /></div>
</form>
</body>
</html>