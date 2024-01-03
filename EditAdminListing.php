<?php
$con = mysqli_connect("localhost", "root", "", "realestate") or die("fail to connect");

// Function to update a property
function updateProperty()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update'])) {
        $con = mysqli_connect("localhost", "root", "", "realestate") or die("Fail to connect");
        $id = $_POST['property_id'];
        $updatedName = $_POST['updated_name'];
        $updatedInfo = $_POST['updated_info'];
        $updatedLocation = $_POST['updated_location'];
        $updatedPrice = $_POST['updated_price'];

        // Update the property information in the database
        $sql = "UPDATE properties SET 
                property_name = '$updatedName',
                property_info = '$updatedInfo',
                property_location = '$updatedLocation',
                property_price = '$updatedPrice'
                WHERE property_id = '$id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo '<script>alert("Property updated successfully.");</script>';
        } else {
            echo "Error in update query: " . mysqli_error($con);
        }
    }
}

// Check if 'property_id' is set before using it
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['property_id'])) {
    $propertyId = $_GET['property_id'];
    $sql = "SELECT * FROM properties WHERE property_id = '$propertyId'";
    $result = mysqli_query($con, $sql);

    // Check if the query was successful before fetching results
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Property - Admin Listing</title>
            <!-- Add your CSS stylesheets here -->
            <link rel="stylesheet" href="your_stylesheet.css">
        </head>
        <body>
            <h1>Edit Property</h1>
            <form method="post" action="">
                <input type="hidden" name="property_id" value="' . $row['property_id'] . '">
                <label for="updated_name">Property Name:</label>
                <input type="text" name="updated_name" value="' . $row['property_name'] . '" required>
                <label for="updated_info">Property Info:</label>
                <textarea name="updated_info" required>' . $row['property_info'] . '</textarea>
                <label for="updated_location">Property Location:</label>
                <input type="text" name="updated_location" value="' . $row['property_location'] . '" required>
                <label for="updated_price">Property Price:</label>
                <input type="text" name="updated_price" value="' . $row['property_price'] . '" required>
                <button type="submit" name="update">Update</button>
            </form>
        </body>
        </html>';
    } else {
        echo "Error in query: " . mysqli_error($con);
    }
} else {
    echo "Property ID not provided.";
}

// Call the update function
updateProperty();
?>