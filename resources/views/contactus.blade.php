<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <title>TalentLink Hub</title>
  <style>
    nav {
            background-color: #84A4FC;
        }
    .gradient {
            background: linear-gradient(to bottom, #84A4FC, #A084FC, #84A4FC);
        }
  </style>
</head>

<body class=" font-sans gradient">
<nav class="text-white py-5 px-10">
  <div class ="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
  <div class="flex flex-shrink-0 items-center">
  <img src="logo.webp" class="h-14 w-auto" alt="logo">
    </div>
    <div class="hidden sm:ml-auto sm:block">
      <div class="flex space-x-4">
      <a href="/" class="text-black hover:text-white hover:bg-indigo-700 rounded-md px-3 py-2 text-m font-medium" aria-current="page"><b>HOME</b></a>
      
      <a href="/aboutus" class="text-black hover:text-white hover:bg-indigo-700 rounded-md px-3 py-2 text-m font-medium" aria-current="page"><b>ABOUT US</b></a>
      <a href="/contactus" class="text-black hover:text-white hover:bg-indigo-700 rounded-md px-3 py-2 text-m font-medium" aria-current="page"><b>CONTACT US</b></a> 
    </div>
 </div>
</div>
</nav>


<!-- resources/views/contact.blade.php -->


<div class="container mx-auto py-8">
      
        
        <!-- Contact Form -->
        <form method="POST" class="max-w-lg mx-auto">
            
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Your Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Your Message" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <button type="submit" class="bg-indigo-700 hover:bg-indigo-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Send Message
            </button>
        </form>
    </div>



    <footer class="bg-gray-800 text-white p-8">
<div class="container mx-auto">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
  <div>
    <h3 class="text-lg font-bold mb-4">Contact Us</h3>
    <p>Email: info@talentlinkhub.com</p>
    <p>Phone: +9478390278</p>
    </div>
  </div>
  <div class="mt-8 text-center">
    <p>&copy; 2024 TalentLink hub.All rights reserved.</p>
  </div>
</footer>
</body>
</html>