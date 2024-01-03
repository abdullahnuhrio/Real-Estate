<?php
$con = mysqli_connect("localhost", "root", "", "realestate") or die("fail to connect");
$sql = "SELECT a.id,c.name,a.admin_reply,a.reply_date FROM admin_replies a JOIN contact_us c ON c.id = a.submission_id";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>

<head>
  <title>User Profile - Real Estate Listings</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" >
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



  <div id="main">
    <h2 style="margin-left:35%; font: bolder; font-size: 200%;">Admin Reply</h2>
    <table cellpedding="7px">
      <thead>
        <th>Reply ID</th>
        <th>Name</th>
        <th>Admin Reply</th>
        <th>Reply Date</th>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td>
              <?php echo $row['id'] ?>
            </td>
            <td>
              <?php echo $row['name'] ?>
            </td>
            <td>
              <?php echo $row['admin_reply'] ?>
            </td>
            <td>
              <?php echo $row['reply_date'] ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- <div class="user-cards">
    <div class="user-card">
      <h2>User 1</h2>
      <p>Email: user1@example.com</p>
      <p>Location: New York</p>
      <button onclick="deleteUser(1)">Delete</button>
    </div>
    <div class="user-card">
      <h2>User 2</h2>
      <p>Email: user2@example.com</p>
      <p>Location: Los Angeles</p>
      <button onclick="deleteUser(2)">Delete</button>
    </div>
    <div class="user-card">
      <h2>User 3</h2>
      <p>Email: user3@example.com</p>
      <p>Location: Chicago</p>
      <button onclick="deleteUser(3)">Delete</button>
    </div>
  </div>-->
  <style>
    /* Your existing CSS styles */

    /*nav*/

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




    /* Sidebar Styles */
    #sidebar {


      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;


    }











    /* Main Content Styles */
    #main {
      margin-left: 250px;
      /* Same as sidebar width */
      padding: 20px;
      transition: margin-left 0.5s;
      /* Add smooth transition for better user experience */
    }

    /* Adjust the position of the table */
    table {
      margin-top: 20px;
    }

    /* Adjust the table styles as needed */
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 1px solid #ddd;
    }

    th,
    td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    /* Adjust the table styles as needed */
    table {
      width: 100%;
      border-collapse: collapse;
      box-shadow: 0 8px 10px rgba(0, 0, 0, 0.5);
      /* Add box shadow */
      margin-top: 20px;
    }

    table,
    th,
    td {
      border: 1px solid #ddd;
    }

    th,
    td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }





    /*  .user-cards {
      display: flex;
      margin-left: 20%;
      gap: 20px;
      padding: 20px;
    }

    .user-card {
      flex-basis: 30%;
      background-color: white;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      text-align: center;
    }

    button {
      background-color: #ff0000;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
    }*/
  </style>
</body>

</html>