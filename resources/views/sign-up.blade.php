<!DOCTYPE html>
<html lang="en" class="scrollbar-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mochiy+Pop+One&family=Nosifer&display=swap" rel="stylesheet">
    <title>CeRam</title>
    @vite(['resources/css/app.css', 'resources/js/password-validator.js'])
</head>

<body class="bg-background flex flex-col items-center justify-center h-screen w-screen font-inter">

  <h3 class="font-nosifer absolute -z-10 text-accent1 text-[208px] xl:text-[232px] lg:rotate-0 rotate-90">
    CERAM
  </h3>
  
  <form class="text-white flex flex-col items-center justify-start gap-6 w-[360px] rounded-md h-fit bg-black/85 py-6 px-12"
        action="{{ route('signUp') }}" method="POST">
  
    @csrf

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2 class="text-4xl font-bold mb-8">
      Sign up
    </h2>

    <input type="text" name="username" id="username" placeholder="Username" required
           class="focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2">
    
    <input type="email" name="email" id="Email" placeholder="email" required
           class="focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2">

    <p id="new-password-message" class="text-sm text-accent1 hidden"></p>
      
    <div class="relative flex items-center">
      <input type="password" name="password" id="new-password" placeholder="password"
          class="password-input focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2">
      <button type="button" class="absolute cursor-pointer top-2.5 right-4 see-password-button">
        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
      </button>
    </div>

    <p id="confirm-password-message" class="text-sm text-accent1 hidden"></p>

    <div class="relative flex items-center">
      <input type="password" name="password_confirmation" id="confirm-password" placeholder="password confirmation"
          class="password-input focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2">
      <button type="button" class="absolute cursor-pointer top-2.5 right-4 see-password-button">
        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
      </button>
    </div>

    <button type="submit" class="w-full bg-accent2 rounded-sm p-2 text-xl font-medium">
      Sign up
    </button>

    <p class="text-sm">
      Sudah punya akun? silahkan <a href="/login" class="text-accent2 hover:underline"> Login </a>
    </p>

  </form>

</body>
</html>