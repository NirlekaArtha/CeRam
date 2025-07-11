<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mochiy+Pop+One&family=Nosifer&display=swap" rel="stylesheet">
    <title>CeRam</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-background flex flex-col items-center justify-center h-screen w-screen font-inter">

  <h3 class="font-nosifer absolute -z-10 text-accent1 text-[208px] xl:text-[232px] lg:rotate-0 rotate-90">
    CERAM
  </h3>
  
  <form class="text-white flex flex-col items-center justify-start gap-6 w-[360px] rounded-md h-[480px] bg-black/85 py-6 px-12">
    
    <h2 class="text-3xl font-bold mb-8">
      Account recovery
    </h2>

    <input type="text" name="username-email" id="username-email" placeholder="Username/Email" 
           class="focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2">

    <p class="text-xs mb-8">
      Jika akun dengan username/email ada di 
      database, email permintaan reset password akan
      dikirimkan ke email yang terdaftar 
    </p>

    <button type="submit" class="w-full bg-accent2 rounded-sm p-2 text-xl font-medium">
      Send request
    </button>

    <p class="text-sm">
      Belum punya akun? silahkan <a href="signup.html" class="text-accent2 hover:underline"> SignUp </a>
    </p>

  </form>

</body>
</html> 