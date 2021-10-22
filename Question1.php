<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form method='post' action="Question1.php">
    <h2>Enter your first name and last name:</h2>
    <input type="text" name="name">
    <input type="submit" value="Submit Name">
</form>
<?php
$name = $_POST['name'];
echo "<h3> Hello $name in course IT405</h3>";
?>
</body>
</html>




