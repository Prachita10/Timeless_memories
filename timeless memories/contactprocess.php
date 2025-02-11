<?php
// Database configuration
$host = 'localhost'; // Change this to your DB host
$dbname = 'timeless_memories'; // Your database name
$username = 'root'; // Your database username
$password = ''; // Your database password

// Create a connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Basic validation
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        try {
            // SQL to insert data
            $sql = "INSERT INTO contact_messages (name, email, subject, message, submitted_at) VALUES (:name, :email, :subject, :message, NOW())";
            $stmt = $conn->prepare($sql);

            // Bind parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':message', $message);

            // Execute query
            $stmt->execute();

            echo "<p>Thank you, $name! Your message has been successfully sent.</p>";
        } catch (PDOException $e) {
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p>Please fill in all fields.</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message Submission Status</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <a href="contact.php">Go Back to Contact Form</a>
</body>
</html>