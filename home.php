<!DOCTYPE html>
<html lang="en">
<?php include './templates/header.php' ?> <!-- Header -->

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-3xl sm:text-2xl font-bold mb-4">Welcome to <br /><strong class="text-5xl text-red-400">Ra
                Vachuqo Store</strong><br />Where
            Every Gift Brings a
            Smile!</h1>
        <p class="text-lg sm:text-xl mb-8">Hi there! I'm the proud founder of <br><strong class="text-red-400">Ra
                Vachuqo Store</strong><br>At our
            store, we believe that the perfect gift can brighten anyone's day – and that’s why we’re here! Whether
            you're celebrating a birthday, an anniversary, or just want to show someone you care, we've got
            something special for you.</p>
        <p class="text-lg sm:text-xl mb-8">With over 500 happy customers and counting, our mission is simple: to
            offer unique, thoughtful gifts that make moments unforgettable. We’re committed to growing and bringing
            joy to even more people with our carefully curated selection, all delivered with exceptional service and
            a personal touch.</p>
        <p class="text-lg sm:text-xl mb-8">Thank you for choosing us to be a part of your gifting journey. We can't
            wait to help you find the perfect surprise for someone special (or maybe even yourself!).</p>
        <a href="#best-selling"
            class="inline-block bg-white text-gray-800 px-6 py-3 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300">Start
            Shopping</a>
    </div>
</section>

<!-- Customer Testimonials -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto text-center px-6">
        <h2 class="text-3xl font-semibold mb-8">What Our Customers Are Saying</h2>
        <div class="space-y-8">
            <div class="flex justify-center items-center space-x-4">
                <div class="w-16 h-16 rounded-full bg-gray-300"></div> <!-- customer photo -->
                <div class="text-left">
                    <p class="font-medium">“I found the perfect gift for my sister’s birthday – she loved it! Fast
                        delivery and excellent service. Highly recommend!”</p>
                    <span class="block text-gray-600 mt-2">- Sarah L.</span>
                </div>
            </div>
            <div class="flex justify-center items-center space-x-4">
                <div class="w-16 h-16 rounded-full bg-gray-300"></div> <!-- customer photo -->
                <div class="text-left">
                    <p class="font-medium">“I ordered a personalized gift for my best friend, and it was the
                        highlight of her party! The quality was amazing, and it arrived on time.”</p>
                    <span class="block text-gray-600 mt-2">- Emma T.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Best-Sellers Section -->
<section id="best-selling" class="py-16 bg-gray-100">
    <div class="max-w-5xl mx-auto text-center px-6">
        <h2 class="text-3xl font-semibold mb-8">- Our Best-Selling Gifts -</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <!-- Product 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="./images/galaxy.jpg" alt="Gift Name" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Galaxy Sphere</h3>
                    <p class="text-gray-600 mb-4">59.00 Gel</p>
                    <a href="#"
                        class="inline-block bg-blue-500 text-white px-6 py-2 rounded-full text-sm hover:bg-blue-600 transition duration-300">Add
                        to cart</a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="./images/butterfly_jar.jpg" alt="Gift Name" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Butterfly Jar</h3>
                    <p class="text-gray-600 mb-4">65.00 Gel</p>
                    <a href="#"
                        class="inline-block bg-blue-500 text-white px-6 py-2 rounded-full text-sm hover:bg-blue-600 transition duration-300">Add
                        to cart</a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="./images/astronaut.jpg" alt="Gift Name" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Astronaut</h3>
                    <p class="text-gray-600 mb-4">89.00 Gel</p>
                    <a href="#"
                        class="inline-block bg-blue-500 text-white px-6 py-2 rounded-full text-sm hover:bg-blue-600 transition duration-300">Add
                        to cart</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto text-center px-6">
        <h2 class="text-3xl font-semibold mb-8">Why Choose Us?</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
            <div class="space-y-4">
                <div class="text-blue-500 text-3xl">🎁</div> <!-- Add icon here -->
                <h3 class="text-xl font-semibold">Curated Selection</h3>
                <p class="text-gray-600">We handpick each gift to ensure it's meaningful and high-quality.</p>
            </div>
            <div class="space-y-4">
                <div class="text-blue-500 text-3xl">🚚</div> <!-- Add icon here -->
                <h3 class="text-xl font-semibold">Fast & Reliable Shipping</h3>
                <p class="text-gray-600">Get your gifts delivered quickly, right when you need them.</p>
            </div>
            <div class="space-y-4">
                <div class="text-blue-500 text-3xl">😊</div> <!-- Add icon here -->
                <h3 class="text-xl font-semibold">Customer Satisfaction</h3>
                <p class="text-gray-600">Over 500 happy customers and counting – we take pride in our service!</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-blue-500 text-white text-center">
    <h2 class="text-3xl font-semibold mb-6">Ready to Make Someone's Day?</h2>
    <p class="text-lg mb-6">Browse our handpicked selection of gifts, and find something special for your loved ones
        today!</p>
    <a href="products.php"
        class="inline-block bg-white text-blue-500 px-6 py-3 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300">Explore
        Gifts</a>
</section>


<?php include "./templates/footer.php" ?> <!-- Footer -->

</html>