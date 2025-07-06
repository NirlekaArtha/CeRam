<!DOCTYPE html>
<html lang="en" class="scrollbar-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mochiy+Pop+One&family=Nosifer&display=swap" rel="stylesheet">
    <title>CeRam</title>
    @vite(['resources/css/app.css', 'resources/js/index.js', 'resources/js/toggle-nav-bar.js'])
</head>

<body class="bg-background text-white font-inter overflow-x-hidden">
  <x-navbar />

  <header class="flex w-full flex-col items-center mt-6">
    <h2 class="text-7xl text-accent1 font-creepster text-center">
      {{ $post->title }}
    </h2>
    <h3 class="text-2xl text-white font-mochiy text-center">
      By {{ $post->author }}
    </h3>
    <p class="text-white text-sm font-inknut-antiqua text-center mt-2"> 
      | {{ ($post->created_at)->format('D, d M Y') }} |
    </p>

    <div class="relative w-screen mt-24 mb-24 
                before:w-full before:h-4 sm:before:h-12 md:before:h-24 lg:before:h-32  before:bg-linear-to-b before:from-background before:from-30% before:absolute before:top-0 before:content-[''] before:pointer-events-none
                after:w-full after:h-4 sm:after:h-12 md:after:h-24 lg:after:h-32  after:bg-linear-to-t after:from-background after:from-30% after:absolute after:bottom-0 after:content-[''] after:pointer-events-none">
      <img src="/pictures/{{ $post->image }}" alt="Story's picture" class="w-full aspect-video object-cover">
    </div>
  </header>

  <main class="flex px-8 sm:px-12 md:px-24 lg:px-32  flex-col">
    <article class="text-white">
      {{ $post->content }}
    </article>

    <div class="flex w-full justify-between mb-8 mt-24">
      <div>
        <div class="flex">
          <img src='/pictures/star.svg'>
          <img src='/pictures/star.svg'>
          <img src='/pictures/star.svg'>
          <img src='/pictures/star.svg'>
          <img src='/pictures/star.svg'>
        </div>
        <p>
          {{ $post->rating }}/5 dari {{ $post->votes }} suara
        </p>
      </div>

      <button type="button" class="cursor-pointer hover:scale-110 transition-all duration-300 ease-in-out hover:text-accent2 hover:font-bold ">
        <p class="inline">
          Simpan
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark inline" viewBox="0 0 16 16">
          <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
        </svg>
      </button>
    </div>

  </main>

    <x-footer />
</body>
</html>