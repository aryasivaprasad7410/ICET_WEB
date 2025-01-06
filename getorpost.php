<html>
<head>
<title>INDRO TO GET OR POST</title>
</head>
<body>
<form action="getorpost.php" method="POST">
<label for="name">Enter your name</label><br>
<input type="text" name="name" id="name"><br>
<input type="submit">
</form>

<?php
$name=$_POST["name"];
echo "Your name is $name";
?>
</body>
</html>
