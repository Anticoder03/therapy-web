<?php
// FAQ Section Component for ALIGN PEAK PHYSIO
?>

<section class="py-20 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-2">Frequently Asked Questions (FAQ)</h2>
        <p class="text-xl text-gray-900 mb-8">
            Here are some of the most commonly asked questions about physiotherapy, medical care, diet & nutrition, strength and conditioning, and more — to help you better understand our services and how we can support your health journey.
        </p>
    </div>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="faq-list" class="space-y-6">
            <!-- FAQ 1 -->
            <div class="border rounded-xl bg-white overflow-hidden">
                <button type="button" class="w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-left focus:outline-none faq-toggle">
                    <span>1. What services does Align Peak Physio offer?</span>
                    <span class="ml-4 transition-transform duration-300 text-pink-600"><svg class="w-7 h-7 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg></span>
                </button>
                <div class="faq-answer px-6 pb-5 text-gray-700 hidden">
                    We offer a wide range of physiotherapy services including manual therapy, chiropractic care, sports rehab, pediatric and geriatric physiotherapy, strength & conditioning, diet & nutrition, and more.
                </div>
            </div>
            <!-- FAQ 2 -->
            <div class="border rounded-xl bg-white overflow-hidden">
                <button type="button" class="w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-left focus:outline-none faq-toggle">
                    <span>2. Do I need a referral to see a physiotherapist or chiropractor?</span>
                    <span class="ml-4 transition-transform duration-300 text-pink-600"><svg class="w-7 h-7 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg></span>
                </button>
                <div class="faq-answer px-6 pb-5 text-gray-700 hidden">
                    No referral is needed. You can book an appointment directly with us for any of our services.
                </div>
            </div>
            <!-- FAQ 3 -->
            <div class="border rounded-xl bg-white overflow-hidden">
                <button type="button" class="w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-left focus:outline-none faq-toggle">
                    <span>3. Do you offer online consultations?</span>
                    <span class="ml-4 transition-transform duration-300 text-pink-600"><svg class="w-7 h-7 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg></span>
                </button>
                <div class="faq-answer px-6 pb-5 text-gray-700 hidden">
                    Yes, we offer secure and convenient online consultations for many of our services. Please contact us to check availability.
                </div>
            </div>
            <!-- FAQ 4 -->
            <div class="border rounded-xl bg-white overflow-hidden">
                <button type="button" class="w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-left focus:outline-none faq-toggle">
                    <span>4. What should I bring to my first appointment?</span>
                    <span class="ml-4 transition-transform duration-300 text-pink-600"><svg class="w-7 h-7 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg></span>
                </button>
                <div class="faq-answer px-6 pb-5 text-gray-700 hidden">
                    Please bring any relevant medical records, a list of medications, and wear comfortable clothing suitable for movement and assessment.
                </div>
            </div>
            <!-- FAQ 5 -->
            <div class="border rounded-xl bg-white overflow-hidden">
                <button type="button" class="w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-left focus:outline-none faq-toggle">
                    <span>5. Do you offer home visits?</span>
                    <span class="ml-4 transition-transform duration-300 text-pink-600"><svg class="w-7 h-7 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg></span>
                </button>
                <div class="faq-answer px-6 pb-5 text-gray-700 hidden">
                    Yes, we provide home care physiotherapy for patients who are unable to visit our clinic.
                </div>
            </div>
            <!-- FAQ 6 -->
            <div class="border rounded-xl bg-white overflow-hidden">
                <button type="button" class="w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-left focus:outline-none faq-toggle">
                    <span>6. How do I book an appointment for clinic, online, or home visit?</span>
                    <span class="ml-4 transition-transform duration-300 text-pink-600"><svg class="w-7 h-7 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg></span>
                </button>
                <div class="faq-answer px-6 pb-5 text-gray-700 hidden">
                    You can book an appointment by calling us, using our website contact form, or messaging us on WhatsApp. We will guide you through the process.
                </div>
            </div>
        </div>
    </div>
    <script>
    // FAQ expand/collapse logic
    document.addEventListener('DOMContentLoaded', function() {
        const toggles = document.querySelectorAll('.faq-toggle');
        toggles.forEach(btn => {
            btn.addEventListener('click', function() {
                const answer = this.parentElement.querySelector('.faq-answer');
                const icon = this.querySelector('svg');
                if (answer.classList.contains('hidden')) {
                    // Close all others
                    document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
                    document.querySelectorAll('.faq-toggle svg').forEach(i => i.classList.remove('rotate-90'));
                    // Open this one
                    answer.classList.remove('hidden');
                    icon.classList.add('rotate-90');
                } else {
                    answer.classList.add('hidden');
                    icon.classList.remove('rotate-90');
                }
            });
        });
    });
    </script>
</section>
