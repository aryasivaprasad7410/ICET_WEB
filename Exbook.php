<!DOCTYPE html>
<html>
    <head>
        <title>Book Management System</title>
    </head>
<body>
    <form action="book.php" method="POST">
        <label>accno</label>
        <input type="number" name="accno" id="accno">
        <label>title</label>
        <input type="text" name="title" id="title">
        <label>author</label>
        <input type="text" name="author" id="author">
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>

<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "book_db";
$connection = mysqli_connect($host, $user, $password, $database);

if ($connection) {
    echo "connected successfully<br>";
} else {
    die("can't connect: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accno = $_POST['accno'];
    $title = $_POST['title'];
    $author = $_POST['author'];

    $sql = "INSERT INTO book (accno, title, author) VALUES ('$accno', '$title', '$author')";

    if (mysqli_query($connection, $sql)) {
        echo "record inserted";
    } else {
        echo "not inserted: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>