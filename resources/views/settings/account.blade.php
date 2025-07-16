<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mochiy+Pop+One&family=Nosifer&display=swap" rel="stylesheet">
    <title>CeRam</title>
    @vite(['resources/css/app.css', 'resources/js/toggle-nav-bar.js', 'resources/js/input-file-handler.js', 'resources/js/remove-profile-picture.js'])
</head>

<body class="bg-background text-white font-inter overflow-x-hidden flex w-screen h-screen">
  <x-settings-nav-bar />

  <button type="button" id="hamburger-menu" class="z-0 md:hidden absolute top-4 left-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
    </svg>
  </button>

  <main class="py-16 px-4 sm:px-20 flex-1 w-screen h-screen">
    <form action="{{ route('settings.update-profile') }}" method="POST">
      @csrf
      @method("PUT")
      <div class="flex w-full justify-start">
        <img src="../../pictures/profil-ceram.jpg" alt="profile-pict" id="preview-image"
            class="w-32 h-32 rounded-full border-4 border-accent1/15">
        
        <p id="file-name" class="hidden" > </p>

        <div class="flex flex-col gap-4 justify-center ml-4">
          {{-- <button type="button" class="cursor-pointer flex justify-center items-center gap-2 w-24 py-2 border rounded-md text-accent2 border-accent2">

          </button> --}}
            <!-- Input file dengan ikon -->
          <label
            for="image-input"
            class="cursor-pointer flex justify-center items-center gap-2 w-24 py-2 border rounded-md text-accent2 border-accent2"
          >
          
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
              stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
              <circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline>
            </svg>
            <p class="text-sm">
              Ubah
            </p>
            <input id="image-input" name="image" type="file" accept=".png,.jpg,.jpeg,.webp" class="opacity-0 absolute" {{ request()->is('posts/create') ? 'required' : '' }}/>
          </label>

          <button type="button" id="delete-button" class="cursor-pointer flex justify-center items-center gap-2 w-24 py-2 border rounded-md text-accent1 border-accent1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
              stroke-linecap="round" stroke-linejoin="round">
              <polyline points="3 6 5 6 21 6"></polyline>
              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
            <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
            </svg>
            <p class="text-sm">
              Hapus
            </p>
          </button>
        </div>

      </div>

      <div class="w-full mt-10">
          <div class="grid lg:grid-cols-2 grid-cols-1 gap-16">

            <div class="flex flex-col gap-1">
              <label for="username" class="text-xl font-medium">
                Username
              </label>
      
              <input type="text" name="username" id="username" placeholder="Username" value="{{ $profile->username }}"
                class="focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2 mb-8">
      
              <label for="Email" class="text-xl font-medium">
                Email
              </label>
      
              <input type="text" name="Email" id="Email" placeholder="Email" value="{{ $profile->email }}"
                class="focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2">
            </div>
            
            <div class="flex flex-col h-full">
              <label for="Deskripsi" class="text-xl font-medium mb-1">
                Deskripsi
              </label>
      
              <textarea name="Deskripsi" id="Deskripsi" placeholder="Deskripsi"
                class="focus:outline-none border-[1.5px] border-white/75 rounded-sm w-full p-2 flex-1 min-h-32">Hello there!</textarea>
            </div>

          </div>

          <div class="flex gap-8 mt-12">
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
          
      </div>
    </form>
  </main>
</body>
</html>