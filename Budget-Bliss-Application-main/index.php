<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Bliss - Plan Your Financial Future</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Optional: Add Font Awesome for hamburger icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-gray-50 to-gray-100 font-sans text-gray-800">
    <!-- navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.html" class="text-2xl font-bold text-indigo-600">Budget Bliss</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="login.php" class="text-gray-700 hover:text-indigo-600 transition duration-200">Create</a>
                    <a href="register.php" class="text-gray-700 hover:text-indigo-600 transition duration-200">Register</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 transition duration-200">Examples</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 transition duration-200">Learn</a>
                    <a href="pricing.php" class="text-gray-700 hover:text-indigo-600 transition duration-200">Pricing</a>
                    <!-- <a href="#" class="text-gray-700 hover:text-indigo-600 transition duration-200">Login</a>
                    <a href="#"
                        class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition duration-200">Sign
                        Up Free</a> -->
                </div>

                <!-- Hamburger Menu Button (Visible on Mobile) -->
                <div class="md:hidden flex items-center">
                    <button id="menu-btn" class="text-gray-700 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by Default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <div class="px-4 pt-2 pb-4 space-y-2 ">
                <a href="#" class="block text-gray-700 hover:text-indigo-600 py-2 text-center">Create</a>
                <a href="register.php" class="block text-gray-700 hover:text-indigo-600 py-2 text-center">Register</a>
                <a href="#" class="block text-gray-700 hover:text-indigo-600 py-2 text-center">Examples</a>
                <a href="#" class="block text-gray-700 hover:text-indigo-600 py-2 text-center">Learn</a>
                <a href="pricing.php" class="block text-gray-700 hover:text-indigo-600 py-2 text-center">Pricing</a>
                <!-- <a href="#" class="block text-gray-700 hover:text-indigo-600 py-2 text-center">Login</a>
                <a href="#"
                    class="block bg-indigo-600 text-white text-center px-4 py-2 rounded-full hover:bg-indigo-700 transition duration-200 text-center">Sign
                    Up Free</a> -->
            </div>
        </div>
    </nav>
    <!-- Header Section -->
    <header class="relative bg-gradient-to-r from-indigo-600 to-purple-600 text-white  overflow-hidden">
        <div class="absolute inset-0 opacity-10 py-20">
            <svg class="w-full h-full" fill="none" viewBox="0 0 1200 800">
                <circle cx="600" cy="400" r="500" stroke="white" stroke-width="50" />
            </svg>
        </div>
        <div class="container mx-auto text-center px-4 py-20 relative z-10">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 animate-fadeInUp">Plan Your Financial
                Future</h1>
            <p class="text-lg md:text-2xl mb-8 animate-fadeInUp animation-delay-200">Discover peace of mind with Budget
                Bliss – your simple, stunning budgeting companion.</p>
            <a href="register.php"
                class="bg-white text-indigo-600 font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-indigo-100 transition duration-300 animate-fadeInUp animation-delay-400">Start
                for Free</a>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-900">Why Budget Bliss?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 text-indigo-600">💸</div>
                    <h3 class="text-xl font-semibold mb-2">Effortless Budgeting</h3>
                    <p class="text-gray-600">Set up in minutes – no stress, no hassle.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 text-indigo-600">📈</div>
                    <h3 class="text-xl font-semibold mb-2">Track in Real-Time</h3>
                    <p class="text-gray-600">Watch your spending with crystal clarity.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 text-indigo-600">🔐</div>
                    <h3 class="text-xl font-semibold mb-2">Safe & Secure</h3>
                    <p class="text-gray-600">Your data, locked down with top encryption.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 text-indigo-600">✨</div>
                    <h3 class="text-xl font-semibold mb-2">Clever Insights</h3>
                    <p class="text-gray-600">Smart tips to boost your savings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- hero section -->
    <section class="max-w-7xl mx-auto py-10 my-10">
        <div class="flex justify-center items-center">
            <img src="share budget.png" alt="share budget image" class="bg-cover max-w-full max-h-full rounded-lg">
        </div>
    </section>

    <!-- bugdet planner cover -->
    <section class="max-w-7xl mx-auto py-10 my-10">
        <div class="flex justify-center items-center">
            <img src="budget-planner-cover-new.png" alt="budget planner cover page"
                class="bg-cover max-w-full max-h-full">
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="bg-gray-200 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-900">Three Steps to Financial Bliss</h2>
            <div class="flex flex-col md:flex-row justify-between gap-10">
                <div class="bg-white p-8 rounded-xl shadow-lg text-center flex-1">
                    <div class="text-3xl font-bold text-purple-600 mb-4">01</div>
                    <h3 class="text-xl font-semibold mb-2">Join the Journey</h3>
                    <p class="text-gray-600">Sign up in seconds – it’s free!</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg text-center flex-1">
                    <div class="text-3xl font-bold text-purple-600 mb-4">02</div>
                    <h3 class="text-xl font-semibold mb-2">Set Your Sights</h3>
                    <p class="text-gray-600">Define your income and goals.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg text-center flex-1">
                    <div class="text-3xl font-bold text-purple-600 mb-4">03</div>
                    <h3 class="text-xl font-semibold mb-2">Thrive with Ease</h3>
                    <p class="text-gray-600">Let Budget Bliss lead the way.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="how-it-works" class="bg-gray-200 py-20">
        <div class="container mx-auto px-4">
            <h1 class="font-bold text-4xl md:text-7xl text-center mt-6">Budget Planner Features</h1>
            <p class="text-center text-gray-600 mt-3 px-8 md:px-28 md:text-2xl">With Visme's Budget Planner, enjoy
                various features for effective financial planning. The planner offers customizable visuals to track
                expenses and income, easy-to-use labeling and a drag-and-drop interface. Budgeting has never been this
                straightforward and interactive.</p>
            <div class="flex flex-col mt-7 md:flex-row justify-between gap-10">
                <div class="bg-white p-8 rounded-xl shadow-lg text-center flex-1">
                    <h1 class="font-bold text-2xl md:text-5xl md:mt-14">Fully Customizable Budget Templates</h1>
                    <p class="md:mt-4 text-2xl">Choose from hundreds of customizable budget templates from Visme’s
                        library. Whether you’re a business, a nonprofit or an individual doing monthly, quarterly or
                        yearly budgeting, we have the perfect template for you. With Visme’s budget planner, you can
                        create project folders tailored for different types of budgets, clients, months or years.</p>
                </div>
                <div class="bg-white p-8 rounded-xl h-cover w-full shadow-lg text-center flex-1">
                    <img src="feature 1.png" alt="feature 1 image">
                </div>
            </div>

            <div class="flex flex-col-reverse mt-7 md:flex-row justify-between gap-10">
                <div class="bg-white p-8 rounded-xl h-cover w-full shadow-lg text-center flex-1">
                    <img src="features 2.png" alt="feature 2 image">
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg text-center flex-1">
                    <h1 class="font-bold text-2xl md:text-5xl md:mt-14">Customized Budget Presentation</h1>
                    <p class="md:mt-4 text-2xl">Utilize our customizable tools to tailor your budget template. Adjust
                        the colors, fonts, size, background, tables and more according to your preference. You can use
                        your brand’s theme or choose from the available color and font presets. Additionally, you can
                        align and position the labels, set up hover effects and decide how elements appear with engaging
                        animations.</p>
                </div>
            </div>


        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-900">What Users Are Saying</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-white p-8 rounded-xl shadow-lg border-l-4 border-indigo-500">
                    <p class="italic text-gray-600 mb-4">"Saved $300 in a month – I’m obsessed!"</p>
                    <p class="font-semibold text-indigo-600">– Mia L.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg border-l-4 border-indigo-500">
                    <p class="italic text-gray-600 mb-4">"So easy, even I can budget now."</p>
                    <p class="font-semibold text-indigo-600">– Alex T.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg border-l-4 border-indigo-500">
                    <p class="italic text-gray-600 mb-4">"Finally, financial peace of mind!"</p>
                    <p class="font-semibold text-indigo-600">– Priya S.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Signup Section -->
    <section id="signup" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-4xl font-bold mb-6">Ready to Find Your Budget Bliss?</h2>
            <p class="text-lg mb-8">Join a community of savvy savers today.</p>
            <a href="#"
                class="bg-white text-indigo-600 font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-indigo-100 transition duration-300">Get
                Started Now</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto text-center px-4">
            <p>© 2025 Budget Bliss. Crafted with 💜 for your financial freedom.</p>
        </div>
    </footer>


    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });


    </script>
</body>

</html>