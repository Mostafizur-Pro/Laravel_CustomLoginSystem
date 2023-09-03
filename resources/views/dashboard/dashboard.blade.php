<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS & DaisyUI -->
<link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


    <title>Dashboard Page</title>
</head>
<body>


<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Welcome to Dashboard!</h1>
      <hr/>
      <div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
    
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr class="bg-base-200">
        <th>{{$data->name}}</th>
        <th>{{$data->email}}</th>
        <th><a href="logout">Logout</a></th>
     
      </tr>
  
      
    </tbody>
  </table>
</div>
     
      <!-- <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p> -->
    </div>
    
  </div>
</div>
    
</body>
</html>