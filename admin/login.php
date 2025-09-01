

<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === 'admin' && $password === 'admin03') {
        // Login successful
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['username'] = 'admin';
        header("Location: index.php");
        exit();
    } else {
        $error = "❌ Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

  <div class="w-full max-w-sm bg-white rounded-2xl shadow-lg p-6">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Login</h2>

    <?php if ($error): ?>
      <div class="bg-red-100 text-red-600 px-3 py-2 rounded mb-3">
        <?php echo $error; ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="">
      <div class="mb-4">
        <label class="block text-gray-700 mb-1">Username</label>
        <input type="text" name="username" required
          class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 mb-1">Password</label>
        <input type="password" name="password" required
          class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>

      <button type="submit"
        class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
        Login
      </button>
    </form>
  </div>

</body>
</html>
