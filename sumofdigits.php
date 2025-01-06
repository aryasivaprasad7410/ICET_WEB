<html>
<head>
<title>Sum of digits</title>
</head>
<body>
<form action="sumofdigits.php" method="POST">
<label for="number">Enter any number </label><br>
<input type="number" name="number"><br>
<input type="submit">
</form>
</body>
</html>
<?php
$number=$_POST["number"];
$sum=0;$r=0;
for($i=0;$i<=strlen($number);$i++){
$r=$number%10;
$sum+=$r;
$number=$number/10;
}
echo"Sum of digits is $sum";
?>
