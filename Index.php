<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link href="./Stylesheet/style.css" rel="stylesheet">

 <!-- Link to your compiled Tailwind CSS file -->
</head>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="path/to/tailwind.css"> <!-- Link to your Tailwind CSS file -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- FontAwesome for icons -->
</head>
<body class="bg-gray-100 text-gray-800">

    <!--Header section start here-->
    <?php require('Header.php'); ?>

   <!-- Hero Section -->
<section class="bg-blue-600 text-white h-screen flex items-center justify-between px-8 relative">
    <!-- Content -->
    <div class="max-w-md text-center z-10">
        <h1 class="text-5xl font-extrabold mb-4">Hi, I'm Gaurav</h1>
        <p class="text-xl mb-8">A passionate web developer and tech enthusiast.</p>
        <a href="#about" class="bg-white text-blue-600 font-bold py-2 px-6 rounded-full text-lg">Learn More About Me</a>
    </div>

    <!-- Hero Image on the right -->
    <img src="./Images/gaurav.avif" alt="Hero Image" class="w-[100px] h-[100px] object-cover rounded-full shadow-lg">
</section>



    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">About Me</h2>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-8">I am a web developer with a passion for creating clean, efficient, and user-friendly websites. I specialize in front-end development and love learning new technologies.</p>
            <a href="#projects" class="bg-blue-600 text-white font-bold py-2 px-6 rounded-full text-lg">See My Projects</a>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">My Projects</h2>
            <p class="text-lg text-gray-700 mb-12">Here are a few projects I've worked on recently. Feel free to explore!</p>
            
            <!-- Project 1 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg">
                    <img src="path/to/project-image.jpg" alt="Project 1" class="mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Project 1</h3>
                    <p class="text-gray-600 mb-4">Description of the project, the technologies used, and its impact.</p>
                    <a href="project-link.html" class="text-blue-600 font-bold">View Project</a>
                </div>
                <!-- Repeat for other projects -->
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg">
                    <img src="path/to/project-image2.jpg" alt="Project 2" class="mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Project 2</h3>
                    <p class="text-gray-600 mb-4">Description of the project, the technologies used, and its impact.</p>
                    <a href="project-link.html" class="text-blue-600 font-bold">View Project</a>
                </div>
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg">
                    <img src="path/to/project-image3.jpg" alt="Project 3" class="mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Project 3</h3>
                    <p class="text-gray-600 mb-4">Description of the project, the technologies used, and its impact.</p>
                    <a href="project-link.html" class="text-blue-600 font-bold">View Project</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->   
       
    <?php require('Contact.php'); ?>
    
    <!-- Footer Section (Including from footer.php) -->
    <?php include('footer.php'); ?>

</body>
</html>









