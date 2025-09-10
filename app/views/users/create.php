<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background-image: radial-gradient(rgba(25, 118, 210, 0.15) 1px, transparent 1px);
      background-size: 30px 30px;
      z-index: 0;
    }
  </style>
</head>
<body class="relative bg-gradient-to-br from-[#90caf9] via-[#64b5f6] to-[#1976d2] flex items-center justify-center min-h-screen font-serif">

  <div class="relative z-10 bg-[#e3f2fd] p-8 rounded-2xl shadow-2xl w-full max-w-md border border-[#64b5f6]">
    <h1 class="text-3xl font-extrabold text-center mb-6 bg-gradient-to-r from-[#1976d2] to-[#64b5f6] bg-clip-text text-transparent drop-shadow">
       Create User
    </h1>

    <form action="<?= site_url('users/create'); ?>" method="POST" class="space-y-5">
      
      <div>
        <label for="first_name" class="block text-[#0d47a1] font-semibold mb-1">First Name</label>
        <input 
          type="text" 
          id="first_name" 
          name="first_name" 
          placeholder="Enter first name"
          required
          class="w-full px-4 py-2 border border-[#64b5f6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#90caf9] focus:outline-none bg-[#f0f7ff] text-[#0d47a1] placeholder-[#90a4ae]"
        >
      </div>

      <div>
        <label for="last_name" class="block text-[#0d47a1] font-semibold mb-1">Last Name</label>
        <input 
          type="text" 
          id="last_name" 
          name="last_name" 
          placeholder="Enter last name"
          required
          class="w-full px-4 py-2 border border-[#64b5f6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#90caf9] focus:outline-none bg-[#f0f7ff] text-[#0d47a1] placeholder-[#90a4ae]"
        >
      </div>

      <div>
        <label for="email" class="block text-[#0d47a1] font-semibold mb-1">Email Address</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          placeholder="Enter email"
          required
          class="w-full px-4 py-2 border border-[#64b5f6] rounded-lg shadow-sm focus:ring-2 focus:ring-[#90caf9] focus:outline-none bg-[#f0f7ff] text-[#0d47a1] placeholder-[#90a4ae]"
        >
      </div>

      <div class="flex gap-3">
        <button type="submit"
          class="flex-1 bg-gradient-to-r from-[#1976d2] to-[#64b5f6] hover:from-[#0d47a1] hover:to-[#2196f3] text-white font-semibold py-2 px-4 rounded-lg shadow-md transition">
           Create User
        </button>
      </div>
    </form>
  </div>

</body>
</html>
