<html>
<head>
	<title>Hello goorm</title>
</head>
<body>
	<h1>Hello goorm</h1>

    <?php
		$conn = mysqli_connect("localhost", "root", "123456", "testdb");
		
		$sql = "SELECT * FROM testtable";
		$result = mysqli_query($conn, $sql);
	
		while($row = mysqli_fetch_array($result)) {
		  echo "<li>{$row['id']} - {$row['title']}</li>";
		}
		
	?>
  
</body>
</html>