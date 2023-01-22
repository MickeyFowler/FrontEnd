<!DOCTYPE html>
<html>
<body>
<?php
	$sfname = $_POST['studentfirstname'];
	$slname = $_POST['studentlastname'];
	$pfname = $_POST['parentfirstname'];
	$plname = $_POST['parentlastname'];
	$nextgrade = $_POST['nextgrade'];
	$text = $sfname. " " .$slname. " " .$pfname. " ".$plname." ".$nextgrade. "\n"."\n";
	$fopen = fopen("/afs/umbc.edu/users/f/m/fm66254/pub/text-files/input_text.txt", "w")or die ("Error - could not open file");
	$fwrite = fwrite($fopen, $text);
	$fread = fread($fopen,"50");
	$contents = file_get_contents("/afs/umbc.edu/users/f/m/fm66254/pub/text-files/input_text.txt");
	echo "<a href=https://swe.umbc.edu/~fm66254/is448/2500-fm66254-hw2/Info_Form1.html>Link to Page 1</a>";
	echo "\n";
	echo "\n";
	echo "\n";
	echo $contents;
	echo "\n";
	echo "\n";
	echo "Thank you!";
	fclose($fopen);
?>
</body>
</html>