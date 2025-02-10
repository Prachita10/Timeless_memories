<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Timeless Memories</title>
  <link rel="stylesheet" href="contact.css">
  
</head>
<style>
  ```css
/* contact.css */
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

body {
    font-family: 'Roboto', sans-serif;
    background-color:rgb(173, 166, 173);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.contact-container {
    background-color:rgb(156, 153, 158);
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
    text-align: center;
}

.contact-container h1 {
    font-size: 2.5rem;
    color: #333333;
    margin-bottom: 20px;
}

.contact-container label {
    font-size: 1rem;
    color: #555555;
    display: block;
    margin-bottom: 5px;
    text-align: left;
}

.contact-container input,
.contact-container textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #dddddd;
    border-radius: 5px;
    font-size: 1rem;
    color: #333333;
}

.contact-container input:focus,
.contact-container textarea:focus {
    border-color: #3b82f6;
    outline: none;
    box-shadow: 0 0 5px rgba(59, 130, 246, 0.5);
}

.contact-container button {
    background-color: #3b82f6;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.contact-container button:hover {
    background-color: #2563eb;
}

.info-section {
    margin-top: 20px;
    font-size: 1rem;
    color: #555555;
}

.info-section a {
    color: #3b82f6;
    text-decoration: none;
}

.info-section a:hover {
    text-decoration: underline;
}
```
</style>
<body>
  <div class="contact-container">
    <h1>Contact Us</h1>
    <form action="contactprocess.php"  method="POST">
      <label for="name">Full Name</label>
      <br>
      <br>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      
      <br>
      <br>
      <br>
      <label for="email">Email Address</label>
      <br>
      <br>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      
      <br>
      <br>
      <br>

      <label for="subject">Subject</label>
      <br>
      <br>
      <input type="text" id="subject" name="subject" placeholder="Enter subject" required>
      
      <br>
      <br>
      <br>
      <label for="message">Message</label>
      <br>
      <br>
      <textarea id="message" name="message" placeholder="Type your message here..." required></textarea>
      <br>
      <br>
      <br>

      <button type="submit">Send Message</button>
    </form>

    <div class="info-section">
      <p>You can also reach us at: <a href="mailto:contact@timelessmemories.com">contact@timelessmemories.com</a></p>
      <p>Phone: +977-123-456789</p>
    </div>
  </div>
</body>
</html>
