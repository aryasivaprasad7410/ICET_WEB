<html>
<head>
    <title>Simple Registration Form</title>
    <script>
        function validateForm() {
            var fname = document.getElementById("fname").value;
            var lname = document.getElementById("lname").value;
            var email = document.getElementById("email").value;

         
            if (fname == "" || lname == "" || email == "") {
                alert("All fields must be filled out.");
                return false;
            }
            else{
                alert("success.");
            } 
                

           
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!email.match(emailPattern)) {
                alert("Please enter a valid email.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

    <h2>Registration Form</h2>

    <form onsubmit="return validateForm()">
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br><br>

        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" value="Register">
    </form>

</body>
</html>