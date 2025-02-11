<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch photographers from the database
$sql = "SELECT * FROM photographers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographers List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .photographer-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .photographer-card {
            width: 250px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .info {
            padding: 15px;
        }
        .info h3 {
            margin: 5px 0;
            font-size: 20px;
        }
        .info p {
            margin: 5px 0;
            color: #555;
        }
        a {
            text-decoration: none;
            color: #007bff;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<header style="background-color: #333; padding: 15px 0; color: #fff; text-align: center;">
    <h1 style="margin: 0; font-size: 32px;">Timeless Memories Photography</h1>
    <nav style="margin-top: 10px;">
        <a href="index.php" style="color: #ddd; text-decoration: none; margin: 0 15px;">Home</a>
        <a href="gallery.php" style="color: #ddd; text-decoration: none; margin: 0 15px;">Gallery</a>
        <a href="about.php" style="color: #ddd; text-decoration: none; margin: 0 15px;">About Us</a>
        <a href="contact.php" style="color: #ddd; text-decoration: none; margin: 0 15px;">Contact</a>
    </nav>
</header>
    <h2>Photographers</h2>
    

    <div class="photographer-container">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="photographer-card">
                    <img src="<?php echo htmlspecialchars($row["photo"]); ?>" alt="Photographer">
                    <div class="info">
                        <h3><?php echo htmlspecialchars($row["name"]); ?></h3>
                        <p>Email: <?php echo htmlspecialchars($row["email"]); ?></p>
                        <p>Speciality: <?php echo htmlspecialchars($row["speciality"]); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No photographers found.</p>
        <?php endif; ?>
    </div>

    <?php $conn->close(); ?>
    <!-- Footer Section -->
<footer style="background-color: #333; padding: 15px 0; color: #fff; text-align: center; margin-top: 40px;">
    <p style="margin: 0;">© 2025 Timeless Memories Photography | All Rights Reserved</p>
    <p style="margin: 5px 0;">Follow us on 
        <a href="#" style="color: #ddd; text-decoration: none; margin: 0 5px;">Facebook</a> | 
        <a href="#" style="color: #ddd; text-decoration: none; margin: 0 5px;">Instagram</a> | 
        <a href="#" style="color: #ddd; text-decoration: none; margin: 0 5px;">Twitter</a>
    </p>
</footer>
</body>
</html>
