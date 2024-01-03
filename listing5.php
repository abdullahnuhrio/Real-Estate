<!DOCTYPE html>
<html>

<head>
  <title>Home Listing - Real Estate Listings</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


  <nav>

    <ul>
      <li><img src="images/homelogo.jpeg" style="height: 110px; width: 170px;"></li>
      <li><a href="dash2.php">Home</a></li>
      <li><a href="Userpanel.php">Dashboard</a></li>
      <li><a href="userAbout.php">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="Contact us.php">Contact</a></li>



    </ul>
  </nav>

  <div class="listing">
    <div class="main-image">
      <img id="mainImage" src="images/house4.jpg" alt="Main Image">
    </div>
    <div class="thumbnails">
      <img src="images/home111.jpg" alt="Thumbnail 1" onclick="showMainImage('images/home111.jpg')">
      <img src="images/home222.jpg" alt="Thumbnail 2" onclick="showMainImage('images/home222.jpg')">
      <img src="images/home333.jpg" alt="Thumbnail 3" onclick="showMainImage('images/home333.jpg')">
      <img src="images/home444.jpg" alt="Thumbnail 4" onclick="showMainImage('images/home444.jpg')">
      <img src="images/home555.jpg" alt="Thumbnail 5" onclick="showMainImage('images/home555.jpg')">
    </div>
  </div>




  <div class="1" style="margin-left: 43%; color: rgb(26, 183, 245);">

    <p class="location"><i class="fas fa-map-marker-alt"></i>&nbsp;<span>Badin, Sindh, Pakistan - 400104</span></p>
  </div>
  <div class="info">
    <p><i class="fas fa-tag"></i><span>15 lac</span></p>
    <p><i class="fas fa-user"></i><span>john deo (owner)</span></p>
    <p><i class="fas fa-phone"></i><a href="tel:1234567890">1234567890</a></p>
    <p><i class="fas fa-building"></i><span>flat</span></p>
    <p><i class="fas fa-house"></i><span>sale</span></p>
    <p><i class="fas fa-calendar"></i><span>10-11-2022</span></p>
  </div>
  <div class="details-container">
    <h3 class="title">Details</h3>
    <div class="flex" style="    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
      <div class="box">
        <p><i>Rooms:</i>&nbsp; &nbsp;<span>2 BHK</span></p>
        <p><i>Deposit Amount:</i>&nbsp; &nbsp;<span>0</span></p>
        <p><i>Status:</i>&nbsp; &nbsp;<span>Ready; to move</span></p>
        <p><i>Bedrooms:</i>&nbsp; &nbsp;<span>3</span></p>
        <p><i>Bathrooms:</i>&nbsp; &nbsp;<span>2</span></p>
        <p><i>Balcony:</i>&nbsp; &nbsp;<span>1</span></p>
      </div>
      <div class="box">
        <p><i>Carpet Area:</i>&nbsp; &nbsp;<span>750sqft</span></p>
        <p><i>Age:</i>&nbsp; &nbsp;<span>3 years</span></p>
        <p><i>Room Floor:</i>&nbsp; &nbsp;<span>3</span></p>
        <p><i>Total Floors:</i>&nbsp; &nbsp;<span>22</span></p>
        <p><i>Furnished:</i>&nbsp; &nbsp;<span>Semi-furnished</span></p>
        <p><i>Loan:</i>&nbsp; &nbsp;<span>Available</span></p>
      </div>
    </div>
  </div>

  <div class="amenities-container">
    <h3 class="title">Amenities</h3>
    <div class="flex" style="    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
      <div class="box">
        <p><i class="fas fa-check"></i>&nbsp; &nbsp;<span>Lifts</span></p>
        <p><i class="fas fa-check"></i>&nbsp; &nbsp;<span>Security Guards</span></p>
        <p><i class="fas fa-times"></i>&nbsp; &nbsp;<span>Playground</span></p>
        <p><i class="fas fa-check"></i>&nbsp; &nbsp;<span>Gardens</span></p>
        <p><i class="fas fa-check"></i>&nbsp; &nbsp;<span>Water Supply</span></p>
        <p><i class="fas fa-check"></i>&nbsp; &nbsp;<span>Power Backup</span></p>
      </div>
      <div class="box">
        <p><i class="fas fa-check"></i>&nbsp; &nbsp;<span>Parking Area</span></p>
        <p><i class="fas fa-times"></i>&nbsp; &nbsp;<span>Gym</span></p>
        <p><i class="fas fa-check"></i>&nbsp; &nbsp;<span>Shopping Mall</span></p>
        <p><i class="fas fa-check"></i>&nbsp; &nbsp;<span>Hospital</span></p>
        <p><i class="fas fa-check"></i>&nbsp; &nbsp;<span>Schools</span></p>
        <p><i class="fas fa-check"></i>&nbsp; &nbsp;<span>Market Area</span></p>
      </div>
    </div>
  </div>




  <form action="" method="post">
    <input type="submit" value="save property" name="save" class="inline-btn">
  </form>
  </div>

  </section>

  <!-- view property section ends -->







  <script>
    function showMainImage(imagePath) {
      const mainImage = document.getElementById("mainImage");
      mainImage.src = imagePath;
    }

  </script>
  <style>
    /* Your existing CSS styles */





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
      text-decoration: none;
    }

















    .listing {
      width: 70%;


      margin: 0 auto;
      padding: 20px;
    }

    .main-image {
      width: 80%;
      margin-left: 15%;
      overflow: hidden;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    .main-image img {
      width: 100%;
      height: 10%;
      object-fit: cover;
      transition: transform 0.2s;
      cursor: pointer;
    }

    .thumbnails {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 10px;
    }

    .thumbnails img {
      width: 15%;
      margin-left: 5%;

      object-fit: cover;
      cursor: pointer;
    }

    .thumbnails img:hover {
      border: 1px solid white;
    }





    .info {
      border: 1px solid #ccc;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
      display: flex;
      justify-content: space-evenly;
    }

    .info p {
      font-size: 16px;
      margin: 8px 0;
    }

    .info i {
      margin-right: 10px;
      color: #3498db;
      /* Adjust the color as needed */
    }

    .info span {
      font-weight: bold;
    }

    .info a {
      color: #3498db;
      /* Adjust the color as needed */
      text-decoration: none;
    }

    .info a:hover {
      text-decoration: underline;
    }





    .details-container,
    .amenities-container {
      margin: 20px;
    }

    .flex {
      display: flex;
      justify-content: space-evenly;
      border: 1px solid #ccc;
    }

    .box {

      padding: 10px;
      margin: 5px;
    }

    .box p {
      margin: 5px 0;
    }

    .box i {
      color: #007BFF;

    }



    /* Add your own styles for icons (if needed) */





    .title {
      margin-left: 45%;
      color: #007BFF;
      font: bold;
      font-size: 200%;
    }





    .inline-btn {

      margin-left: 45%;
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


    .inline-btn:hover {
      background-color: #0056b3;
      /* a darker blue shade */
    }
  </style>
</body>

</html>