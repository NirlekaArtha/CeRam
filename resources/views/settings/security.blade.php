<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mochiy+Pop+One&family=Nosifer&display=swap" rel="stylesheet">
    <title>CeRam</title>
    @vite(['resources/css/app.css', 'resources/js/toggle-nav-bar.js', 'resources/js/password-validator.js'])
</head>

<body class="bg-background text-white font-inter overflow-x-hidden flex w-screen h-screen">

    <x-settings-nav-bar />

  <button type="button" id="hamburger-menu" class="z-0 md:hidden absolute top-4 left-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
    </svg>
  </button>

  <main class="py-16 px-4 sm:px-20 flex-1 w-screen h-screen overflow-y-scroll">
    <div class="h-fit w-full">
      <h2 class="text-3xl font-semibold mb-12">
        Ubah password
      </h2>
  
      <form action="{{ route('settings.update-security') }}" method="POST">
        @csrf
        @method('PUT')
        <label for="current-password" class="text-xl font-medium">
          Password saat ini
        </label>
  
        <p id="current-password-message" class="text-sm text-accent1 mb-4"></p>
  
        <div class="relative flex items-center">
          <input type="password" name="current-password" id="current-password" placeholder="current-password"
              class="password-input focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2 mb-8">
          <button type="button" class="absolute cursor-pointer top-2.5 right-4 see-password-button">
            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </button> 
        </div>
  
        <label for="new-password" class="text-xl font-medium">
          Password baru
        </label>
  
        <p id="new-password-message" class="text-sm text-accent1 mb-4"></p>
  
        <div class="relative flex items-center">
          <input type="password" name="password-baru" id="new-password" placeholder="password-baru"
              class="password-input focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2 mb-8">
          <button type="button" class="absolute cursor-pointer top-2.5 right-4 see-password-button">
            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </button>
        </div>
  
        <label for="confirm-password" class="text-xl font-medium">
          Masukan kembali password baru 
        </label>
  
        <p id="confirm-password-message" class="text-sm text-accent1 mb-4"></p>
  
        <div class="relative flex items-center">
          <input type="password" name="confirm-password" id="confirm-password" placeholder="confirm-password"
              class="password-input focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2 mb-8">
          <button type="button" class="absolute cursor-pointer top-2.5 right-4 see-password-button">
            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </button>
        </div>
  
        <div class="flex gap-8 mt-8">
          <button type="reset" class="cursor-pointer flex justify-center items-center gap-2 w-32 py-2 border rounded-md text-accent2 border-accent2">
            <p class="text-sm">
              Batalkan
            </p>
          </button>
          <button type="submit" class="cursor-pointer flex justify-center items-center gap-2 w-32 py-2 border rounded-md bg-accent2 border-accent2">
            <p class="text-sm">
              Perbarui
            </p>
          </button>
        </div>
  
      </form>
  

      <h2 class="text-3xl font-semibold mt-32 mb-2">Log out & removal</h2>

      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <p>
          Logout akan mengeluarkan anda dari akun.
          Hapus akun akan menghapus akun anda 
          <span class="text-accent1">selamanya</span>
        </p>

        <div class="flex gap-8 mt-8">
          <button type="submit" class="cursor-pointer flex justify-center items-center gap-2 w-32 py-2 border rounded-md text-accent1 border-accent1">
            <p class="text-sm">
              Hapus akun
            </p>
          </button>
          <button type="submit" class="cursor-pointer flex justify-center items-center gap-2 w-32 py-2 border rounded-md bg-accent1 border-accent1">
            <p class="text-sm">
              Log out
            </p>
          </button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>