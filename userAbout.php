<!DOCTYPE html>

<head>

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


    <div class="row" id="about-us" style="display: flex; ">

        <div class="col-5">
            <h1 style="color: black; font-weight: bolder; font-size: 400%;">Let's Find Your<br>
                <h1 style="color: rgb(42, 140, 179);font-weight: bolder; font-size: 400%; margin-top: -5%;">Perfect
                    House!!</h1>
            </h1>
            <p>At Dashing Real Estate, we believe in providing our clients with the best property choices,<br> tailored
                to their needs. Our team consists of seasoned professionals with years of<br> experience in the real
                estate industry, dedicated to making your property dreams come true.</p>
            <p>Whether you're looking to buy, sell, or rent a property,<br> we're here to assist you at every step of
                the way.<br> Join the thousands of happy clients who have trusted us over the years.<br> We look forward
                to serving you!</p><br>
            <a href="Contact us.php" class="butn" style="margin-left: 20%;"> Get in touch!"</a>

        </div>
        <div class="col-5">


            <img src="images/about.jpg" style="border-radius: 3rem;">
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




        .row {
            justify-content: center;
            padding: 50px;
        }



        #about-us h1 {
            font-size: 200%;
            font: bold;

            margin-bottom: 5%;
        }
    </style>
</body>

</html>