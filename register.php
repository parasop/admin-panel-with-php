<html>
        <head>

        <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body>

        <form method="POST" action="save.php">
  <div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white py-6 rounded-md px-10 max-w-lg shadow-md">
      <h1 class="text-center text-lg font-bold text-gray-500">Geetanjali College</h1>
      <div class="space-y-4 mt-6">
        <div class="w-full">
          <input name="name" type="text" placeholder="fullname" class="px-4 py-2 bg-gray-50" required />
        </div>
        <div class="w-full">
          <input name="username" type="text" placeholder="username" class="px-4 py-2 bg-gray-50" required />
        </div>
        <div class="w-full">
          <input name="email"type="text" placeholder="email" class="px-4 py-2 bg-gray-50" required />
        </div>
        <div class="w-full">
          <input name="password" type="text" placeholder="password" class="px-4 py-2 bg-gray-50" required />
        </div>
      </div>
      <button class="w-full mt-5 bg-indigo-600 text-white py-2 rounded-md font-semibold tracking-tight">Register</button>
    <?php
           error_reporting(0);
          if($_GET['error']){

              echo "<p class='text-red-500'>Email already exists</p>";
             }




      ?>
       </div>
   
  </div>
</form>





        </body>














</html>
