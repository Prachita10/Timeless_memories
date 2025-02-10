<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeless Memories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>
<style>
   

   /* Packages Section */
#packages {
    margin-top: 60px;
    padding: 40px 20px;
    background-color:rgb(120, 107, 79);
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

#packages h2 {
    text-align: center;
    font-size: 36px;
    margin-bottom: 40px;
    color: #333;
    position: relative;
    display: inline-block;
    width: 100%;
}

#packages h2::after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background-color: #ff6f61;
    margin: 10px auto 0;
    border-radius: 2px;
}

.packages-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    padding: 20px;
}

.package-card {
    background-color: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
}

.package-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg, rgba(255, 111, 97, 0.1), rgba(255, 111, 97, 0.05));
    transition: left 0.5s ease;
    z-index: 1;
}

.package-card:hover::before {
    left: 100%;
}

.package-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
}

.package-card h3 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
    position: relative;
    z-index: 2;
}

.package-card p {
    margin: 15px 0;
    font-size: 16px;
    color: #555;
    position: relative;
    z-index: 2;
}

.package-card .price {
    font-size: 28px;
    font-weight: bold;
    color: #ff6f61;
    margin: 25px 0;
    position: relative;
    z-index: 2;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
    100% {
        transform: scale(1);
    }
}

.book-btn {
    padding: 12px 30px;
    background-color: #ff6f61;
    color: white;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.3s ease;
    position: relative;
    z-index: 2;
}

.book-btn:hover {
    background-color: #e65a50;
    transform: scale(1.05);
}

.book-btn:active {
    transform: scale(0.95);
}

/* Highlight Animation */
@keyframes highlight {
    0% {
        background-position: 0 0;
    }
    100% {
        background-position: 200% 0;
    }
}

.package-card:nth-child(1) {
    border: 2px solid #ff6f61;
}

.package-card:nth-child(2) {
    border: 2px solid #6f61ff;
}

.package-card:nth-child(3) {
    border: 2px solid #61ff6f;
}

.package-card:nth-child(1):hover {
    background: linear-gradient(45deg, #ff6f61, #ff9f61, #ff6f61);
    background-size: 200% 200%;
    animation: highlight 3s linear infinite;
}

.package-card:nth-child(2):hover {
    background: linear-gradient(45deg, #6f61ff, #9f61ff, #6f61ff);
    background-size: 200% 200%;
    animation: highlight 3s linear infinite;
}

.package-card:nth-child(3):hover {
    background: linear-gradient(45deg, #61ff6f, #61ff9f, #61ff6f);
    background-size: 200% 200%;
    animation: highlight 3s linear infinite;
}
.photographers {
    text-align: center;
    padding: 40px 20px;
}

h2 {
    color:rgb(12, 12, 12);
    margin-bottom: 20px;
}

.photographer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    justify-content: center;
    max-width: 1100px;
    margin: auto;
}

.card {
    background: #e3d3e4;
    color: black;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.card h3 {
    margin: 10px 0;
}

.card a {
    display: inline-block;
    margin-top: 10px;
    color: #6a0dad;
    text-decoration: none;
    font-weight: bold;
}

.hero {
    background-image: url("g.jpeg") center/cover no-repeat;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
}

.hero-content {
    background: rgba(0, 0, 0, 0.5);
    padding: 30px;
    border-radius: 10px;
}

.hero h1 {
    font-size: 36px;
}

.hero p {
    font-size: 18px;
    margin: 10px 0;
}

.btn {
    display: inline-block;
    background: #3b82f6;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
}
.hero img{
    background-repeat:no-repeat;
    background-position:cover;
    width:100%;
    height:700px;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color:white;
}
</style>
<body>
    <div class="main">
    <nav class="menu_bar">
        <h1 class="logo">Timeless <span>Memories</span></h1>
        <ul>
            <li><a href="home">Portfolio </a></li>
            <li><a href="gallery.php">Gallery </i></a></li>
            <li><a href="skill.php">Experience </i></a></li>
            <li><a href="contact.php">Contact us </i></a></li>
            <li>
            <li><a href="LOGIN">LOGIN <i class="fas fa-caret-down"></i></a>
    
           <div class="dropdown_menu">
            <ul>
            
                 <li><a href="login.php">Admin</a></li>
               
            </ul>
           </div>
           
        </li>
        
        </ul>
       
    </nav>
    <section class="hero">
        
            <img src="16.jpg">
            <div class="centered">
            <h1>Capture Moments, Create Memories</h1>
            <p>Showcasing the best of our professional photography.</p>
</div>
          
       
    </section>
 
   
<section class="photographers">
        <h2>Our Photographers</h2>
        <div class="photographer-grid">
            <div class="card">
                <img src="a.jpg" alt="Sisan Baniya">
                <h3>Sisan Baniya</h3>
                <p>Email: sisanbaniya1@gmail.com</p>
                <p>Specialty: Wedding Photography</p>
                <a href="#">Explore The Work</a>
            </div>
            <div class="card">
                <img src="d.jpg" alt="Navesh Chitrakar">
                <h3>Navesh Chitrakar</h3>
                <p>Email: naveshchitrakar@gmail.com</p>
                <p>Specialty: Astro Photography</p>
                <a href="#">Explore The Work</a>
            </div>
            <div class="card">
                <img src="b.jpg" alt="Monika Sherpa">
                <h3>Monika Sherpa</h3>
                <p>Email: monikasherpa@gmail.com</p>
                <p>Specialty: Nature Photography</p>
                <a href="#">Explore The Work</a>
            </div>
            <div class="card">
                <img src="c.jpg" alt="Genelia Khatri">
                <h3>Genelia Khatri</h3>
                <p>Email: geneliakhatri4@gmail.com</p>
                <p>Specialty: Flower Photography</p>
                <a href="#">Explore The Work</a>
            </div>
        </div>
    </section>  
    
    <section id="packages">
        <h2>Photography Packages</h2>
        <div class="packages-container">
            <div class="package-card">
                <h3>Basic Package</h3>
                <p>✔ 1-hour session</p>
                <p>✔ 10 edited photos</p>
                <p>✔ Online gallery access</p>
               
                
            </div>
            <div class="package-card">
                <h3>Standard Package</h3>
                <p>✔ 2-hour session</p>
                <p>✔ 25 edited photos</p>
                <p>✔ Online gallery & prints</p>
                
               
            </div>
            <div class="package-card">
                <h3>Premium Package</h3>
                <p>✔ 4-hour session</p>
                <p>✔ 50 edited photos</p>
                <p>✔ Album & high-resolution files</p>
               
               
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
<footer>
        <p>&copy; 2025 Timeless Memories Photography</p>
    </footer>
</body>
</html>