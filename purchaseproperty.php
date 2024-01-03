<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Request Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
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
</head>

<body>

    <div class="container">
        <h2>Purchase Request Form</h2>
        <form action="process_purchase_request.php" method="post">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="property_name">Property Name:</label>
            <input type="property_name" id="property_name" name="property_name" required>

            <label for="message">Additional Message (optional):</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="submit">Submit Purchase Request</button>
        </form>
    </div>

</body>

</html>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $property_name = $_POST['property_name'];
    $message = $_POST['message'];

    // Database connection setup here
    $conn = new mysqli("localhost", "root", "", "realestate");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the data into the database
    $sql = "INSERT INTO purchase_requests (fullname, email, phone, property_name, message) 
            VALUES ('$fullname', '$email', '$phone', '$property', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you, $fullname, for your purchase request! The admin will contact you shortly.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or handle the case where the user is not logged in
    header("Location: login.php");
    exit();
}

$con = mysqli_connect("localhost", "root", "", "realestate") or die("fail to connect");

// Get property ID from the form submission
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['buy'])) {
    $property_id = $_POST['property_id'];
    $user_id = $_SESSION['user_id'];

    // Check if the property is not already saved by the user
    $check_sql = "SELECT * FROM user_properties WHERE user_id = $user_id AND property_id = $property_id";
    $check_result = mysqli_query($con, $check_sql);

    if (mysqli_num_rows($check_result) == 0) {
        // If not saved, then save the property
        $insert_sql = "INSERT INTO user_properties (user_id, property_id) VALUES ($user_id, $property_id)";
        mysqli_query($con, $insert_sql);
        echo "Property saved to your panel successfully";
    } else {
        echo "Property is already saved in your panel";
    }
}

mysqli_close($con);
?>
<?php
// Assuming you have a loop to display properties
while ($row = mysqli_fetch_assoc($result)) {
    echo '
    <div class="property">
        <img src="images/home.jpg" alt="Property 1">
        <h3>' . $row['property_name'] . '</h3>
        <p>' . $row['property_info'] . '</p>
        <p>' . $row['property_location'] . '</p>
        <p>Price: ' . $row['property_price'] . '</p>
        <form action="purchaseproperty.php" method="post">
            <input type="hidden" name="property_id" value="' . $row['property_id'] . '">
            <input type="submit" value="Buy Now" name="buy" class="save">
        </form>
    </div>';
}
?>