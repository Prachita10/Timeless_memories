<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Timeless Memories</title>
    <link rel="stylesheet" href="gallery.css">
</head>

<body>

    <header>
        <h1>Timeless Memories - Gallery</h1>
        <div class="filter-sort">
            <select id="filter" onchange="filterImages()">
                <option value="all">All Categories</option>
                <option value="wedding">Wedding</option>
                <option value="portrait">Portrait</option>
                <option value="nature">Nature</option>
            </select>
            <select id="sort" onchange="sortImages()">
                <option value="date">Sort by Date</option>
                <option value="popularity">Sort by Popularity</option>
            </select>
        </div>
    </header>
<br>
<br>
<br>
    <section class="gallery">
        <div class="image-item" data-category="wedding">
            <img src="3.jpg" alt="Wedding Photo 1">
            <p>Wedding Photo 1</p>
        </div>
        <div class="image-item" data-category="portrait">
            <img src="g.jpeg" alt="Portrait Photo 1">
            <p>Portrait Photo 1</p>
        </div>
        <div class="image-item" data-category="nature">
            <img src="images (6).jpg" alt="Nature Photo 1">
            <p>Nature Photo 1</p>
        </div>
        <div class="image-item" data-category="wedding">
            <img src="7.jpg" alt="Wedding Photo 2">
            <p>Wedding Photo 2</p>
        </div>
        
        <div class="image-item" data-category="flower">
            <img src="17.jpg" alt="Flower Photo 2">
            <p>Flower Photo 2</p>
        </div>
        <div class="image-item" data-category="nature">
            <img src="19.jpg" alt="Nature Photo 2">
            <p>Nature Photo 2</p>
        </div>
       
        
    </section>
<br>
<br>
<br>
    <footer>
        <p>&copy; 2025 Timeless Memories Photography</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>