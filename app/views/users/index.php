<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
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
<body class="relative bg-gradient-to-br from-blue-100 via-blue-200 to-blue-300 text-gray-800 min-h-screen flex flex-col items-center p-6">

  <!-- Page Title -->
  <h1 class="text-4xl font-extrabold bg-gradient-to-r from-blue-700 to-blue-500 bg-clip-text text-transparent drop-shadow mb-8 relative z-10">
    Minsu Students Dashboard
  </h1>

  <!-- Card Container -->
  <div class="bg-white shadow-2xl rounded-2xl p-6 w-full md:w-4/5 lg:w-3/4 relative z-10 border border-gray-100">

    <!-- Header with Create Button -->
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-xl font-semibold text-gray-700">User Records</h2>
      <a href="<?=site_url('users/create');?>"
         class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2 rounded-lg shadow transition">
        Create User
      </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto rounded-xl border border-gray-200 shadow">
      <table class="w-full text-left">
        <thead>
          <tr class="bg-gradient-to-r from-blue-600 to-blue-700 text-white text-sm uppercase tracking-wider">
            <th class="px-6 py-3">ID</th>
            <th class="px-6 py-3">Full Name</th>
            <th class="px-6 py-3">Email</th>
            <th class="px-6 py-3 text-center">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 text-sm">
          <?php foreach(html_escape($users) as $user): ?>
            <tr class="hover:bg-blue-50 transition">
              <td class="px-6 py-3"><?= $user['id']; ?></td>
              <td class="px-6 py-3 font-medium text-gray-900">
                <?= $user['first_name'] . ' ' . $user['last_name']; ?>
              </td>
              <td class="px-6 py-3"><?= $user['email']; ?></td>
              <td class="px-6 py-3 flex justify-center gap-2">
                <!-- Update Button (Gray) -->
                <a href="<?=site_url('users/update/'.$user['id'])?>"
                   class="flex items-center gap-1 bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg shadow-sm transition">
                   Edit
                </a>
                <!-- Delete Button (Red) -->
                <a href="<?=site_url('users/delete/'.$user['id'])?>"
                   onclick="return confirm('Are you sure you want to delete this record?');"
                   class="flex items-center gap-1 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg shadow-sm transition">
                   Delete
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <?php if (!empty($pagination)): ?>
      <div class="mt-6">
        <?= $pagination; ?>
      </div>
    <?php endif; ?>

  </div>

</body>
</html>
