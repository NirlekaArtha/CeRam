<!DOCTYPE html>
<html lang="en" class="scrollbar-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mochiy+Pop+One&family=Nosifer&display=swap" rel="stylesheet">
    <title>CeRam</title>
    @vite(['resources/css/app.css', 'resources/js/index.js'])
</head>

<body class="bg-background flex flex-col items-center justify-center h-screen w-screen font-inter">

  <h3 class="font-nosifer absolute -z-10 text-accent1 text-[208px] xl:text-[232px] lg:rotate-0 rotate-90">
    CERAM
  </h3>
  
  <form class="text-white flex flex-col items-center justify-start gap-6 w-[360px] rounded-md h-[480px] bg-black/85 py-6 px-12"
        action="{{ route('login') }}" method="POST">
    
    @csrf
    
    <h2 class="text-4xl font-bold mb-8">
      Login
    </h2>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <input type="text" name="usernameOrEmail" id="username" placeholder="Username or Email" required
           class="focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2">

    <input type="password" name="password" id="password" placeholder="Password" required
           class="focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2">

    <a href="account-recovery.html" class="text-accent2 hover:underline text-sm">
      Lupa password?
    </a>

    <button type="submit" class="w-full bg-accent2 rounded-sm p-2 text-xl font-medium">
      Login
    </button>

    <p class="text-sm">
      Belum punya akun? silahkan <a href="/sign-up" class="text-accent2 hover:underline"> Sign Up </a>
    </p>

  </form>

</body>
</html>