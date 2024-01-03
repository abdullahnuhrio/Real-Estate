<?php
include "connection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $sql = "INSERT INTO `contact_us` ( `name`, `email`, `phone`, `message`, `submission_date`) VALUES ('$name', '$email', '$phone', '$message', current_timestamp())";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> alert('succesfull') </script>";
    } else {
        echo "<script> alert('something went wrong') </script>";
    }
}


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head>

<body>



    <nav>

        <ul>
            <li><img src="images/homelogo.jpeg" style="height: 110px; width: 170px;"></li>
            <li><a href="dash2.php">Home</a></li>
            <li><a href="Userpanel.php">Dashboard</a></li>
            <li><a href="userAbout.php">About</a></li>

            <li><a href="Contact us.php">Contact</a></li>



        </ul>
    </nav>
    <div class="row" style="justify-content: center; margin-top: 5%;">


        <div class="col3" style="margin-left: 31%; margin-top: -4%;">
            <div class="image">
                <img src="images/realestate.jpg">
            </div>
        </div>
        <div class="form" style="margin-left: 30%; margin-top: -5% ;">
            <h2>Contact Us</h2>
            <form action="Contact us.php" method="POST" id="contactForm">
                <input type="text" placeholder="Full Name" name="name" required>
                <input type="email" placeholder="Email Address" name="email" required>
                <input type="text" placeholder="Phone Number (optional)" name="phone">
                <textarea placeholder="Your Message" name="message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    </div>
    <style>
        nav {
            background-color: rgb(254, 255, 255);
            /* There seems to be a typo in your original color value. Fixed it here. */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        ul {
            list-style-type: none;
            display: flex;
            justify-content: space-between;
            /* Adjusted from 'space-around' to 'space-between' */
            align-items: center;

        }

        li {
            flex: 1;
            text-align: center;
        }

        li:first-child {
            flex: none;
            /* This ensures the logo doesn't get the same flex space as others */
        }


        a {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 20px;
            color: black;
            padding: 0.1rem;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .butn {


            text-decoration: none;



        }

        .butn:hover {
            transform: translateX(-7px);
            color: rgb(214, 203, 203);


        }


        .butn {
            display: inline-block;
            color: #fff;
            padding: 10px 15px;
            background-color: rgb(48, 135, 235);
            box-shadow: 0px 0px 5px #fff, 0px 0px 15px #868686;
            text-decoration: none;
            font-size: 18px;

            transition: all .40s ease;


        }








        .form {
            font-family: Arial, sans-serif;
            height: 100%;
            justify-content: center;
            width: 400px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form h2 {

            text-align: center;
            margin-bottom: 20px;

        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</body>

</html>