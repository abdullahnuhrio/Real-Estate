<?php
include "connection.php";

$submissionId = $_GET['id'];

$sql = "SELECT * FROM contact_us WHERE id = $submissionId";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$adminReply = ''; // Initialize the admin reply variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted
    $adminReply = $_POST['admin_reply'];
    // Update the database with the admin reply
    $updateSql = "INSERT INTO admin_replies (submission_id, admin_reply) VALUES ($submissionId, '$adminReply')";
    mysqli_query($conn, $updateSql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply to Message</title>
</head>

<body>
    <h1>Message Details</h1>
    <div class="message-details">
        <h3>
            <?php echo $row['name']; ?>
        </h3>
        <p>
            <?php echo $row['email']; ?>
        </p>
        <p><strong>Phone:</strong>
            <?php echo $row['phone']; ?>
        </p>
        <p><strong>Message:</strong>
            <?php echo $row['message']; ?>
        </p>
        <p><strong>Submission Date:</strong>
            <?php echo $row['submission_date']; ?>
        </p>
    </div>

    <!-- Reply form -->
    <form action="messeges.php?id=<?php echo $submissionId; ?>" method="post">
        <textarea name="admin_reply" placeholder="Type your reply here..."></textarea>
        <button type="submit">Submit Reply</button>
    </form>

    <!-- JavaScript for success alert and redirect -->
    <script>
        <?php if (!empty($adminReply) && $adminReply != null): ?>
            alert("Reply sent successfully!");
            window.location.href = "Admin msg.php";
        <?php endif; ?>
    </script>
</body>

</html>
