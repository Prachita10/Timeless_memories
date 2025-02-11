<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure all form fields are set
    if (!isset($_POST['photographer_name'], $_POST['photographer_email'], $_POST['photographer_speciality'], $_FILES['photographer_photo'])) {
        echo "<script>alert('All fields are required.'); window.location.href='admin.php';</script>";
        exit();
    }

    // Sanitize inputs
    $name = htmlspecialchars(trim($_POST['photographer_name']));
    $email = htmlspecialchars(trim($_POST['photographer_email']));
    $speciality = htmlspecialchars(trim($_POST['photographer_speciality']));

    // Handle file upload
    $target_dir = "uploads/";
    $filename = basename($_FILES["photographer_photo"]["name"]);
    $target_file = $target_dir . uniqid() . "_" . $filename; // Generate unique filename
    $uploadOk = true;
    $allowedFileTypes = ["jpg", "jpeg", "png", "gif"];

    // Check for file upload errors
    if ($_FILES["photographer_photo"]["error"] !== UPLOAD_ERR_OK) {
        echo "<script>alert('File upload failed. Please try again.'); window.location.href='admin.php';</script>";
        exit();
    }

    // Validate file size (limit 500KB)
    if ($_FILES["photographer_photo"]["size"] > 500000) {
        echo "<script>alert('File size too large. Maximum allowed size is 500KB.'); window.location.href='admin.php';</script>";
        $uploadOk = false;
    }

    // Validate file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (!in_array($imageFileType, $allowedFileTypes)) {
        echo "<script>alert('Only JPG, JPEG, PNG & GIF formats are allowed.'); window.location.href='admin.php';</script>";
        $uploadOk = false;
    }

    // File upload and database operations
    if ($uploadOk) {
        if (move_uploaded_file($_FILES["photographer_photo"]["tmp_name"], $target_file)) {
            $stmt = $conn->prepare("INSERT INTO photographers (name, email, photo, speciality) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $target_file, $speciality);

            if ($stmt->execute()) {
                echo "<script>alert('New photographer added successfully'); window.location.href='admin.php';</script>";
            } else {
                echo "<script>alert('Database error: {$conn->error}'); window.location.href='admin.php';</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('File upload error.'); window.location.href='admin.php';</script>";
        }
    }
}

$conn->close();
?>
