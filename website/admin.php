<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Admin Panel - Manage Photos</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-in { animation: fadeIn 0.5s ease-in-out; }
    .hover-scale { transition: transform 0.2s ease-in-out; }
    .hover-scale:hover { transform: scale(1.05); }
    .highlight { background-color: #fde68a; padding: 0.25rem 0.5rem; border-radius: 0.25rem; }
    .bold { font-weight: 700; }
    .hover-bg { transition: background-color 0.3s ease-in-out; }
    .hover-bg:hover { background-color: #60a5fa; color: white; }
  </style>
</head>
<body class="font-roboto bg-gradient-to-r from-gray-100 to-blue-50">
  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 fixed h-full">
      <div class="text-center fade-in">
        <img alt="Admin profile picture" class="w-24 h-24 mx-auto rounded-full border-4 border-blue-500" src="https://placehold.co/100x100"/>
        <h1 class="text-xl font-semibold mt-2 bold">Admin</h1>
      </div>
      <nav class="space-y-2">
        <a class="block py-2.5 px-4 rounded transition duration-300 hover-bg bold" href="#">
          <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a class="block py-2.5 px-4 rounded transition duration-300 hover-bg bold" href="#">
          <i class="fas fa-users"></i> Clients
        </a>
        <a class="block py-2.5 px-4 rounded transition duration-300 hover-bg bold" href="#">
          <i class="fas fa-cogs"></i> Settings
        </a>
        <a class="block py-2.5 px-4 rounded transition duration-300 hover-bg bold" href="logout.php">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </nav>
    </div>
    <!-- Main content -->
    <div class="flex-1 p-10 ml-64">
      <h1 class="text-4xl font-semibold mb-6 fade-in text-gray-700">Admin Panel - <span class="highlight">Manage Photos</span></h1>
      <!-- Upload Photo Section -->
      <div class="bg-white shadow-lg rounded-lg my-6 p-6 hover-scale fade-in">
        <h2 class="text-2xl font-semibold mb-4 bold text-blue-600">Upload Photo</h2>
        <form action="upload.php" enctype="multipart/form-data" id="uploadForm" method="post">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 bold" for="photo">Choose a photo:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photo" name="photo" required type="file"/>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 transform hover:scale-110 bold" type="submit">
              Upload
            </button>
          </div>
        </form>
      </div>
      <!-- Photo Table -->
      <div class="bg-white shadow-lg rounded-lg my-6 p-6 hover-scale fade-in">
        <h2 class="text-2xl font-semibold mb-4 bold text-blue-600">Uploaded Photos</h2>
        <table class="min-w-max w-full table-auto">
          <thead>
            <tr class="bg-gray-300 text-gray-700 uppercase text-sm leading-normal">
              <th class="py-3 px-6 text-left bold">ID</th>
              <th class="py-3 px-6 text-left bold">Photo</th>
              <th class="py-3 px-6 text-left bold">Name</th>
              <th class="py-3 px-6 text-center bold">Action</th>
            </tr>
          </thead>
          <tbody class="text-gray-600 text-sm font-light" id="photoTable">
            <?php include 'fetch_photos.php'; ?>
          </tbody>
        </table>
      </div>
      <!-- Contact and Inquiry Details Section -->
      <div class="bg-white shadow-lg rounded-lg my-6 p-6 hover-scale fade-in">
        <h2 class="text-2xl font-semibold mb-4 bold text-blue-600">Additional Actions</h2>
        <div class="flex justify-center space-x-4">
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 transform hover:scale-110 bold">
            <a class="text-white no-underline" href="view_message.php">View Contact Details</a>
          </button>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 transform hover:scale-110 bold">
            <a class="text-white no-underline" href="admin_display.php">View Inquiry Details</a>
          </button>
        </div>
      </div>
    </div>
  </div>
  <script>
    function deletePhoto(id) {
      if (confirm("Are you sure you want to delete this photo?")) {
        window.location.href = `delete.php?id=${id}`;
      }
    }
  </script>
</body>
</html>
