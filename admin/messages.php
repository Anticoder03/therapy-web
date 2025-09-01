<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
include_once '../includes/db.php';

$sql = "SELECT * FROM contacts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Messages</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-gray-900 text-white px-6 py-4 shadow-lg flex items-center justify-between">
    <div class="text-xl font-bold">Admin Panel</div>
    <ul class="flex gap-6 text-lg font-medium">
      <li><a href="dashboard.php" class="hover:text-[#FCA930]">Dashboard</a></li>
      <li><a href="messages.php" class="hover:text-[#FCA930]">Messages</a></li>
      <li><a href="appointments.php" class="hover:text-[#FCA930]">Appointments</a></li>
      <li><a href="logout.php" class="hover:text-red-400">Logout</a></li>
    </ul>
  </nav>

  <!-- Page Container -->
  <div class="max-w-6xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Messages</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
          <div class="bg-white shadow-lg rounded-xl p-5 cursor-pointer hover:shadow-2xl transition"
               onclick="openModal(<?php echo htmlspecialchars(json_encode($row)); ?>)">
            <h2 class="text-xl font-semibold text-gray-900 mb-2"><?php echo htmlspecialchars($row['name']); ?></h2>
            <p class="text-sm text-gray-600">📧 <?php echo htmlspecialchars($row['email']); ?></p>
            <p class="text-sm text-gray-600">📞 <?php echo htmlspecialchars($row['phone']); ?></p>
            <p class="mt-3 text-gray-700 line-clamp-2">
              <?php echo htmlspecialchars(substr($row['message'], 0, 80)) . '...'; ?>
            </p>
            <p class="text-xs text-gray-500 mt-2">🕒 <?php echo $row['created_at']; ?></p>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No messages found.</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- Modal -->
  <div id="messageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white w-11/12 md:w-2/3 lg:w-1/2 rounded-xl shadow-lg p-6 relative">
      <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-2xl">&times;</button>
      <h2 id="modalName" class="text-2xl font-bold text-gray-900"></h2>
      <p id="modalEmail" class="text-gray-700 mt-2"></p>
      <p id="modalPhone" class="text-gray-700"></p>
      <p id="modalCity" class="text-gray-700"></p>
      <p id="modalSpeciality" class="text-gray-700"></p>
      <p id="modalCountry" class="text-gray-700"></p>
      <p id="modalDate" class="text-gray-500 text-sm mt-2"></p>
      <div class="mt-4 border-t pt-4">
        <p id="modalMessage" class="text-gray-800"></p>
      </div>
    </div>
  </div>
<?php include '_Footer.php'; ?>

  <!-- Script -->
  <script>
    function openModal(data) {
      $("#modalName").text(data.name);
      $("#modalEmail").text("📧 " + data.email);
      $("#modalPhone").text("📞 " + data.phone);
      $("#modalCity").text("🏙️ " + data.city);
      $("#modalSpeciality").text("🎯 " + data.speciality);
      $("#modalCountry").text("🌍 " + data.country);
      $("#modalDate").text("🕒 " + data.created_at);
      $("#modalMessage").text(data.message);

      $("#messageModal").removeClass("hidden").addClass("flex");
    }

    function closeModal() {
      $("#messageModal").removeClass("flex").addClass("hidden");
    }
  </script>
</body>
</html>
<?php $conn->close(); ?>
