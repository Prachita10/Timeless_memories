<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photo_gallery";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Get the file path from database
    $sql = "SELECT photo_url FROM photos WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($row) {
        // Delete file from directory
        unlink($row['photo_url']);

        // Delete record from database
        $delete_sql = "DELETE FROM photos WHERE id=$id";
        if ($conn->query($delete_sql) === TRUE) {
            echo "Photo deleted successfully!";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

$conn->close();
header("Location: admin.php");
exit();
?>