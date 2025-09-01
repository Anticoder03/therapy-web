<style>
  body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }
  main {
    flex: 1; /* pushes footer down */
  }
</style>

<!-- Your Page Content -->
<main>
  <!-- Your content goes here -->
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 py-6">
  <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-center md:text-left space-y-4 md:space-y-0">
    
    <!-- Copyright Section -->
    <div>
      <p class="text-sm">&copy; <?php echo date("Y"); ?> All rights reserved.</p>
      <p class="text-sm">Designed & Developed by <span class="font-semibold text-white">Anticoder03</span></p>
    </div>
    
    <!-- Support Section -->
    <div>
      <p class="text-sm font-semibold text-white">Need Support?</p>
      <p class="text-sm">
        📧 Email: 
        <a href="mailto:ap5381545@gmail.com" class="text-blue-400 hover:underline">
          ap5381545@gmail.com
        </a>
      </p>
    </div>

  </div>
</footer>
