 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <script src="https://cdn.tailwindcss.com"></script>
 </head>

 <body class="bg-gray-200 flex  justify-center item-center w-full">

     <div class="login w-[500px] p-8 shadow-lg bg-white mt-10 flex flex-col gap-4 rounded-xl">
        <form action="" method="post">
             <div class="field">
                 <label for="name">Name</label>
                 <input type="text" name="name" class="p-3 border w-full">
             </div>
             <div class="field">
                 <label for="email">Email</label>
                 <input type="text" name="email" class="p-3 border w-full">
             </div>
             <div class="field">
                 <label for="phone">Phone</label>
                 <input type="text" name="phone" class="p-3 border w-full">
             </div>
             <div class="field">
                 <button class="py-3 text-white px-5 bg-red-500 rounded-sm">Login</button>
             </div>
        </form>
     </div>


 

 </body>

 </html>