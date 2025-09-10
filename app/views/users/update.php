<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* CSS-only dot grid pattern */
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background-image: radial-gradient(rgba(255,255,255,0.4) 1px, transparent 1px);
      background-size: 30px 30px;
      z-index: 0;
    }
  </style>
</head>
<body class="relative bg-gradient-to-br from-blue-100 via-sky-200 to-blue-300 flex items-center justify-center min-h-screen">

  <!-- Card -->
  <div class="relative z-10 bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md">
    <!-- Title -->
    <h1 class="text-3xl font-extrabold text-center mb-6 bg-gradient-to-r from-blue-700 to-sky-600 bg-clip-text text-transparent">
       Update User
    </h1>

    <!-- Form -->
    <form action="<?= site_url('users/update/'.segment(4)); ?>" method="POST" class="space-y-5">
      
      <!-- First Name -->
      <div>
        <label for="first_name" class="block text-gray-700 font-medium mb-1">First Name</label>
        <input 
          type="text" 
          id="first_name" 
          name="first_name"
          value="<?= html_escape($user['first_name']); ?>"
          required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
        >
      </div>

      <!-- Last Name -->
      <div>
        <label for="last_name" class="block text-gray-700 font-medium mb-1">Last Name</label>
        <input 
          type="text" 
          id="last_name" 
          name="last_name"
          value="<?= html_escape($user['last_name']); ?>"
          required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
        >
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 font-medium mb-1">Email Address</label>
        <input 
          type="email" 
          id="email" 
          name="email"         
          value="<?= html_escape($user['email']); ?>"
          required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
        >
      </div>

      <!-- Buttons -->
      <div class="flex gap-3">
        <!-- Save -->
        <button type="submit"
          class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition">
           Save
        </button>

        <!-- Cancel -->
        <a href="<?= site_url('/'); ?>" 
           class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg shadow-md text-center transition">
           Cancel
        </a>
      </div>
    </form>
  </div>

</body>
</html>
