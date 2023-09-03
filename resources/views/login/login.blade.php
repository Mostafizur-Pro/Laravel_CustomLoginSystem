<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS & DaisyUI -->
<link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


    <title>Login Page</title>
</head>
<body>


<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Login now!</h1>
      <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
    </div>
    <form action="{{ route('login-user') }}" method="post" class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
    @if ($errors->any())
    <div class="alert alert-danger bg-orange-200 ">
        <h1>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </h1>
    </div>
@endif
  
    @csrf
      <div class="card-body">
      <input type="email" name="email" placeholder="email" class="input input-bordered" />
      <span class="text-red-400 ">@error('email') {{$message}} @endError</span>  
      <input type="password" name="password" placeholder="password" class="input input-bordered" />
        <span class="text-red-400 ">@error('password') {{$message}} @endError</span>
         
          <label class="label">
            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
          </label>
      
        <div class="form-control mt-6">
          <button class="btn btn-primary">Login</button>
        </div>
        <p>Create new Account! <a class="text-green-400" href="{{url('/register')}}">Please Register</a></p>
      </div>
    </form>
  </div>
</div>
    
</body>
</html>