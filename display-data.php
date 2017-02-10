<html>
<head>
<title>Display Data into DB</title>
<style type="text/css">
table {
	border: 2px solid red;
	background-color: #FFC;
	}
th {
	border-bottom: 5px solid #000;
	}

td {
	border-bottom: 2px solid #777;
	}
</style>
</head>
<body>

<h1>Display Data from DB</h1> 

<?php

include('connect-mysql.php');

$sqlget = "SELECT * FROM testfrm";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error gettiing');

echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['first_name'];
	echo "</td><td>";
	echo $row['last_name'];
	echo "</td></tr>";
	}

echo "</table>";

?>

</body>
</html>
