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

    <header class="flex flex-col gap-8 w-full h-56 items-center justify-between px-8 md:px-16 lg:px-24 mt-6">
        <div class="flex relative w-full max-w-96 justify-center items-center min-h-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-list text-accent1 absolute left-2" stroke="currentColor" stroke-width="0.5" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
            
            <input type="search" placeholder="Cari judul cerita" class="bg-white h-full pl-8 text-accent1 focus:outline-none placeholder:text-[12px] text-[12px] justify-center w-full rounded-full">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-search text-accent1 absolute right-2" stroke="currentColor" stroke-width="0.5" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </div>

        <h2 class="font-mochiy text-4xl text-center flex flex-col gap-2">
            102 cerita siap membuatmu
            <span class="block font-creepster text-7xl text-accent1">
                MERINDING
            </span>
        </h2>
    </header>

    <main class="relative w-screen px-8 md:px-16 lg:px-24 mt-32">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 w-full place-items-center mb-8">
            @for ($index = 1; $index <= 8; $index++)
                {{-- Uncomment the following line to use the dynamic card component with data from the $post variable --}}
                {{-- Assuming $posts is an array of post objects passed to the view --}}
                {{-- @php $post = $posts[$index]; @endphp --}}
                {{-- <x-card 
                    image="{{ $post->image }}" 
                    title="{{ $post->title }}" 
                    desc="{{ $post->description }}" 
                    rating="{{ $post->rating }}" 
                    votes="{{ $post->votes }}" 
                    date="{{ $post->created_at->format('d M Y') }}" 
                    link="{{ route('posts.show', ['id' => $post->id]) }}"
                /> --}}

                <x-card title="Sweet Lady" 
                        desc="lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque alias. Lorem ipsum dolor sit amet."
                        image="scary5.jpg"
                        rating="4.9"
                        votes="409"
                        date="May, 20th 2023"
                        link="https://www.laravel.com"/>

                <x-card title="The Butcher" 
                        desc="lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque alias. Lorem ipsum dolor sit amet."
                        image="scary4.jpg"
                        rating="4.9"
                        votes="409"
                        date="May, 20th 2023"
                        link="https://www.laravel.com"/>

                <x-card title="Foggy Cabin" 
                        desc="lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque alias. Lorem ipsum dolor sit amet."
                        image="scary1.jpg"
                        rating="4.9"
                        votes="409"
                        date="May, 20th 2023"
                        link="https://www.laravel.com"/>

                <x-card title="The Rising" 
                        desc="lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque alias. Lorem ipsum dolor sit amet."
                        image="scary3.jpg"
                        rating="4.9"
                        votes="409"
                        date="May, 20th 2023"
                        link="https://www.laravel.com"/>
            @endfor

        </div>
    </main>

    <x-footer />
</body>
</html>