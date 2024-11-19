<!-- Footer Section -->
<footer class="bg-gray-900 text-white py-8">
    <div class="max-w-7xl mx-auto text-center px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Column 1: Navigation Links -->
        <div class="space-y-4">
            <p class="text-lg font-semibold">Navigation</p>
            <ul class="space-y-2">
                <li><a href="#home" class="hover:text-gray-400">🏠 Home</a></li>
                <li><a href="#products" class="hover:text-gray-400">🛒 Products</a></li>
                <li><a href="#about" class="hover:text-gray-400">ℹ️ About</a></li>
                <li><a href="#contact" class="hover:text-gray-400">📞 Contact</a></li>
            </ul>
        </div>

        <!-- Column 2: Social Media Links (Centered) -->
        <div class="space-y-4 flex flex-col items-center justify-center">
            <p class="text-lg font-semibold">Follow Us</p>
            <ul class="space-y-2 flex flex-col items-center">
                <li><a href="https://www.tiktok.com" class="hover:text-gray-400 flex items-center space-x-2">
                        <ion-icon name="logo-tiktok" class="inline-block text-2xl"></ion-icon>
                        <span>TikTok</span>
                    </a></li>
                <li><a href="https://www.instagram.com" class="hover:text-gray-400 flex items-center space-x-2">
                        <ion-icon name="logo-instagram" class="inline-block text-2xl"></ion-icon>
                        <span>Instagram</span>
                    </a></li>
                <li><a href="./error.php" class="hover:text-gray-400 flex items-center space-x-2">
                        <ion-icon name="logo-facebook" class="inline-block text-2xl"></ion-icon>
                        <span>Facebook</span>
                    </a></li>
                <li><a href="./error.php" class="hover:text-gray-400 flex items-center space-x-2">
                        <ion-icon name="logo-linkedin" class="inline-block text-2xl"></ion-icon>
                        <span>LinkedIn</span>
                    </a></li>
            </ul>
        </div>

        <!-- Column 3: Contact Information -->
        <div class="space-y-4">
            <p class="text-lg font-semibold">Contact Information</p>
            <ul class="space-y-2">
                <li><a href="mailto:ravachuqostore@gmail.com" class="hover:text-gray-400">✉️ Email:
                        ravachuqostore@gmail.com</a></li>
                <li><a href="tel:+1234567890" class="hover:text-gray-400">📞 Telephone: +1 234-567-890</a></li>
                <li><span class="hover:text-gray-400">📍 Location: 123 Store Street, City, Country</span></li>
            </ul>
        </div>
    </div>

    <div class="max-w-7xl mx-auto text-center px-6 mt-8">
        <p class="text-sm">&copy; 2024 Ra Vachuqo Store. All Rights Reserved.</p>
    </div>
</footer>

<script>
    function Menu(e) {
        let list = document.querySelector('ul');

        if (e.name === 'menu') {
            e.name = "close";
            list.classList.add('top-[80px]');
            list.classList.add('opacity-100');
        } else {
            e.name = "menu";
            list.classList.remove('top-[80px]');
            list.classList.remove('opacity-100');
        }
    }

</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>