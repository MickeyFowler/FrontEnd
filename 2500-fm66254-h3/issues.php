<!DOCTYPE html>
<html lang="EN">
<head>
<title> Issue Page </title>
<link rel="stylesheet" href="IssueProperties.css">
</head>
<body>
	
	<br /> <br />
	<br /> <br >
   	<h1><span class="center">Active Issue Submissions</span></h1><br> <br>
	<div class="center">
	<a href= "https://swe.umbc.edu/~fm66254/is448/2500-fm66254-hw3/IssuePage.html"> Click here to go back to the main page to report issues.</a>
	<div class = "page">
	<br/>
	</div>
	</div>

   <?php 
                $servername = "studentdb-maria.gl.umbc.edu";
                $username = "fm66254";
                $password = "fm66254";
                $dbname = "fm66254";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed" );
                }  
                $sql = "SELECT * from issue";
                $result = $conn->query($sql);                
                if ($result->num_rows > 0) {                    
                      while($row = $result->fetch_assoc()) {?>
                        <tr>
                            <td>
                            <?php echo $row["customername"]; ?> 
                            <br>
                            <?php echo $row["email"]; ?>                            
                            <br>
                            <?php echo $row["issues"]; ?>
                            </td>
                        </tr>
			<br /> <br /><br /> <br />                       
                        <?php
            }
        } else {
            
                    echo "0 results";
                }
        ?>  
</body>
</html>