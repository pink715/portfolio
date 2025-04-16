<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MAMTA  | Designer & Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
      .hero-bg {
        background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
      }
      .card-hover:hover {
        transform: translateY(-4px);
        transition: all 0.3s ease-in-out;
      }
    </style>
  </head>
  <body class="bg-white text-gray-900">
    <!-- Navbar -->
    <nav class="flex justify-between items-center px-10 py-6 shadow-md sticky top-0 bg-white z-50">
      <h1 class="text-2xl font-bold text-blue-600 tracking-tight">Mamta Kumari</h1>
      <ul class="flex gap-8 font-medium text-gray-700">
        <li><a href="#about" class="hover:text-blue-600">About</a></li>
        <li><a href="#work" class="hover:text-blue-600">Work</a></li>
        <li><a href="#contact" class="hover:text-blue-600">Contact</a></li>
      </ul>
    </nav>

    <!-- Hero -->
    <section class="hero-bg py-32 text-center text-white px-4">
      <h2 class="text-5xl font-extrabold leading-tight mb-4">Hi, I'm <span class="text-white">Mamta</span></h2>
      <p class="text-xl max-w-2xl mx-auto">undergraduate student and a passionate learner of Graphic Designing & web development, blending creativity and code to create stunning digital experiences.</p>
    </section>

    <!-- About -->
    <section id="about" class="py-24 px-10 max-w-5xl mx-auto">
      <h2 class="text-4xl font-bold mb-10 text-center">About Me</h2>
      <div class="grid md:grid-cols-2 gap-12">
        <img src="images/profile.png" alt="Profile" class="rounded-3xl shadow-xl" />
        <div class="text-lg text-gray-700">
          <p class="mb-6">I’m a design enthusiast who believes in power of visuals.
             From branding to web interfaces, I love crafting design experiences that are clean, thoughtful and user-focused.</p>
          <p>I also enjoy bringing those designs to life with HTML, CSS, Tailwind, and some JavaScript magic. Currently looking for opportunities to grow and build impactful designs.</p>
        </div>
      </div>
    </section>

    <!-- Work -->
    <section id="work" class="py-24 bg-gray-100 px-10">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold mb-10 text-center">Featured Work</h2>
        <div class="grid md:grid-cols-3 gap-10">
          <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover">
          
            <img src="images/e commerce.png" class="w-full h-56 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2">mini ecommerce website</h3>
              <p class="text-gray-600">minimalist design ecommerce website developed using html css javscript php.</p>
            </div>
          </div>

          <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover">
            <img src="images/save forest.png" class="w-full h-56 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2">Social awareness poster</h3>
              <p class="text-gray-600">poster on save forest inspired by the hyderabas incident</p>
            </div>
          </div>

          <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover">
            <img src="images/branding.png" class="w-full h-56 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2">Branding website</h3>
              <p class="text-gray-600">A website to feature videos and magazine regarding branding minimalist look developed using html css javascript and php</p>
            </div>
          </div>
          <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover">
            <img src="images/red lipstick.png" class="w-full h-56 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2">Poster design for lipstick brand</h3>
              <p class="text-gray-600">creating an vintage style lipstick advertisement poster.</p>
            </div>
          </div>
          <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover">
            <img src="images/journal branding.png" class="w-full h-56 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2">Journaling branding</h3>
              <p class="text-gray-600">developed a brand identityfor a digital journal,including logo,typography and ui design</p>
            </div>
          </div><div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover">
            <img src="images/blog.png" class="w-full h-56 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2">blog website</h3>
              <p class="text-gray-600">early 2000s style blog website developed to serve the y2k aesthetic</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-24 px-10 max-w-4xl mx-auto text-center">
      <h2 class="text-4xl font-bold mb-6">Let’s Work Together</h2>
      <p class="text-lg text-gray-600 mb-8">Whether you have an idea or just want to connect, drop me a message.</p>
      <a href="contact me.php" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold text-lg">Contact Me</a>
    </section>

    <!-- Footer -->
    <footer class="py-8 text-center text-sm text-gray-500 border-t">
      THANKYOU FOR VISITING♥
    </footer>
  </body>
</html>
