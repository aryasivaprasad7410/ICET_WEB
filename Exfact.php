<html>
<head>
    <title>Factorial Program</title>
</head>
<body>
    <form method="POST">
        Enter the number:<br>
        <input type="text" name="number" id="number">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if($_POST)
    {
        $fact=1;
        $number=$_POST['number'];
        for ($i=1;$i<=$number;$i++) {
            $fact=$fact * $i;
        }
        echo "factorial of a number:".$fact;
        
    }
    ?>
    </body>
    </html>