<?php
// Contact Page - ALIGN PEAK PHYSIO
$page_title = "Contact Us - ALIGN PEAK PHYSIO";
include 'includes/navbar.php';
?>
    <script src="https://cdn.tailwindcss.com"></script>

<!-- Contact Hero Section -->
<div class="mt-[108px] pb-20 bg-white">
  <div class="text-3xl md:text-5xl text-white text-center py-10" style="background: linear-gradient(90deg, #2BC2B1 0%, #CF6F80 100%);">
    Contact Us
  </div>
  <div class="flex flex-col px-4 md:px-20 py-10 gap-5">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="border rounded-lg p-3 text-lg md:text-2xl text-center">Book Appointment</div>
      <div class="border rounded-lg p-3 text-lg md:text-2xl text-center">Online Consultation</div>
      <div class="border rounded-lg p-3 text-lg md:text-2xl text-center">Second Opinion</div>
      <div class="border rounded-lg p-3 text-lg md:text-2xl text-center">Home Care</div>
    </div>
    <p class="text-base md:text-xl mt-4 text-center md:text-left">
      Align peak physio is always looking to make things easy for you. Our aim is to provide clients with the best service, constant care and support. If you would like to get in touch with our specialist, want specific information about the service we provide, or just have a question, we're here to help.
    </p>
  </div>
  <div class="relative w-full min-h-screen">
    <img src="./img/contact.png" alt="Team" class="absolute inset-0 w-full h-full object-cover z-0">
    <div class="absolute inset-0 bg-black opacity-50 z-10"></div>
    <div class="relative z-20 flex flex-col lg:flex-row items-center justify-center px-4 py-12 gap-10 min-h-screen">
      <div class="flex flex-col gap-2 text-white text-center lg:text-left max-w-md">
        <div class="text-xl md:text-2xl">WE’D LOVE TO HEAR FROM YOU</div>
        <div class="text-2xl md:text-3xl text-[#FCA930]">Contact Us</div>
        <div class="text-lg md:text-2xl">Reach Us Through</div>
        <div class="text-base md:text-xl">21, Kellys Rd, Kilpauk, Chennai</div>
        <div class="text-base md:text-xl">+91 9566788054, 8939398054, 9894874663</div>
        <div class="text-base md:text-xl">alignpeakphysio@gmail.com</div>
      </div>
      <form action="insert_contact.php" method="post" id="mail" class="w-full max-w-xl backdrop-blur-md bg-white/10 p-6 rounded-xl text-white">
        <div class="flex flex-col gap-5">
          <input type="text" id="name" name="name" placeholder="Full name" class="w-full px-4 py-2 bg-transparent border border-gray-300 rounded-[20px] placeholder-white" required>
          <div class="flex flex-col md:flex-row gap-3">
            <input type="text" id="phone" name="phone" placeholder="Phone Number" class="w-full px-4 py-2 bg-transparent border border-gray-300 rounded-[20px] placeholder-white" required>
            <input type="text" id="city" name="city" placeholder="City" class="w-full px-4 py-2 bg-transparent border border-gray-300 rounded-[20px] placeholder-white" required>
          </div>
          <div class="flex flex-col md:flex-row gap-3">
            <input type="text" id="speciality" name="speciality" placeholder="Speciality" class="w-full px-4 py-2 bg-transparent border border-gray-300 rounded-[20px] placeholder-white" required>
            <input type="email" id="email" name="email" placeholder="Email ID" class="w-full px-4 py-2 bg-transparent border border-gray-300 rounded-[20px] placeholder-white" required>
          </div>
          <input type="text" id="country" name="country" placeholder="Country" class="w-full px-4 py-2 bg-transparent border border-gray-300 rounded-[20px] placeholder-white" required>
          <textarea id="message" name="message" placeholder="Message" rows="3" class="w-full px-4 py-2 bg-transparent border border-gray-300 rounded-[20px] placeholder-white resize-none" required></textarea>
          <button type="submit" class="border rounded-[30px] py-3 bg-[#FCA930] text-white text-lg font-semibold flex justify-center items-center gap-2">
            <svg width="28" height="28" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.625 1.625L8.375 9.875M16.625 1.625L11.375 16.625L8.375 9.875M16.625 1.625L1.625 6.875L8.375 9.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            Send Message
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="flex justify-center items-center mb-10 bg-white">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23347.975408942686!2d80.23777818345056!3d13.083176691149369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265e0e5000005%3A0x58ad50b8a4f573d!2sAlignPeak%20Physio%20Pvt%20Ltd.%2C%20Align%20Peak%20physiotherapy%20Clinic!5e0!3m2!1sen!2sin!4v1748536578261!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!-- <a class="float" href="https://wa.me/919150600006">
  <img src="/whatsapp.gif" class="whatsapp" alt="whatsapp logo">
</a> -->
<?php include 'includes/footer.php'; ?>
