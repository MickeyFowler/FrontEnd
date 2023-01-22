<!DOCTYPE html>
<html lang="EN"><head>
	<title>Submit PHP</title>
</head>
<body>
<?php
                $servername = "studentdb-maria.gl.umbc.edu";
                $username = "fm66254";
                $password = "fm66254";
                $dbname = "fm66254";
                $db = new mysqli($servername, $username, $password, $dbname);
	
	if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
	}
	$customername = $_POST['customer'];
	$email = $_POST['email'];
	$issue_1 = $_POST['issue'];

	if (empty($customername)) {
    		echo '$customername is either 0, empty, or not set at all';
	}
	
	$sql = "insert into issue(customername, email, issues) values('$customername', '$email', '$issue_1')";
	
	if ($db->query($sql) === TRUE) {
    		echo "record inserted successfully";
	} else {
    		echo "Error: " . $sql . "<br>" . $db->error;
}

?>	
</body>
</html>