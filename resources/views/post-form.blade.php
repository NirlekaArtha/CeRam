<!DOCTYPE html>
<html lang="en" class="scrollbar-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mochiy+Pop+One&family=Nosifer&display=swap" rel="stylesheet">
    <title>CeRam</title>
    @vite(['resources/css/app.css', 'resources/js/index.js', 'resources/js/toggle-nav-bar.js', 'resources/js/input-file-handler.js'])
</head>

<body class="bg-background text-white font-inter overflow-x-hidden">
    <x-navbar />

    <header class="flex flex-col w-full h-fit items-center justify-between px-8 md:px-16 lg:px-24 mt-6 mb-32">
        <h2 class="font-mochiy text-4xl text-center flex flex-col gap-2 text-accent1">
            Formulir upload cerita
        </h2>
    </header>

    @if($errors->any())
        <div class="bg-red-500 text-white p-4 rounded-md mb-8 mx-8 md:mx-16 lg:mx-24">
            <ul>
                @foreach($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <main class="relative w-full px-8 md:px-16 lg:px-24 overflow-x-hidden">
        <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(!request()->is('posts/create'))
                @method('PUT')
            @endif
            <div class="flex flex-col gap-4 mb-8">
                <label for="title" class="text-xl font-semibold">Judul Cerita</label>
                <input value="{{ old('title', $post->title) }}" type="text" id="title" name="title" class="w-full h-12 px-4 bg-white rounded-md text-accent1dark placeholder:text-accent1dark/50 focus:outline-none focus:ring-2" placeholder="Masukkan judul cerita" required>
            </div>

            <div class="flex flex-col gap-4 mb-8">
                <label for="content" class="text-xl font-semibold">Isi Cerita</label>
                <textarea id="content" name="content" rows="10" class="w-full p-4 bg-white rounded-md text-accent1dark placeholder:text-accent1dark/50 focus:outline-none focus:ring-2" placeholder="Masukkan isi cerita" required>{{ old('content', $post->content) }}</textarea>
            </div>

            <div class="flex flex-col gap-2">
                <!-- Input file dengan ikon -->
                <label
                  for="image-input"
                  class="flex items-center gap-2 px-4 py-2 rounded-lg cursor-pointer border border-[--color-accent2] text-[--color-accent2] hover:bg-[--color-accent2] hover:text-white transition-colors duration-300"
                >
                  <!-- Icon Foto -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                    <polyline points="21 15 16 10 5 21"></polyline>
                  </svg>
              
                  <!-- Icon Upload -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="17 8 12 3 7 8"></polyline>
                    <line x1="12" y1="3" x2="12" y2="15"></line>
                  </svg>
              
                  <span class="font-medium">Upload Gambar</span>
                  <input id="image-input" name="image" type="file" accept=".png,.jpg,.jpeg,.webp" class="opacity-0 absolute" {{ request()->is('posts/create') ? 'required' : '' }}/>
                </label>
              
                <!-- Nama file -->
                <div id="file-name" class="text-sm text-[--color-accent2]"></div>
              
                <!-- Preview gambar -->
                <div class="mt-2">
                  <!-- Gambar akan muncul di sini -->
                  <img id="preview-image" alt="Preview Gambar" src="/storage/{{ $post->image }}" class="mt-1 w-full rounded-lg border border-[--color-accent2] {{ request()->is('posts/create') ? 'hidden' : '' }}" />
                </div>
            </div>

            <div class="text-white mt-8 p-4 rounded-lg w-fit">
                <label class="block font-semibold text-lg mb-2">Categories <span class="text-sm text-accent1/80">*(min: 1, max 3)</span> </label>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-16 gap-y-2">

                  @foreach ($allCategories as $category)
                  
                    <label class="flex items-center gap-2">
                      <input type="checkbox" name="categories[]" value="{{ $category }}" class="accent-[--color-accent2]" 
                            {{ in_array($category, old('categories', $post->categories->pluck('name')->toArray())) ? 'checked' : '' }}/>
                      <span>{{ $category }}</span>
                    </label>

                  @endforeach
                </div>
            </div>
              

            <button type="submit" class="w-full h-12 bg-accent1 text-white rounded-md hover:bg-accent1/80 font-semibold mt-8 transition duration-300">Kirim Cerita</button>
        </form>
    </main>

    <x-footer />
</body>
</html>