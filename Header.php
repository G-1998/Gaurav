<!-- Header Section -->
<header class="bg-blue-600 text-white shadow-md fixed w-full top-0 left-0 z-50">
    <div class="container mx-auto flex justify-between items-center p-4">
        <!-- Logo / Name -->
        <div class="text-2xl font-bold">
            <a href="index.php" class="text-white">Gaurav's Portfolio</a>
        </div>
        
        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-6">
            <a href="#home" class="text-white hover:text-gray-300">Home</a>
            <a href="#about" class="text-white hover:text-gray-300">About</a>
            <a href="#projects" class="text-white hover:text-gray-300">Projects</a>
            <a href="#contact" class="text-white hover:text-gray-300">Contact</a>
        </nav>

        <!-- Mobile Hamburger Menu -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <i class="fas fa-bars"></i> <!-- FontAwesome hamburger icon -->
            </button>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobile-menu" class="md:hidden bg-blue-600 text-white px-4 py-2 space-y-2 hidden">
        <a href="#home" class="block">Home</a>
        <a href="#about" class="block">About</a>
        <a href="#projects" class="block">Projects</a>
        <a href="#contact" class="block">Contact</a>
    </div>
</header>

<script>
    // Toggle Mobile Menu
    const menuToggle = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");
    
    menuToggle.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>
