<!DOCTYPE html>
<html>

<head>
    <title>Messaging - Real Estate Listings</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
    include "connection.php"; // Include your database connection
    
    $sql = "SELECT * FROM contact_us ORDER BY submission_date DESC";
    $result = mysqli_query($conn, $sql);
    ?>
    <div id="content">
        <!-- Admin Page - Display Messages -->

        <div class="user-cards">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<div class='user-card'>";
                echo "<div class='card-header'>";
                echo "<h3>{$row['name']}</h3>";
                echo "<p>{$row['email']}</p>";
                echo "</div>";
                echo "<div class='card-body'>";
                echo "<p><strong>Phone:</strong> {$row['phone']}</p>";
                echo "<p><strong>Message:</strong> {$row['message']}</p>";
                echo "<p><strong>Submission Date:</strong> {$row['submission_date']}</p>";
                echo "</div>";

                echo "<div class='card-footer'>";

                // Display admin's reply if available
                if (!empty($row['admin_reply'])) {
                    echo "<p><strong>Admin Reply:</strong> {$row['admin_reply']}</p>";
                } else {
                    // Reply form if admin reply is not available
                    // echo "<textarea id='replyMessage{$row['id']}' placeholder='Type your reply here...'></textarea>";
                    echo "<a href='messeges.php?id={$row['id']}' class='reply-button'>Reply</a>";
                }

                // Options for the user
                echo "<button class='delete-button' onclick='deleteSubmission({$row['id']})'>Delete</button>";
                echo "</div>";
                echo "</div>";
            }
            ?>

        </div>
    </div>

    <script>
        function deleteSubmission(submissionId) {
            if (confirm("Are you sure you want to delete this submission?")) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            // Check if the response contains the success message
                            if (xhr.responseText.trim() === "Submission deleted successfully!") {
                                // Update the UI or take other actions as needed
                                alert("Submission deleted successfully!");

                                // Remove the card from the UI
                                var cardToRemove = document.querySelector('.user-card[data-id="' + submissionId + '"]');
                                if (cardToRemove) {
                                    cardToRemove.remove();
                                }
                            } else {
                                alert("Error deleting submission: " + xhr.responseText);
                            }
                        } else {
                            alert("Error deleting submission: " + xhr.statusText);
                        }
                    }
                };

                xhr.open("GET", "Admin msg.php?id=" + submissionId, true);
                xhr.send();
            }
        }
    </script>







    <style>
        /* Your existing CSS styles */

        /* New styling for user cards */
        .user-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .user-card {
            width: 30%;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        .user-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            padding: 20px;
            background-color: #007BFF;
            color: white;
            text-align: center;
        }

        .card-header h3 {
            margin: 0;
            font-size: 1.5em;
        }

        .card-header p {
            margin: 5px 0;
        }

        .card-body {
            padding: 20px;
        }

        .card-footer {
            padding: 10px 20px;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .delete-button {
            background-color: red;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 80%;
            margin-top: -10%;

        }

        .reply-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 5px;
        }

        textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: vertical;
        }



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
    </style>


    <script>
        // JavaScript function for delete action
        function deleteSubmission(submissionId) {
            // Implement your delete logic here
            console.log('Deleting submission with ID:', submissionId);
        }


        // JavaScript functions for delete and reply actions

        function deleteMessage(messageId) {
            // Implement your delete logic here
            console.log('Deleting message with ID:', messageId);
        }

        function sendReply() {
            // Implement your reply logic here
            var replyMessage = document.getElementById('replyMessage').value;
            console.log('Sending reply:', replyMessage);
        }

        // JavaScript functions for delete and reply actions
        function deleteSubmission(submissionId) {
            // Implement your delete logic here
            console.log('Deleting submission with ID:', submissionId);
        }

        function sendReply(submissionId) {
            // Implement your reply logic here
            var replyMessage = document.getElementById(`replyMessage${submissionId}`).value;
            console.log(`Sending reply for submission ID ${submissionId}:`, replyMessage);
        }
    </script>




    </script>
</body>

</html>