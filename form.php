<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <!-- HTML Form for user input -->
    <form action="form.php" method="POST">
        NAME: <input type="text" name="name" required><br><br>
        PHONE: <input type="text" name="phone" required><br><br>
        EMAIL: <input type="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Only execute the PHP code if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Database connection settings
        $host = "localhost"; // Database host
        $user = "root"; // Database username
        $pass = ""; // Database password
        $database = "class"; // Database name

        // Create a connection
        $connection = mysqli_connect($host, $user, $pass, $database);

        // Check connection
        if (!$connection) {
            // Display error message if connection fails
            die("Connection failed: " . mysqli_connect_error());
        } else {
            // Successfully connected to the database
            echo "Successfully connected to the database.<br>";
        }

        // Retrieve the form data and sanitize it
        $name = mysqli_real_escape_string($connection, $_POST["name"]);
        $phone = mysqli_real_escape_string($connection, $_POST["phone"]);
        $email = mysqli_real_escape_string($connection, $_POST["email"]);

        // Validate the form data (additional checks can be added as needed)
        if (empty($name) || empty($phone) || empty($email)) {
            echo "All fields are required!";
        } else {
            // SQL query to insert data into the 'student' table
            $sql = "INSERT INTO student (name, phone, email) VALUES ('$name', '$phone', '$email')";

            // Execute the query and check if it was successful
            if (mysqli_query($connection, $sql)) {
                echo "Record successfully inserted.";
            } else {
                // Display error message if the query fails
                echo "Error inserting record: " . mysqli_error($connection);
            }
        }

        // Close the database connection
        mysqli_close($connection);
    }
    ?>

</body>
</html>

