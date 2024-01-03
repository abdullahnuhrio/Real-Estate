<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your head content remains the same -->
</head>

<body>
    <a href="AdminPanel.php"><button>Back</button></a>
    <h1>Property Management</h1>

    <!-- Form to Add Property -->
    <form action="" method="POST">

        <h2>Add Property</h2>
        <label for="property_name">Property Name:</label>
        <input type="text" id="property_name" name="property_name" required>

        <label for="property_location">Property Location:</label>
        <input type="text" id="property_location" name="property_location" required>

        <label for="property_info">Property Info:</label>
        <textarea id="property_info" name="property_info" rows="4" required></textarea>

        <label for="property_price">Property Price:</label>
        <input type="text" id="property_price" name="property_price" required>

        <!-- Add more input fields as needed for other property details -->

        <button type="submit" name="save_btn" value="Save">Add Property</button>
    </form>
   



    <?php
    $con = mysqli_connect("localhost", "root", "", "realestate") or die("Fail to connect");
    $suc = false;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $property_name = $_POST['property_name'];
        $property_location = $_POST['property_location'];
        $property_info = $_POST['property_info'];
        $property_price = $_POST['property_price'];
        $sql = "insert into properties(property_name, property_location, property_info, property_price) values ('$property_name', '$property_location', '$property_info', $property_price)";
        $result1 = mysqli_query($con, $sql);
        if ($result1) {

            echo "Property added successfully";
        } else {
            echo "Error adding property: " . mysqli_error($con);
        }


    }
    ?>






    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1,
        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>


    <script>
        // JavaScript functions for interacting with the back-end
        function addProperty() {
            // Implement AJAX or fetch API to send property data to the server for insertion
            // After adding the property, update the property table
        }

        function updateProperty(propertyId) {
            // Implement AJAX or fetch API to send updated property data to the server
            // After updating the property, update the property table
        }

        function deleteProperty(propertyId) {
            // Implement AJAX or fetch API to send property ID to the server for deletion
            // After deleting the property, update the property table
        }

        // Fetch and display existing properties when the page loads
        window.onload = function () {
            // Implement AJAX or fetch API to retrieve property data from the server and populate the table
        };
    </script>



</body>

</html>