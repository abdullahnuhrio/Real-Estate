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
        // Count the total number of properties
        $totalListingsCount = mysqli_num_rows($result);
    } else {
        echo "Error in query: " . mysqli_error($con);
    } ?>

    <?php
    $con = mysqli_connect("localhost", "root", "", "realestate") or die("fail to connect");

    // Fetch total users count
    $sqlTotalUsers = "SELECT COUNT(*) AS totalUsers FROM users";
    $resultTotalUsers = mysqli_query($con, $sqlTotalUsers);
    $rowTotalUsers = mysqli_fetch_assoc($resultTotalUsers);
    $totalUsersCount = $rowTotalUsers['totalUsers'];

    // Fetch users based on search if POST request
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $search = $_POST['search'] . '%';
        $sql = "SELECT * FROM users WHERE Name LIKE '$search'";
        $result = mysqli_query($con, $sql);
    }

    ?>




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


        <div class="card-container">


            <div class="metrics-container">


                <div class="metric-card">

                    <div class="value" id="totalUsers">
                        <?php echo $totalUsersCount; ?>
                    </div>
                    <div class="label">Total Users</div>
                </div>




                <div class="metric-card">

                    <div class="value" id="totalListings">
                        <?php echo $totalListingsCount; ?>
                    </div>
                    <div class="label">Total Listings</div>
                </div>




            </div>
        </div>




        <!--Chart-->

        <div class="chart-container">
            <canvas id="salesChart"></canvas>
        </div>

        <!-- Add Chart.js library -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('salesChart').getContext('2d');
            var salesChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],  // Months or other labels
                    datasets: [{
                        label: 'Property Sales',
                        data: [5, 12, 9, 15, 20, 8, 10],  // Your sales data
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

        </script>










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












            .metrics-container {
                display: flex;
                justify-content: center;
                gap: 50px;
            }

            .metric-card {
                width: 150px;
                padding: 30px;
                background-color: skyblue;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                text-align: center;
            }

            .icon {
                font-size: 1.5em;
                margin-bottom: 10px;
            }

            .value {
                font-size: 1.5em;
                margin: 10px 0;
                font-weight: bold;
                color: white;
            }

            .label {
                font-size: 130%;
                color: white;
                font-weight: bold;
            }
        </style>


</body>

</html>