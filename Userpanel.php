<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="AdminPanel.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>

    <style>
        #content {
            margin-left: 250px;
            padding: 15px;
        }

        .card-container {
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td:last-child {
            text-align: center;
        }

        button {
            padding: 8px 12px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    </head>

    <body>

        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="admin-dp">
                    <img src="images/dashlogo.jpg" alt="Admin Picture">
                </div>
                <h3 style="color: white;">User</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active"><a href="Userpanel.php">
                        <i class="bx bx-grid-alt"></i>
                        <span class="links_name">Dashboard</span>
                    </a></li>

                <li><a href="dash2.php">
                        <i class="bx bx-home"></i>
                        <span class="links_name">Home</span>
                    </a></li>

                <li><a href="listing.php">
                        <i class="bx bx-home"></i>
                        <span class="links_name">Listings</span>
                    </a></li>

                <li><a href="usermsg.php">
                        <i class="bx bx-message"></i>
                        <span class="links_name">Messages</span>
                    </a></li>


                <li><a href="Contact us.php">
                        <i class="bx bx-phone"></i>
                        <span class="links_name">Contact us</span>
                    </a></li>


                <li><a href="userprofile.php">
                        <i class="bx bx-user"></i>
                        <span class="links_name">Update Profile</span>
                    </a></li>

                <li><a href="login.php">
                        <i class="bx bx-log-out"></i>
                        <span class="links_name">Log out</span>
                    </a></li>
            </ul>
        </nav>

        <div id="content">
            <div class="card-container">
                <h1>Welcome to Your Dashboard</h1>

                <!-- Property List -->
                <h2>Your Properties</h2>
                <table>
                    <tr>
                        <th>Property ID</th>
                        <th>Property Name</th>
                        <th>Action</th>
                    </tr>
                    <!-- Property entries will be dynamically added here -->
                </table>

                <!-- Saved Properties -->
                <h2>Saved Properties</h2>
                <table>
                    <tr>
                        <th>Property ID</th>
                        <th>Property Name</th>
                        <th>Action</th>
                    </tr>
                    <!-- Saved property entries will be dynamically added here -->
                </table>
            </div>
        </div>


        <script>
            // JavaScript functions for interacting with the back-end
            function saveProperty(propertyId) {
                // Implement AJAX or fetch API to send property ID to the server for saving
                // After saving the property, update the saved property table
            }

            function unsaveProperty(propertyId) {
                // Implement AJAX or fetch API to send property ID to the server for unsaving
                // After unsaving the property, update the saved property table
            }

            // Fetch and display user's properties and saved properties when the page loads
            window.onload = function () {
                // Implement AJAX or fetch API to retrieve user's property data from the server and populate the property table
                // Implement AJAX or fetch API to retrieve user's saved property data from the server and populate the saved property table
            };
        </script>









        <style>
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











            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }

            .card-container {
                max-width: 800px;
                margin: 20px auto;
                background-color: #fff;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.);

            }

            h1 {
                font-weight: bold;
                text-align: center;
                margin-bottom: 20px;
            }

            h2 {
                margin-top: 20px;
                font-size: 1.5em;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
            }

            th,
            td {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #f2f2f2;
            }

            td:last-child {
                text-align: center;
            }

            button {
                padding: 8px 12px;
                background-color: #4caf50;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
        </style>
    </body>

    </html>