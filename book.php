<?php
$host="localhost";
$user="root";
$password="";
$database="store";

$conn=mysqli_connect($host,$user,$password,$database);
if($conn){
    echo"successfully connected";
}
else{
    die ("connection failed");
}// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $accession_no = $_POST["accession_no"];
    $title = $_POST["title"];
    $author = $_POST["author"];

    // Insert data into the table
    $sql = "INSERT INTO book (accession no,title,author) VALUES ('$accession_no','$title','$author')";
    if (mysqli_query($conn,$sql)) {
        echo "Student record added successfully!";
    } else {
        echo "record not inserted";
    }
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book information</title>
</head>
<body>
    <h2>book information</h2>
    <form method="POST" action="">
        <label for="accession_no">accession no :</label><br>
        <input type="text" id="accession_no" name="accession_no" required><br><br>

        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" required><br><br>
        <label for="author">Author</label><br>
        <input type="text" id="author" name="author" step="0.01" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>