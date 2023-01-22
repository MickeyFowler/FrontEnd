<!DOCTYPE html>
<html>
<body>
<?php
	$sname = $_POST['studentname'];
	$sID = $_POST['studentid'];
	if(preg_match("/[A-Za-z][A-Za-z]\d{8}$/", $sID)) {
		print "ID was in correct format";
	} else {
		echo "ID was incorrect.";
		echo "\n";
		echo "\n";
		echo "Go back and re-enter name and ID.";
	}
?>
</body>
</html>