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
                    <a href="index.php" class="text-2xl font-bold text-indigo-600">Budget Bliss</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="login.php" class="text-gray-700 hover:text-indigo-600 transition duration-200">Create</a>
                    <a href="register.php" class="text-gray-700 hover:text-indigo-600 transition duration-200">Register</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 transition duration-200">Examples</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 transition duration-200">Learn</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 transition duration-200">Pricing</a>
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
                <a href="login.php" class="block text-gray-700 hover:text-indigo-600 py-2 text-center">Create</a>
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
    

    <!-- Features Section -->
    <section id="features" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-900">Simple scalable pricing. No hidden fees. Cancel anytime.</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300  transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 text-indigo-600">💸</div>
                    <h3 class="text-xl font-semibold mb-2">Basic</h3>
                    <p class="text-gray-600">Take it for a test drive. Use it as long as you want.</p>
                    <br>
                    <p class="font-bold">US$0/month</p>
                    <br>
                    <br>
                    <hr>
                    <input type="text" class="border py-6 px-8 border-black my-4 text-center bg-black text-white rounded-md cursor-pointer" placeholder="Create a free account" />
                    <hr>
                    <hr>
                    <hr>
                    <h4>Includes : </h4>
                    <br>
                    <p>✓ Unlimited projects</p>
                    <br>
                    <p>✓ Templates & Design Assets Limited</p>
                    <br>
                    <p>✓ Most Templates</p>
                    <br>
                    <p>✓ Regular Support</p>
                </div>

                <div
                    class="bg-white p-8 rounded-xl shadow-lg border-blue-800 hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 text-indigo-600">🔐</div>
                    <h3 class="text-xl font-semibold mb-2">Starter</h3>
                    <p class="text-gray-600">Gain access to premium features for individual use.</p>
                    <br>
                    <p class="font-bold">US$12.25/month</p>
                    <br>
                    <br>
                    <hr>
                    <input type="text" class="border py-6 px-8 border-black my-4 text-center bg-black rounded-md cursor-pointer" placeholder="Get Started" />
                    <hr>
                    <hr>
                    <hr>
                    <h4>Everything in Basic plus:</h4>
                    <br>
                    <p>✓ All Premium Assets</p> 
                    <br>
                    <p>✓ Full Access to Templates and Assets</p>
                    <br>
                    <p>✓ Download as JPG, PNG, PDF</p>
                    <br>
                    <p>✓ 24/7 Email & Chat Support</p>
                </div>

                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 text-indigo-600">✨</div>
                    <h3 class="text-xl font-semibold mb-2">Pro</h3>
                    <p class="text-gray-600">Unlock more powerful design tools, privacy features, manage your brand, and collaborate as a team.</p>
                    <br>
                    <p class="font-bold">US$24.75/month</p>
                    <br>
                    <br>
                    <hr>
                    <input type="text" class="border py-6 px-8 border-black my-4 bg-black text-white text-center rounded-md cursor-pointer" placeholder="Get Started" />
                    <hr>
                    <h4>Everything in Starter plus:</h4>
                    <br>
                    <p>✓ Download as PPTX, HTML5, Video, & GIF</p>
                    <br>
                    <p>✓ Brand Kit, Analytics, Most Integrations</p>
                    <br>
                    <p>✓ Privacy Controls</p>
                    <br>
                </div>
                
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-4 text-indigo-600">✨</div>
                    <h3 class="text-xl font-semibold mb-2">Enterprise</h3>
                    <p class="text-gray-600">Empower your departments to create with next-level features that ensure brand accuracy, workflow efficiency, project visibility, and more!</p>
                    <br>
                    <p class="font-bold">Custom pricing</p>
                    <br>
                    <br>
                    <hr>
                    <input type="text" class="border py-6 px-8 border-black my-4 bg-black text-white text-center rounded-md cursor-pointer" placeholder="Book A Demo" />
                    <hr>
                    <h4>Everything in Pro plus:</h4>
                    <br>
                    <p>✓ Custom Sub-domain</p>
                    <br>
                    <p>✓ More Project Security & Services</p>
                    <br>
                    <p>✓ Privacy Controls</p>
                    <br>
                    <p>✓ Enhanced Workspace Visibility</p>
                    <br>
                    <p>✓ Personalized Training & Onboarding</p>
                    <br>
                    <p>✓ Single Sign-on (SSO) & 2FA</p>
                    <br>
                    <p>✓ Dedicated Customer Success Manager</p>
                    <br>
                </div>
            </div>
        </div>
    </section>
    

    <!-- How It Works Section -->
    <section id="how-it-works" class="bg-gray-200 py-20">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between gap-10">
                <div class="bg-white flex flex-row  rounded-xl shadow-lg flex-1">
                    <div class="border w-[50%]">
                        <h3 class="p-4 font-extrabold">Student And Educator</h4>
                        <p class="p-2 text-center"> Bliss provide an affordable plans for Student And Teacher.</p>
                        <input type="text" class="border-2 md:mx-8 mx-2 md:my-6 my-3 md:px-6 md:py-4 py-3 rounded-md text-black text-center hover:bg-black hover:text-white cursor-pointer" placeholder="View Pricing">
                    </div>
                    <div class="w-[50%]">
                        <img class="w-full h-full" src="price1.jpg" alt="image1">
                    </div>
                </div>
                <div class="bg-white flex flex-row rounded-xl shadow-lg flex-1">
                    <div class="border w-[50%]">
                        <h3 class="p-4 font-extrabold">Student And Educator</h4>
                        <p class="p-2 text-center"> Bliss provide an affordable plans for Student And Teacher.</p>
                        <input type="text" class="border-2 md:mx-8 mx-2 md:my-6 my-3 md:px-6 md:py-4 py-3 rounded-md text-black text-center hover:bg-black hover:text-white cursor-pointer" placeholder="View Pricing">
                    </div>
                    <div class="w-[50%]">
                        <img class="w-full h-full" src="price2.jpg" alt="image1">
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    <!-- How It Works Section -->
    <section id="how-it-works" class="bg-gray-200 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-900">Testimonials</h2>
            <div class="grid md:grid-cols-3 grid-cols-1 justify-between gap-10">
                <div class="bg-white p-8 rounded-xl shadow-lg flex-1">
                    <p class="font-semibold text-center m-4">At the Broncos, we recommend Budget Bliss to other teams, or organizations looking for a one-stop shop to create internal and external collateral. Plus the customer service is unmatched!</p>
                    <h3 class="font-bold">Matt Swiren</h3>
                    <p class="">Manager of Partnership Marketing, Denver Broncos</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg flex-1">
                    <p class="font-semibold text-center m-4">Our relationship with Budget Bliss has been amazing since day one. Their responsiveness to our needs and long term plans have helped us use their solutions even more intensively and to the success of our clients needs.</p>
                    <h3 class="font-bold">Hubert Janowski</h3>
                    <p class="">Digital Marketer, IBM</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg flex-1">
                    <p class="font-semibold text-center m-4">Budget Bliss is Easy, clean and creative. Great way to show data to engage my teams.</p>
                    <h3 class="font-bold ">JOYCE BRANDAO</h3>
                    <p class="">Senior HR Manager, Schneider Electric</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg flex-1">
                    <p class="font-semibold text-center m-4">We used to make all our presentations with Power Point and then upload them to our web site where they could be viewed. Once we discovered that with Visme Power Point is now a distant memory for us. Thanks Budget Bliss for simplifying our process!!!</p>
                    <h3 class="font-bold">Tina Frost</h3>
                    <p class="">Director of Internal Development</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg flex-1">
                    <p class="font-semibold text-center m-4">We looked at a number of different solutions and Budget Bliss had, by far, the broadest set of features at such a reasonable price point. We noticed the extra touches in our content and so did our customers.</p>
                    <h3 class="font-bold">Rachel Adams</h3>
                    <p class="">Dynamics Implementer, Sunrise Technologies</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg flex-1">
                    <p class="font-semibold text-center m-4">As a small non-profit with limited funds SWITCH requires high value services at a low price point; Budget Bliss allows us to create outstanding promotional pieces and presentations at an exceptional value!</p>
                    <h3 class="font-bold">Karen Cederwall</h3>
                    <p class="">Executive Director</p>
                </div>
            </div>
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