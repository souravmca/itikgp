<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
</head>
<body>
<form action="insert.php" method="post">
	<p>
    	<label for="roll">Roll Number:</label>
        <input type="text" name="roll" id="roll">
    </p>
    <p>
    	<label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
    	<label for="sub1">Sub1:</label>
        <input type="text" name="sub1" id="sub1">
    </p>
    <p>
    	<label for="sub2">Sub2:</label>
        <input type="text" name="sub2" id="sub2">
    </p>
    
	<input type="submit" value="Add Records">
</form>
</body>
</html>