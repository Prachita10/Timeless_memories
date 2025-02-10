<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photo_gallery";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a file is uploaded
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp_name = $_FILES['photo']['tmp_name'];
    $upload_directory = "uploads/";

    // Create uploads folder if not exists
    if (!is_dir($upload_directory)) {
        mkdir($upload_directory, 0777, true);
    }

    // Set a unique file name to avoid duplicates
    $photo_path = $upload_directory . time() . "_" . basename($photo_name);

    // Move the uploaded file to the uploads directory
    if (move_uploaded_file($photo_tmp_name, $photo_path)) {
        // Insert file details into the database
        $sql = "INSERT INTO photos (photo_name, photo_url) VALUES ('$photo_name', '$photo_path')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Photo uploaded successfully!";
            header("Location: admin.php"); // Redirect to admin panel
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error moving the uploaded file.";
    }
} else {
    echo "No file uploaded or an error occurred.";
}

$conn->close();
?>