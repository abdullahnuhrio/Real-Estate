<?php
include "connection.php";

/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from users where email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);
    if ($numrows == 1) {
        session_start();
        $_SESSION['loggedin'] == true;
        $_SESSION['email'] == $email;
        header("location: Userpanel.php");

    } else {
        echo "<script> alert('sorry') </script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Real Estate Listing </title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>









<script>

    //Form validation//
    function validateForm() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        // Email validation using a regular expression
        var emailPattern = /^\S+@\S+\.\S+$/;
        if (!email.match(emailPattern)) {
            alert('Please enter a valid email address.');
            return false; // Prevent form submission
        }

        // Password validation (for length or other criteria)
        if (password.length < 6) {
            alert('Password must be at least 6 characters long.');
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }










</script>
<form class="form-box">
    <div>
        <div class="heading">

            <h2>Login</h2>
        </div>

        <div class="input-group">
            <input type="text" id="email" placeholder="Enter your email" required>

        </div>
        <div class="input-group">
            <input type="password" id="password" placeholder="Enter your password" required>


        </div>
    </div>

    <button type="submit" name="Login">LOGIN</button>
    <p>
    <h6>Did you Forget your Password? <a href="#">Reset from here</a></h6>
    </p>
    <p>
    <h6>If you don't have an account!! <a href="register.html">signUp</a></h6>
    </p>

    </div>
</form>

</body>

</html>*/


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $numrows = mysqli_num_rows($result);

    if ($numrows == 1) {
        if ($email == "tayaba75@gmail.com" || $password == "tayaba123") {
            session_start();
            $_SESSION['loggedin'] = true; // Use a single equal sign for assignment
            $_SESSION['email'] = $email;
            header("location: AdminPanel.php");
            exit();
        } else {
            session_start();
            $_SESSION['loggedin'] = true; // Use a single equal sign for assignment
            $_SESSION['email'] = $email;
            header("location: Userpanel.php");
            exit();
        } // Ensure that no further code is executed after redirection

    } else {
        echo "<script> alert('Sorry, login failed.') </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Real Estate Listing</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>

    <script>
        // Form validation
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            // Email validation using a regular expression
            var emailPattern = /^\S+@\S+\.\S+$/;
            if (!email.match(emailPattern)) {
                alert('Please enter a valid email address.');
                return false; // Prevent form submission
            }

            // Password validation (for length or other criteria)
            if (password.length < 6) {
                alert('Password must be at least 6 characters long.');
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>

    <form class="form-box" method="post" onsubmit="return validateForm()">
        <div>
            <div class="heading">
                <h2>Login</h2>
            </div>

            <div class="input-group">
                <input type="text" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
        </div>

        <button type="submit" name="Login">LOGIN</button>
        <p>
        <h6>Did you forget your password? <a href="#">Reset from here</a></h6>
        </p>
        <p>
        <h6>If you don't have an account!! <a href="register.php">Sign Up</a></h6>
        </p>
    </form>
</body>

</html>