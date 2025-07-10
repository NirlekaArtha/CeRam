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

    
    <x-navbar>
        
    </x-navbar>

    <header class="flex w-full justify-between px-8 md:px-16 lg:px-24 mt-6">
        <div>
            <h2 class="font-creepster text-accent1 text-8xl">
                Cerita Seram
            </h2>

            <p class="text-2xl mt-6">
                Kumpulan cerita seram yang siap membuat 
            </p>
            <p class="text-2xl ">
                bulu kudukmu MERINDING!!!
            </p>

            <a href="{{ route('posts.index') }}" class="mt-12 block bg-accent2 w-40 py-3 text-center font-semibold rounded-xs">
                Baca Sekarang
            </a>
        </div>

        <div>
            <img    src="pictures/hero pict.png" 
                    alt="Hero Picture Desu"
                    class="w-96 hidden md:block"
            >
        </div>
    </header>

    <main class="relative flex flex-col justify-start gap-24 sm:gap-32 w-screen px-8 md:px-16 lg:px-24 mt-32">
        
        <!-- Headline -->
        <div class="relative w-full mb-32 sm:mb-0">
            <h3 class="font-inknut text-2xl mb-2">
                Cerita terpopuler
            </h3>
        
            <div class="relative flex bg-accent1/10 h-60 translate-y-32 sm:translate-y-0">
                <div class="flex-1 p-6">
                    <h4 class="font-medium text-2xl mb-4">
                        {{ $popularPost->title }}
                    </h4>
        
                    <p class="font-light text-sm txt-white/65 mb-7 w-4/5 h-16 overflow-hidden">
                        {{ Str::limit($popularPost->content, 100) }}
                    </p>
        
                    <div class="flex mb-2">
                        <svg    xmlns="http://www.w3.org/2000/svg"
                                width="16" 
                                height="16" 
                                fill="#FF9009" 
                                class="bi bi-star-fill" 
                                viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p class="text-sm text-center font-medium">
                            {{ $popularPost->rating }} | {{ $popularPost->votes }} votes
                        </p>
                    </div>
                    
                    <div class="flex justify-between">
                        <p class="font-light text-xs">
                            {{ $popularPost->created_at->format('d M Y') }}
                        </p>
                        <a class="text-accent2 hover:underline hover:font-semibold" href="{{ route('posts.show', ['post' => $popularPost->slug]) }}">
                            Read more &raquo;
                        </a>
                    </div>
        
                </div>

                <img src="storage/{{ $popularPost->image }}" 
                    alt="scary pict"
                    class="sm:h-full sm:w-52 md:w-80 xl:w-[400px] object-cover sm:static sm:-translate-y-0 absolute top-0 left-0 h-1/2 w-full -translate-y-full">
            </div>

            <a href="{{ route('posts.index') }}" class="scale-75 sm:scale-100 absolute right-0 -bottom-44 sm:-bottom-16  bg-accent2 w-32 py-1 text-base text-center font-bold rounded-xs">
                See more
                <svg class="inline" width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_88_86)">
                    <path d="M2.5 15.5C2.5 8.6 8.1 3 15 3C21.9 3 27.5 8.6 27.5 15.5C27.5 22.4 21.9 28 15 28C8.1 28 2.5 22.4 2.5 15.5ZM15 14.25H10V16.75H15V20.5L20 15.5L15 10.5L15 14.25Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_88_86">
                    <rect width="30" height="30" fill="white" transform="matrix(0 -1 1 0 0 30.5)"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
            </a>
        </div>

        <!-- Recomendation -->
        <div class="relative w-full">
            <h3 class="font-inknut text-2xl mb-2">
                Untuk anda
            </h3>

            <div class="relative w-full
                        before:absolute before:-left-8 md:before:-left-16 lg:before:-left-24 before:top-0 before:h-full before:w-24 md:before:w-48 lg:before:w-96 
                        before:bg-linear-to-r before:from-background before:z-10 before:from-15% before:pointer-events-none
                        after:absolute after:-right-8 md:after:-right-16 lg:after:-right-24 after:top-0 after:h-full after:w-24 md:after:w-48 lg:after:w-96
                        after:bg-linear-to-l after:from-background after:z-10 after:from-15% after:pointer-events-none">

                <div id="card-scroller" class="flex relative px-4  pb-4  w-full overflow-x-scroll custom-scrollbar">

                    <div class="flex w-max gap-8">
                        
                        @foreach ($recomendationPosts as $post)

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

            <a href="{{ route('posts.index') }}" class="scale-75 sm:scale-100 absolute right-0 -bottom-12 sm:-bottom-16 bg-accent2 w-32 py-1 text-base text-center font-bold rounded-xs">
                See more
                <svg class="inline" width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_88_86)">
                    <path d="M2.5 15.5C2.5 8.6 8.1 3 15 3C21.9 3 27.5 8.6 27.5 15.5C27.5 22.4 21.9 28 15 28C8.1 28 2.5 22.4 2.5 15.5ZM15 14.25H10V16.75H15V20.5L20 15.5L15 10.5L15 14.25Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_88_86">
                    <rect width="30" height="30" fill="white" transform="matrix(0 -1 1 0 0 30.5)"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
            </a>

        </div>

        <!-- Latest -->
        <div class="relative w-full">
            <h3 class="font-inknut text-2xl mb-2">
                Terbaru
            </h3>

            <div class="relative w-full
                        before:absolute before:-left-8 md:before:-left-16 lg:before:-left-24 before:top-0 before:h-full before:w-24 md:before:w-48 lg:before:w-96 
                        before:bg-linear-to-r before:from-background before:z-10 before:from-15% before:pointer-events-none
                        after:absolute after:-right-8 md:after:-right-16 lg:after:-right-24 after:top-0 after:h-full after:w-24 md:after:w-48 lg:after:w-96
                        after:bg-linear-to-l after:from-background after:z-10 after:from-15% after:pointer-events-none">

                <div id="card-scroller" class="flex relative px-4  pb-4  w-full overflow-x-scroll custom-scrollbar">

                    <div class="flex w-max gap-8">
                        
                        @foreach ($latestPosts as $post)

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

            <a href="{{ route('posts.index') }}" class="scale-75 sm:scale-100 absolute right-0 -bottom-12 sm:-bottom-16 bg-accent2 w-32 py-1 text-base text-center font-bold rounded-xs">
                See more
                <svg class="inline" width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_88_86)">
                    <path d="M2.5 15.5C2.5 8.6 8.1 3 15 3C21.9 3 27.5 8.6 27.5 15.5C27.5 22.4 21.9 28 15 28C8.1 28 2.5 22.4 2.5 15.5ZM15 14.25H10V16.75H15V20.5L20 15.5L15 10.5L15 14.25Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_88_86">
                    <rect width="30" height="30" fill="white" transform="matrix(0 -1 1 0 0 30.5)"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
            </a>

        </div>

        
        <!-- Registration -->
        <div    style="background-image: url('/pictures/writer.jpeg')"
                class="relative w-screen min-h-64 aspect-video -translate-x-8 md:-translate-x-16 lg:-translate-x-24 bg-cover 
                    before:w-full before:h-4 sm:before:h-12 md:before:h-24 lg:before:h-32  before:bg-linear-to-b before:from-background before:from-30% before:absolute before:top-0 before:content-[''] before:pointer-events-none
                    after:w-full after:h-4 sm:after:h-12 md:after:h-24 lg:after:h-32 after:bg-linear-to-t after:from-background after:from-30% after:absolute after:bottom-0 after:content-[''] after:pointer-events-none">
            
            <h3 class="font-inknut text-xl sm:text-2xl md:text-4xl lg:text-6xl mt-4 sm:mt-12 md:mt-18 lg:mt-24 ml-8 sm:ml-16">
                Ingin menulis <br> ceritamu sendiri?
            </h3>

            <p class="font-inknut text-xl sm:text-2xl md:text-4xl lg:text-5xl mt-4 sm:mt-12 md:mt-18 lg:mt-24 ml-8 sm:ml-16">
                Daftarkan <span class="font-creepster text-accent1">JIWAMU</span> <br>
                sekarang!!!
            </p>

            <a href="{{ route('signUp') }}" class="bg-accent2 scale-75 block sm:scale-100 w-32 py-2 text-center font-semibold rounded-md mt-4 sm:mt-12 md:mt-18 lg:mt-24 ml-4 sm:ml-16">
                Buat akun
            </a>

        </div>

    </main>

    <x-footer/>
</body>
</html>