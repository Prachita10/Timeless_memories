<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Admin Panel - Manage Photos
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="font-roboto bg-gray-100">
  <div class="min-h-screen flex">
   <!-- Sidebar -->
   <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 fixed h-full">
    <div class="text-center">
     <img alt="Admin profile picture" class="w-24 h-24 mx-auto rounded-full" height="100" src="admin.jpg" width="100"/>
     <h1 class="text-xl font-semibold mt-2">
      Admin
     </h1>
    </div>
    <nav>
     <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white" href="#">
      <i class="fas fa-tachometer-alt">
      </i>
      Dashboard
     </a>
     <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white" href="#">
      <i class="fas fa-users">
      </i>
      Clients
     </a>
     <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white" href="#">
      <i class="fas fa-cogs">
      </i>
      Settings
     </a>
     <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white" href="logout.php">
      <i class="fas fa-sign-out-alt">
      </i>
      Logout
     </a>
    </nav>
   </div>
   <!-- Main content -->
   <div class="flex-1 p-10 ml-64">
    <h1 class="text-3xl font-semibold mb-6">
     Admin Panel - Manage Photos
    </h1>
    <!-- Upload Photo Section -->
    <div class="bg-white shadow-md rounded my-6 p-6">
     <h2 class="text-2xl font-semibold mb-4">
      Upload Photo
     </h2>
     <form action="upload.php" enctype="multipart/form-data" id="uploadForm" method="post">
      <div class="mb-4">
       <label class="block text-gray-700 text-sm font-bold mb-2" for="photo">
        Choose a photo:
       </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photo" name="photo" required="" type="file"/>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
        Category:
       </label>
       <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category" name="category" required="">
        <option value="nature">
         Nature
        </option>
        <option value="Portrait">
         Portrait
        </option>
        <option value="wedding">
         wedding
        </option>
        <option value="animals">
         Animals
        </option>
       </select>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Name:
       </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" required="" type="text"/>
      </div>
      <div class="flex items-center justify-between">
       <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Upload
       </button>
      </div>
     </form>
    </div>
    <!-- Add Photographer Section -->
    <div class="bg-white shadow-md rounded my-6 p-6">
     <h2 class="text-2xl font-semibold mb-4">
      Add Photographer
     </h2>
     <form action="add_photographer.php" enctype="multipart/form-data" id="addPhotographerForm" method="post">
      <div class="mb-4">
       <label class="block text-gray-700 text-sm font-bold mb-2" for="photographer_name">
        Photographer Name:
       </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photographer_name" name="photographer_name" required="" type="text"/>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700 text-sm font-bold mb-2" for="photographer_email">
        Photographer Email:
       </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photographer_email" name="photographer_email" required="" type="email"/>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700 text-sm font-bold mb-2" for="photographer_photo">
        Photographer Photo:
       </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photographer_photo" name="photographer_photo" required="" type="file"/>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700 text-sm font-bold mb-2" for="photographer_speciality">
        Photographer Speciality:
       </label>
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photographer_speciality" name="photographer_speciality" required="" type="text"/>
      </div>
      <div class="flex items-center justify-between">
       <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Add Photographer
       </button>
      </div>
     </form>
    </div>
    <!-- Photo Table -->
    <div class="bg-white shadow-md rounded my-6 p-6">
     <h2 class="text-2xl font-semibold mb-4">
      Uploaded Photos
     </h2>
     <table class="min-w-max w-full table-auto">
      <thead>
       <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
        <th class="py-3 px-6 text-left">
         ID
        </th>
        <th class="py-3 px-6 text-left">
         Photo
        </th>
        <th class="py-3 px-6 text-left">
         Name
        </th>
        <th class="py-3 px-6 text-left">
         category
        </th>
        <th class="py-3 px-6 text-center">
         Action
        </th>
       </tr>
      </thead>
      <tbody class="text-gray-600 text-sm font-light" id="photoTable">
       <?php include "fetch_photos.php"; ?>
      </tbody>
     </table>
    </div>
    <!-- Contact and Inquiry Details Section -->
    <div class="bg-white shadow-md rounded my-6 p-6">
     <h2 class="text-2xl font-semibold mb-4">
      Additional Actions
     </h2>
     <div class="flex justify-center space-x-4">
      <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
       <a class="text-white no-underline" href="view_message.php">
        View Contact Details
       </a>
      </button>
      <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
       <a class="text-white no-underline" href="admin_display.php">
        View Inquiry Details
       </a>
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