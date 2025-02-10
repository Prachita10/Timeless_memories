<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photo_gallery";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM photos ORDER BY uploaded_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td><img src='{$row['photo_url']}' width='100' height='70'></td>
                <td>{$row['photo_name']}</td>
                <td>
                    <button onclick='deletePhoto({$row['id']})'>Delete</button>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No photos uploaded yet.</td></tr>";
}

$conn->close();
?>