<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>



    <nav id="sidebar">
        <div class="sidebar-header">
            <div class="admin-dp">
                <img src="images/dashlogo.jpg" alt="Admin Picture">
            </div>
            <h3 style="color: white;">Areeba Cheema</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="active"><a href="AdminPanel.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>


            </li>
            <li>
                <a href="Admin msg.php">
                    <i class="bx bx-chat"></i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            <li>
                <a href="Add,dlt,edit.php">
                    <i class="bx bx-plus"></i>
                    <span class="links_name">Listings</span>
                </a>
            </li>
            <li>
                <a href="Adminlisting.php">
                    <i class="bx bx-minus"></i>
                    <span class="links_name">View Listing</span>
                </a>
            </li>



            <li>
                <a href="update profile.php">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Update Profile</span>
                </a>

            </li>
            <li>
                <a href="Admin users.php">
                    <i class="bx bx-user"></i>
                    <span class="links_name">View users</span>
                </a>
            </li>



            <li>
                <a href="login.php">

                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
                </a>

            </li>

        </ul>

    </nav>
    <?php
    $con = mysqli_connect("localhost", "root", "", "realestate") or die("fail to connect");

    // Check if 'search' is set before using it
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['search'])) {
        $search = $_POST['search'] . '%';
        $sql = "SELECT * FROM properties WHERE Name LIKE '$search'";
    } else {
        $sql = "SELECT * FROM properties";
    }

    $result = mysqli_query($con, $sql);

    // Check if the query was successful before fetching results
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="properties-listing">

        <div class="property">
            <img src="images/home.jpg" alt="Property 1">
            <h3>' . $row['property_name'] . '</h3>
            <p>' . $row['property_info'] . '</p>
            <p>' . $row['property_location'] . '</p>
            <p>Price: ' . $row['property_price'] . '</p>
            <form method="get" action="EditAdminListing.php">
                    <input type="hidden" name="property_id" value="' . $row['property_id'] . '">
                    <button class="edit-btn" type="submit">Edit</button>
                </form>
            <form method="post" action="">
                <input type="hidden" name="property_id" value="' . $row['property_id'] . '">
                <button class="delete-btn" type="submit" name="delete">Delete</button>
            </form>
            </div>
        </div>';
        }
    } else {
        echo "Error in query: " . mysqli_error($con);
    }

    function deleteProperty()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['delete'])) {
            $con = mysqli_connect("localhost", "root", "", "realestate") or die("Fail to connect");
            $id = $_POST['property_id'];
            $sql = "DELETE FROM properties WHERE property_id = '$id'";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo '<script>alert("Property deleted successfully.");</script>';
                echo '<script>window.location.reload();</script>';
            } else {
                echo "Error in delete query: " . mysqli_error($con);
            }
        }
    }

    // Call the delete function
    deleteProperty();
    ?>









    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }


        #sidebar {
            width: 250px;
            height: 100vh;
            background: rgb(47, 113, 139);
            position: fixed;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: skyblue;
            text-align: center;
        }

        .admin-dp img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
            color: white;
            transition: color 0.3s;
            text-decoration: none;
        }

        #sidebar ul li a:hover {
            color: skyblue;
        }

        #content {
            width: calc(100% - 250px);
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
            margin-left: 250px;
        }





        .properties-listing {
            justify-content: center;
            display: flex;

            padding: 20px;

            /* Set to nowrap to keep all properties in a single row */
        }

        @media (max-width: 768px) {
            .properties-listing {
                flex-wrap: wrap;
                /* Allow properties to stack on smaller screens */
            }

            .property {
                width: calc(100% - 20px);
                /* Adjust the width to your preference */
            }
        }


        .property {

            /* Divide by three minus spacing */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            margin: 10px;
            transition: transform 0.3s;
        }

        .property:hover {
            transform: scale(1.05);
            /* A simple zoom effect on hover */
        }

        .property img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
        }

        .property h3 {
            background-color: #007BFF;
            color: white;
            text-align: center;
            margin: 0;
            padding: 10px;
        }

        .property p {
            padding: 0 10px 10px;
        }







        .property button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: block;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .property button:hover {
            background-color: #c82333;
        }

        .property:hover {
            transform: scale(1.05);
        }

        .property .delete-form {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>



</body>




</html>