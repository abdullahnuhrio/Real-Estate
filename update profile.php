<!DOCTYPE html>
<html lang="en">

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
    <div id="content">
        <!-- Your admin dashboard's content here -->
        <div class="container">
            <h2>Update Profile</h2>
            <form action="/path_to_update_profile_endpoint" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password">
                </div>
                <div>
                    <input type="file" id="imageInput" accept="image/*" onchange="displayImage(this)">
                    <img id="previewImage" src="#" alt="Preview Image"
                        style="max-width: 300px; max-height: 300px; display: none;">
                </div>
                <button type="submit">Update Profile</button>
            </form>
        </div>


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

            /*Form*/
            .container {
                width: 100%;
                max-width: 400px;
                margin: 50px auto;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }

            button {
                display: block;
                width: 100%;
                padding: 10px;
                background-color: #007BFF;
                color: #FFF;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin-top: 10%;
            }

            button:hover {
                background-color: #0056b3;
            }
        </style>





        <script>
            function displayImage(input) {
                var previewImage = document.getElementById('previewImage');

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        previewImage.src = e.target.result;
                        previewImage.style.display = 'block';
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
</body>

</html>