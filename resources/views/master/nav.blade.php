   <!-- Navbar -->
   <nav class="flex flex-col md:flex-row bg-blue-900 text-white w-full">
    <div class="px-5 xl:px-12 py-6 flex items-center justify-between">
        <a class="text-3xl font-bold font-heading" href="#">
            HIREME
        </a>
        <!-- Responsive burger menu button -->
        <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    <!-- Navbar links -->
    <div id="nav-links" class="hidden md:flex md:items-center md:space-x-4 justify-center w-full">
        <a class="hover:text-gray-200" href="#">Home</a>
        <a class="hover:text-gray-200" href="#">Add Service</a>
        <a class="hover:text-gray-200" href="#">About</a>
        <a class="hover:text-gray-200" href="#">Contact Us</a>
    </div>
    <!-- Sidebar menu for small screens -->
    <div id="sidebar"
        class="hidden md:hidden fixed top-0 left-0 h-full w-full bg-blue-900 text-white transition-transform transform -translate-x-full">
        <div class="flex flex-col items-center space-y-4 mt-16">
            <a class="hover:text-gray-200" href="#">Home</a>
            <a class="hover:text-gray-200" href="#">Add Service</a>
            <a class="hover:text-gray-200" href="#">About us</a>
            <a class="hover:text-gray-200" href="#">Contact Us</a>
        </div>
    </div>
</nav>