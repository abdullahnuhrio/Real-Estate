<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

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


    <!-- 
    <div class="properties-listing">


        <div class="property">
            <img src="images/home.jpg" alt="Property 1">
            <h3>Modern Family Home</h3>
            <p>3 Bedrooms | 2 Bathrooms | Garage | Garden</p>
            <p>Price: $350,000</p>
            <a href="listing1-home.php"><button>View Property</button></a>
        </div>

        <div class="property">
            <img src="images/homepage.webp" alt="Property 2">
            <h3>Luxury Villa</h3>
            <p>5 Bedrooms | 4 Bathrooms | 2 Garages | Pool</p>
            <p>Price: $1,500,000</p>
            <a href="listing2.php"><button>View Property</button></a>
        </div>

        <div class="property">
            <img src="images/house2.jpg" alt="Property 3">
            <h3>City Apartment</h3>
            <p>2 Bedrooms | 1 Bathroom | Balcony</p>
            <p>Price: $280,000</p>
            <a href="listing3.php"><button>View Property</button></a>
        </div>

        <div class="property">
            <img src="images/house3.jpg" alt="Property 1">
            <h3>Modern Family Home</h3>
            <p>3 Bedrooms | 2 Bathrooms | Garage | Garden</p>
            <p>Price: $350,000</p>
            <a href="listing4.php"><button>View Property</button></a>
        </div>

        <div class="property">
            <img src="images/house4.jpg" alt="Property 2">
            <h3>Luxury Villa</h3>
            <p>5 Bedrooms | 4 Bathrooms | 2 Garages | Pool</p>
            <p>Price: $1,500,000</p>
            <a href="listing5.php"><button>View Property</button></a>
        </div>

        <div class="property">
            <img src="images/house5.jpg" alt="Property 3">
            <h3>City Apartment</h3>
            <p>2 Bedrooms | 1 Bathroom | Balcony</p>
            <p>Price: $280,000</p>
            <a href="listing6.php"><button>View Property</button></a>
        </div>

    </div>
 -->

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
                <a href="listing6.php"><button>View Property</button></a>
                </div>
            </div>';
        }
    }
    ?>


    <footer class="footer">

        <section class="flex">

            <div class="box">
                <a href="tel:1234567890"><i class="fas fa-phone"></i><span>123456789</span></a>
                <a href="tel:1112223333"><i class="fas fa-phone"></i><span>1112223333</span></a>
                <a href="areebacheema75@gmail.com"><i
                        class="fas fa-envelope"></i><span>areebacheema75@gmail.com</span></a>
                <a href="#"><i class="fas fa-map-marker-alt"></i><span>Sindh , Pakistan</span></a>
            </div>

            <div class="box">
                <a href="home.php"><span>Home</span></a>
                <a href="about.php"><span>About</span></a>
                <a href="contact.php"><span>Contact</span></a>
                <a href="listings.php"><span>All listings</span></a>
                <a href="saved.php"><span>Saved properties</span></a>
            </div>

            <div class="box">
                <div class="social-links" style="display: flex; margin-left: 30%;">

                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>

            </div>

        </section>

        <div class="credit"> @real estate listing website</div>

    </footer>



















    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            text-decoration: none;
        }

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
        }

        .outer-div .inner-div {
            background-image: url('https://wallpapercave.com/wp/PlcoK2m.jpg');
            background-size: cover;
            /* This will ensure the image covers the full div */
            background-repeat: no-repeat;
            /* This will prevent the image from repeating if too small for the container */
            background-position: center;
            /* This will center the image within the div */
            height: 100vh;
            /* or any desired height */
        }


        img {
            width: 100%;
            height: 100%;
        }

        button {
            margin-left: 35%;
            margin-bottom: 10%;

            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
            /* a darker blue shade */
        }




        .properties-listing {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            flex-wrap: wrap;
            /* this ensures the properties stack on smaller screens */
        }

        .property {
            flex-basis: calc(33.33% - 20px);
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










        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            line-height: 1.5;
        }

        .footer {
            background-color: rgb(3, 93, 129);
            padding: 70px 0;
            margin-top: 20%;


        }




        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }

        .contact-us ul li a {
            color: #fff;
            font-size: small;
            margin: 0 10px 10px 0;
            text-align: center;

            line-height: 40px;
        }


        .help h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;

        }


        .help ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: inline;

        }


        /* our Services */
        .service-card {
            width: 250px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgb(53, 156, 197);
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            font-size: 50px;
            color: #007BFF;
            text-align: center;
            margin-bottom: 15px;
        }

        .service-title {
            font-weight: bold;
            font-size: 20px;
            text-align: center;
            margin-bottom: 10px;
        }

        .service-description {
            font-size: 14px;
            line-height: 1.5;
            text-align: center;
        }

        /*Footer*/

        .footer {
            background-color: rgb(19, 116, 155);
            color: white;
            padding: 20px 0;
            font-family: Arial, sans-serif;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            /* This ensures that the boxes stack when the viewport becomes too small */
            padding: 0 20px;
            /* Add some horizontal padding for spacing */
        }

        .box {
            flex: 1;
            /* Ensuring equal width */
            padding: 15px;
            text-align: center;
        }

        .box a {
            display: block;
            /* Displaying links as block elements for better click/tap area */
            margin-bottom: 10px;
            /* Spacing between links */
            color: white;
            /* Making sure text color is white */
            text-decoration: none;
            /* Removing the underline from links */
            transition: color 0.3s ease;
            /* Smooth color transition for hover effect */
        }

        .box a:hover {
            color: #8bb8e9;
            /* Changing the link color on hover */
        }

        i.fas,
        i.fab {
            margin-right: 10px;
            /* Space between icon and text */
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }


        .credit {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
        }

        /* Responsive Design */

        @media (max-width: 768px) {
            .flex {
                flex-direction: column;
                /* Stacking boxes vertically on smaller screens */
            }

            .box {
                margin-bottom: 20px;
                /* Adding vertical spacing between boxes */
            }
        }

        @media (max-width: 480px) {
            .box a {
                font-size: 0.9em;
                /* Reducing font size for smaller devices */
            }
        }
    </style>