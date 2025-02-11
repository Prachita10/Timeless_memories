<html lang="en">
 <head>
  <meta charset="UTF-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Contact Us - Timeless Memories
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmFIB46ZmdtAc9eNBvH0H/ZpiBw==" referrerpolicy="no-referrer" rel="stylesheet"/>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
        }

        .contact-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            margin: 40px auto;
        }

        .contact-container h1 {
            font-size: 2.5rem;
            color: #1f2937;
            margin-bottom: 20px;
        }

        .contact-container label {
            font-size: 1rem;
            color: #4b5563;
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        .contact-container input,
        .contact-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            font-size: 1rem;
            color: #1f2937;
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
            margin-top: 20px;=
            font-size: 1rem;
            color: #4b5563;
        }

        .info-section a {
            color: #3b82f6;
            text-decoration: none;
        }

        .info-section a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
  </style>
 </head>
 <body>
  <nav class="bg-white shadow-md">
   <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-gray-800">
     Timeless
     <span class="text-blue-500">
      Memories
     </span>
    </h1>
    <ul class="flex space-x-6">
     <li>
      <a class="text-gray-600 hover:text-blue-500" href="home">
       Portfolio
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-blue-500" href="gallery.php">
       Gallery
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-blue-500" href="skill.php">
       Experience
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-blue-500" href="contact.php">
       Contact us
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-blue-500" href="photographer.php">
       photographer
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-blue-500" href="login.php">
       LOGIN
      </a>
     </li>
    </ul>
   </div>
  </nav>
  <div class="contact-container">
   <h1>
    Contact Us
   </h1>
   <form action="contactprocess.php" method="POST">
    <label for="name">
     Full Name
    </label>
    <input id="name" name="name" placeholder="Enter your name" required="" type="text"/>
    <label for="email">
     Email Address
    </label>
    <input id="email" name="email" placeholder="Enter your email" required="" type="email"/>
    <label for="subject">
     Subject
    </label>
    <input id="subject" name="subject" placeholder="Enter subject" required="" type="text"/>
    <label for="message">
     Message
    </label>
    <textarea id="message" name="message" placeholder="Type your message here..." required="">
    </textarea>
    <button type="submit">
     Send Message
    </button>
   </form>
   <div class="info-section">
    <p>
     You can also reach us at:
     <a href="mailto:contact@timelessmemories.com">
      contact@timelessmemories.com
     </a>
    </p>
    <p>
     Phone: +977-123-456789
    </p>
   </div>
  </div>
  <footer class="bg-gray-800 text-white py-6">
   <div class="container mx-auto px-4 text-center">
    <p class="text-gray-200">
     © 2025 Timeless Memories Photography
    </p>
   </div>
  </footer>
 </body>
</html>