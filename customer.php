<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Panel</title>
    <link rel="stylesheet" href="style1.css">
    <script>

        function validateForm() {

            let x = document.forms["myForm"]["email"].value;

            if (x == "")  {

                alert("Invalid Email");

                return false;

            }

            let y = document.forms["myForm"]["pass"].value;

            if (y == "")  {

                alert("Invalid Password");

                return false;

            }

        }

    </script>
</head>
<body class="q">
    <div>
        <div class="Ca">
            <h1>Customer Login</h1>
        </div>
        <div class="menu" id="A">
        E-mail :
        <input type="email" name ="email" placeholder="Enter E-mail" required><br>
        Password : 
        <input type="password" placeholder="Password" required> <br>
        <a href="CustomerHome.php">Login</a><br>
        <a href="CustomerRegistration.php">Create an Account</a>
        </div>

    </div>
</body>
</html>