<html>
    <body>
 <form method="POST">
Enter a Number:<input type="text"name="num"><br><br>
<input type="submit" name="submit" value="submit">
</form>

    </body>
</html>
<?php
$num = $_POST['num']; 
$n = 0; 

if ($num < 2) {
    // Numbers less than 2 are not prime
    echo "$num is not a prime number";
} else {
    // Check divisors from 2 to sqrt($num)
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $n++;
            break;
        }
    }

    if ($n == 0) {
        echo "$num is a prime number";
    } else {
        echo "$num is not a prime number";
    }
}
?>