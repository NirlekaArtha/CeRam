<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mochiy+Pop+One&family=Nosifer&display=swap" rel="stylesheet">
    <title>CeRam</title>
    @vite(['resources/css/app.css', 'resources/js/toggle-nav-bar.js'])
</head>

<body class="bg-background text-white font-inter overflow-x-hidden flex w-screen h-screen">

    <x-settings-nav-bar />

  <button type="button" id="hamburger-menu" class="z-0 md:hidden absolute top-4 left-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
    </svg>
  </button>

  <main class="py-16 px-4 sm:px-20 w-full md:w-[80%] h-screen">
    <h2 class="text-3xl font-medium mb-8 top-16">
      Cerita yang anda buat
    </h2>
    <div class="overflow-y-scroll md:overflow-y-hidden md:overflow-x-scroll h-fit pb-8 custom-scrollbar">
      <div class="flex md:flex-row items-center md:items-start flex-col gap-4 w-full h-fit md:w-fit md:h-full">
  
          @foreach ($yourStories as $post)

            <x-card 
                image="{{ $post->image }}" 
                title="{{ $post->title }}" 
                desc="{{ Str::limit($post->content, 100) }}" 
                rating="{{ $post->rating }}" 
                votes="{{ $post->votes }}" 
                date="{{ $post->created_at->format('d M Y') }}" 
                link="{{ route('posts.show', ['post' => $post->slug]) }}"
            />

          @endforeach

        </div>
      </div>
    </div>
  </main>
</body>
</html>