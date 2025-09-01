<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<?php 
include '_Nav.php';
include_once "../includes/db.php";

// ✅ Handle status update before fetching data
if (isset($_POST['update_id'])) {
    $id     = intval($_POST['update_id']);
    $status = $conn->real_escape_string($_POST['status']);
    $sql    = "UPDATE appointments SET status='$status' WHERE id=$id";
    $conn->query($sql);

    // Optional: redirect to avoid form re-submission on refresh
    header("Location: appointments.php");
    exit();
}

// ✅ Fetch appointments after any update
$sql = "SELECT * FROM appointments ORDER BY appointment_date ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Appointments</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Container -->
  <div class="max-w-6xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Appointments</h1>

    <div class="overflow-x-auto bg-white rounded-xl shadow-lg">
      <table class="w-full text-left border-collapse">
        <thead class="bg-gray-200">
          <tr>
            <th class="p-3">#</th>
            <th class="p-3">Name</th>
            <th class="p-3">Phone</th>
            <th class="p-3">Email</th>
            <th class="p-3">Date</th>
            <th class="p-3">Status</th>
            <th class="p-3">Created</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($result->num_rows > 0): ?>
            <?php $count = 1; ?>
            <?php while($row = $result->fetch_assoc()): ?>
              <tr class="border-b hover:bg-gray-50">
                <td class="p-3"><?php echo $count; ?></td>
                <td class="p-3"><?php echo htmlspecialchars($row['name']); ?></td>
                <td class="p-3"><?php echo htmlspecialchars($row['phone']); ?></td>
                <td class="p-3"><?php echo htmlspecialchars($row['email']); ?></td>
                <td class="p-3"><?php echo htmlspecialchars($row['appointment_date']); ?></td>
                <td class="p-3">
                  <form method="POST" class="flex items-center gap-2">
                    <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
                    <select name="status" class="border rounded px-2 py-1">
                      <option value="Pending"   <?php if($row['status']=="Pending") echo "selected"; ?>>Pending</option>
                      <option value="Confirmed" <?php if($row['status']=="Confirmed") echo "selected"; ?>>Confirmed</option>
                      <option value="Completed" <?php if($row['status']=="Completed") echo "selected"; ?>>Completed</option>
                      <option value="Cancelled" <?php if($row['status']=="Cancelled") echo "selected"; ?>>Cancelled</option>
                    </select>
                    <button type="submit" class="bg-[#FCA930] text-white px-3 py-1 rounded-lg">Update</button>
                  </form>
                </td>
                <td class="p-3 text-xs text-gray-500">🕒 <?php echo $row['created_at']; ?></td>
              </tr>
              <?php $count++; ?>
            <?php endwhile; ?>
          <?php else: ?>
            <tr><td colspan="7" class="text-center p-4">No appointments found.</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
<?php include '_Footer.php'; ?>

</body>
</html>

<?php $conn->close(); ?>
