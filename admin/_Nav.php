<script src="https://cdn.tailwindcss.com"></script>
<nav class="bg-gray-900 text-white px-6 py-4 shadow-lg flex items-center justify-between">
  <!-- Logo -->
  <div class="flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#FCA930]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.1.9-2 2-2h4m-6 6h6m-6-4h6m-6-2h6m-9 2h.01M6 9h.01M6 15h.01M6 12h.01M12 6v1m0 4v10m6-14h2a2 2 0 012 2v12a2 2 0 01-2 2h-2M6 20H4a2 2 0 01-2-2V6a2 2 0 012-2h2" />
    </svg>
    <span class="text-xl font-bold">Admin Panel</span>
  </div>

  <!-- Navigation -->
  <ul class="flex items-center gap-6 text-lg font-medium">
    <li><a href="index.php" class="hover:text-[#FCA930] transition">Dashboard</a></li>
    <li><a href="messages.php" class="hover:text-[#FCA930] transition">Messages</a></li>
    <li><a href="appointments.php" class="hover:text-[#FCA930] transition">Appointments</a></li>
    <li><a href="logout.php" class="hover:text-red-400 transition">Logout</a></li>
  </ul>
</nav>
