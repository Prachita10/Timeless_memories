<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Gallery - Timeless Memories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" referrerpolicy="no-referrer" rel="stylesheet"/>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Timeless <span class="text-blue-500">Memories</span></h1>
            <div class="md:hidden">
                <button class="text-gray-800 focus:outline-none" id="menu-button">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <ul class="hidden md:flex space-x-6" id="menu">
                <li><a class="text-gray-600 hover:text-blue-500" href="index.php">Portfolio Page</a></li>
                <li><a class="text-gray-600 hover:text-blue-500" href="gallery.php">Gallery Page</a></li>
                <li><a class="text-gray-600 hover:text-blue-500" href="experience.php">Experience Page</a></li>
                <li><a class="text-gray-600 hover:text-blue-500" href="contact.php">Contact</a></li>
                <li><a class="text-gray-600 hover:text-blue-500" href="photographer.php">photographer</a></li>
                <li><a class="text-gray-600 hover:text-blue-500" href="login.php">Login</a></li>
            </ul>
        </div>
    </header>

    <main class="container mx-auto py-8 flex-grow">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800">Timeless Memories - Gallery</h1>
            <div class="flex justify-center mt-4 space-x-4">
                <select class="p-2 border rounded" id="filter" onchange="filterImages()">
                    <option value="all">All Categories</option>
                    <?php
                    // Database connection
                    $conn = new mysqli("localhost", "root", "", "photo_gallery");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch unique categories from the photos table
                    $categoryQuery = "SELECT DISTINCT category FROM photos";
                    $categoryResult = $conn->query($categoryQuery);
                    while ($categoryRow = $categoryResult->fetch_assoc()) {
                        echo '<option value="' . $categoryRow['category'] . '">' . ucfirst($categoryRow['category']) . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <section id="gallery" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <?php
            // Fetch all photos from database
            $query = "SELECT * FROM photos";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="image-item bg-white rounded-lg shadow-lg overflow-hidden" data-category="' . $row['category'] . '">
                    <img src="' . $row['path'] . '" alt="Photo of ' . $row['name'] . ' in the category of ' . $row['category'] . '" class="w-full h-48 object-cover">
                    <p class="p-4 text-center">' . $row['name'] . '</p>
                </div>';
            }
            ?>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-400">© 2025 Timeless Memories Photography</p>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });

        // Filter Images Using JavaScript
        function filterImages() {
            var filter = document.getElementById('filter').value;
            var items = document.querySelectorAll('.image-item');
            items.forEach(function(item) {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>