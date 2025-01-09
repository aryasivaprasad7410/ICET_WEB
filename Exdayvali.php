<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Registration Form</title>
    <script>
        function validateForm() {
            var fname = document.getElementById("fname").value;
            var lname = document.getElementById("lname").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;

           
            if (fname == "" || lname == "" || email == "" || phone == "") {
                alert("All fields must be filled out.");
                return false;
            }

            
            if (fname.length > 15) {
                alert("First name must be less than 15 characters.");
                return false;
            }

            
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.match(emailPattern)) {
                alert("Please enter a valid email.");
                return false;
            }

            
            var phonePattern = /^[0-9]{10}$/;
            if (!phone.match(phonePattern)) {
                alert("Please enter a valid phone number (10 digits).");
                return false;
            }

            alert("Success.");
            return true;
        }
    </script>
</head>
<body>
   <center>
    <form onsubmit="return validateForm()" style="border:1px solid black;width:500px;padding:20px;">
        <h2>Registration Form</h2>

        <div class="form">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname"><br><br>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname"><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>

            <label for="phone">Phone:</label><br>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="1234567890"><br><br>

            <input type="submit" value="Register">
        </div>
    </form>
 </center>
</body>
</html>