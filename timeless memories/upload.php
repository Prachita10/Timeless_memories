<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "photo_gallery");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// upload.php - Handles photo uploads
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photo"])) {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $photo = $_FILES["photo"];
    
    $uploadDir = "uploads/";
    $filePath = $uploadDir . basename($photo["name"]);
    
    if (move_uploaded_file($photo["tmp_name"], $filePath)) {
        $stmt = $conn->prepare("INSERT INTO photos (name, category, path) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $category, $filePath);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Photo uploaded successfully'); window.location.href='admin.php';</script>";
    } else {
        echo "<script>alert('Error uploading file'); window.location.href='admin.php';</script>";
}
}
?>