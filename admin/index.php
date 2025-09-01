<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
include '../includes/db.php';

// Get total appointments
$appt_count = $conn->query("SELECT COUNT(*) as total FROM appointments")->fetch_assoc()['total'];
// Get total messages
$msg_count = $conn->query("SELECT COUNT(*) as total FROM contacts")->fetch_assoc()['total'];
// Get 3 most recent appointments
$recent_appt = $conn->query("SELECT name, appointment_date, status FROM appointments ORDER BY created_at DESC LIMIT 3");
// Get 3 most recent messages
$recent_msg = $conn->query("SELECT name, email, created_at FROM contacts ORDER BY created_at DESC LIMIT 3");
?>
<?php include '_Nav.php'; ?>

<div class="max-w-6xl mx-auto p-6">
  <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center">
      <div class="text-4xl font-bold text-pink-600"><?php echo $appt_count; ?></div>
      <div class="text-lg text-gray-700">Total Appointments</div>
      <a href="appointments.php" class="mt-2 text-pink-600 hover:underline">View All</a>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center">
      <div class="text-4xl font-bold text-orange-500"><?php echo $msg_count; ?></div>
      <div class="text-lg text-gray-700">Total Messages</div>
      <a href="messages.php" class="mt-2 text-orange-500 hover:underline">View All</a>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center">
      <div class="text-4xl font-bold text-blue-500">👤</div>
      <div class="text-lg text-gray-700">Logged in as</div>
      <div class="mt-2 text-blue-500 font-semibold"><?php echo $_SESSION['username']; ?></div>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center">
      <div class="text-4xl font-bold text-green-500">✔️</div>
      <div class="text-lg text-gray-700">Quick Links</div>
      <a href="appointments.php" class="mt-2 text-green-500 hover:underline">Appointments</a>
      <a href="messages.php" class="text-green-500 hover:underline">Messages</a>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white rounded-xl shadow-lg p-6">
      <h2 class="text-xl font-bold mb-4">Recent Appointments</h2>
      <ul>
        <?php if ($recent_appt->num_rows > 0): ?>
          <?php while($row = $recent_appt->fetch_assoc()): ?>
            <li class="mb-2 flex justify-between items-center border-b pb-2">
              <span class="font-semibold"><?php echo htmlspecialchars($row['name']); ?></span>
              <span class="text-sm text-gray-500"><?php echo htmlspecialchars($row['appointment_date']); ?></span>
              <span class="text-xs px-2 py-1 rounded <?php
                switch($row['status']) {
                  case 'Confirmed': echo 'bg-green-100 text-green-700'; break;
                  case 'Completed': echo 'bg-blue-100 text-blue-700'; break;
                  case 'Cancelled': echo 'bg-red-100 text-red-700'; break;
                  default: echo 'bg-yellow-100 text-yellow-700';
                }
              ?>"><?php echo htmlspecialchars($row['status']); ?></span>
            </li>
          <?php endwhile; ?>
        <?php else: ?>
          <li>No recent appointments.</li>
        <?php endif; ?>
      </ul>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6">
      <h2 class="text-xl font-bold mb-4">Recent Messages</h2>
      <ul>
        <?php if ($recent_msg->num_rows > 0): ?>
          <?php while($row = $recent_msg->fetch_assoc()): ?>
            <li class="mb-2 flex justify-between items-center border-b pb-2">
              <span class="font-semibold"><?php echo htmlspecialchars($row['name']); ?></span>
              <span class="text-sm text-gray-500"><?php echo htmlspecialchars($row['email']); ?></span>
              <span class="text-xs text-gray-500"><?php echo htmlspecialchars($row['created_at']); ?></span>
            </li>
          <?php endwhile; ?>
        <?php else: ?>
          <li>No recent messages.</li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>

<?php include '_Footer.php'; ?>
<?php $conn->close(); ?>