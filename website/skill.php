<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience & Skills | Timeless Memories</title>
    <link rel="stylesheet" href="skill.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8fafc;
    color: #1f2937;
}

h2 {
    text-align: center;
    margin-bottom: 5px;
    font-size: 28px;
    font-weight: bold;
}

p {
    text-align: center;
    font-size: 16px;
    color: #6b7280;
}

.experience {
    padding: 40px 20px;
    max-width: 1100px;
    margin: auto;
}

.experience-container {
    display: flex;
    gap: 40px;
    justify-content: space-between;
    flex-wrap: wrap;
}

.experience-section, .skills-section {
    flex: 1;
    min-width: 300px;
}

h3 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

.timeline {
    border-left: 3px solid #3b82f6;
    padding-left: 20px;
}

.event {
    margin-bottom: 20px;
}

.year {
    font-size: 16px;
    font-weight: bold;
    color: #3b82f6;
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 10px;
    margin-top: 10px;
}

.skills-grid span {
    display: block;
    background: #e5e7eb;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    font-weight: bold;
}

.certifications {
    list-style-type: none;
    padding: 0;
}

.certifications li {
    padding: 5px 0;
    font-size: 14px;
}

footer {
    background: #1f2937;
    color: white;
    padding: 20px 0;
    text-align: center;
    margin-top: 40px;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    max-width: 1100px;
    margin: auto;
}

.footer-section {
    min-width: 200px;
    margin-bottom: 20px;
}

.footer-section h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li a {
    color: white;
    text-decoration: none;
}

.footer-section p {
    color: #d1d5db;
}

</style>
<body>

    <section class="experience">
        <h2>Experience & Skills</h2>
        <p>A decade of capturing life's essence through photography</p>

        <div class="experience-container">
            <div class="experience-section">
                <h3>📸 Experience & Achievements</h3>
                <div class="timeline">
                    <div class="event">
                        <span class="year">2023</span>
                        <h4>National Geographic Feature</h4>
                        <p>Featured photographer in National Geographic Nepal Edition</p>
                    </div>
                    <div class="event">
                        <span class="year">2022</span>
                        <h4>Nepal Tourism Board Collaboration</h4>
                        <p>Official photographer for Nepal Tourism Board campaigns</p>
                    </div>
                    <div class="event">
                        <span class="year">2020</span>
                        <h4>Best Landscape Photography Award</h4>
                        <p>First place in Nepal Photography Awards</p>
                    </div>
                </div>
            </div>

            <div class="skills-section">
                <h3>📷 Skills & Expertise</h3>
                <div class="skills-grid">
                    <span>Landscape Photography</span>
                    <span>Portrait Photography</span>
                    <span>Aerial Photography</span>
                    <span>Photo Editing</span>
                    <span>Color Grading</span>
                    <span>Studio Lighting</span>
                </div>

                <h3>🎓 Certifications</h3>
                <ul class="certifications">
                    <li>Professional Photography Certification - Nepal Photography Institute</li>
                    <li>Adobe Certified Expert - Photoshop & Lightroom</li>
                    <li>Drone Photography License - Civil Aviation Authority of Nepal</li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Timeless Memories</h3>
                <p>Capturing life's beauty one frame at a time.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Experience</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Info</h3>
                <p>Email: contact@timelessmemories.com</p>
                <p>Phone: +977 980XXXXXXX</p>
            </div>
        </div>
    </footer>

</body>
</html>
