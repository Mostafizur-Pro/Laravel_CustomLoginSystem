<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS & DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

    <title>Register Page</title>
</head>
<body>


<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Registration now!</h1>
      <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
    </div>
    <form action="{{ route('register-user') }}" method="post" class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        @csrf
      <div class="card-body">
      <input type="text" name="name" placeholder="name" class="input input-bordered" />
        <input type="email" name="email" placeholder="email" class="input input-bordered" />
        <input type="password" name="password" placeholder="password" class="input input-bordered" />

        <div class="form-control mt-6">
          <button class="btn btn-primary">Sighup</button>
        </div>
        <p>Already have an account ! <a class="text-green-400" href="{{url('/login')}}">Please Login</a></p>
      </div>
    </form>
  </div>
</div>
</body>
</html>