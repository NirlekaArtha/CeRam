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

  <button type="button" id="hamburger-menu" class="z-0 md:hidden block absolute top-4 left-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
    </svg>
  </button>

  <main class="py-16 px-4 sm:px-20 w-full md:w-[80%] h-screen">
    <h2 class="text-3xl font-medium mb-8 top-16">
      Cerita yang disimpan
    </h2>
    <div class="overflow-y-scroll md:overflow-y-hidden md:overflow-x-scroll h-fit pb-8 custom-scrollbar">
      <div class="flex md:flex-row items-center md:items-start flex-col gap-4 w-full h-fit md:w-fit md:h-full">
  
        <div class="bg-accent1/10 h-96 shrink-0 w-64 rounded-sm shadow-[2px_2px_4px_0px_black] overflow-hidden">
            <img 
                    class="w-full h-40 object-cover object-top"
                    src="../../pictures/scary5.jpg" 
                    alt="scary">
            
            <div class="pt-3 px-4">
                <h4 class="text-xl font-medium">
                    Sweet Lady
                </h4>
    
                <p class="font-light text-xs text-white/65 mt-4 h-20">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque alias. Lorem ipsum dolor sit amet.
                </p>
    
                <div class="mt-4">
                    <div class="flex mb-2">
                        <svg    xmlns="http://www.w3.org/2000/svg"
                                width="14" 
                                height="14" 
                                fill="#FF9009" 
                                class="bi bi-star-fill" 
                                viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p class="text-xs text-center font-normal ml-1">
                            4.9 | 409 Votes
                        </p>
                    </div>
                    
                    <div class="flex justify-between">
                        <p class="font-light text-xs">
                            May, 20th 2023
                        </p>
                        <a class="text-accent2 text-xs hover:underline hover:font-semibold" href="#">
                            Read more &raquo;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="bg-accent1/10 h-96 shrink-0 w-64 rounded-sm shadow-[2px_2px_4px_0px_black] overflow-hidden">
            <img 
                    class="w-full h-40 object-cover object-top"
                    src="../../pictures/scary4.jpg" 
                    alt="scary">
            
            <div class="pt-3 px-4">
                <h4 class="text-xl font-medium">
                    The Butcher
                </h4>
    
                <p class="font-light text-xs text-white/65 mt-4 h-20">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque alias. Lorem ipsum dolor sit amet.
                </p>
    
                <div class="mt-4">
                    <div class="flex mb-2">
                        <svg    xmlns="http://www.w3.org/2000/svg"
                                width="14" 
                                height="14" 
                                fill="#FF9009" 
                                class="bi bi-star-fill" 
                                viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p class="text-xs text-center font-normal ml-1">
                            4.9 | 409 Votes
                        </p>
                    </div>
                    
                    <div class="flex justify-between">
                        <p class="font-light text-xs">
                            May, 20th 2023
                        </p>
                        <a class="text-accent2 text-xs hover:underline hover:font-semibold" href="#">
                            Read more &raquo;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="bg-accent1/10 h-96 shrink-0 w-64 rounded-sm shadow-[2px_2px_4px_0px_black] overflow-hidden">
            <img 
                    class="w-full h-40 object-cover object-top"
                    src="../../pictures/scary1.jpg" 
                    alt="scary">
            
            <div class="pt-3 px-4">
                <h4 class="text-xl font-medium">
                    Foggy Cabin
                </h4>
    
                <p class="font-light text-xs text-white/65 mt-4 h-20">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque alias. Lorem ipsum dolor sit amet.
                </p>
    
                <div class="mt-4">
                    <div class="flex mb-2">
                        <svg    xmlns="http://www.w3.org/2000/svg"
                                width="14" 
                                height="14" 
                                fill="#FF9009" 
                                class="bi bi-star-fill" 
                                viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p class="text-xs text-center font-normal ml-1">
                            4.9 | 409 Votes
                        </p>
                    </div>
                    
                    <div class="flex justify-between">
                        <p class="font-light text-xs">
                            May, 20th 2023
                        </p>
                        <a class="text-accent2 text-xs hover:underline hover:font-semibold" href="#">
                            Read more &raquo;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="bg-accent1/10 h-96 shrink-0 w-64 rounded-sm shadow-[2px_2px_4px_0px_black] overflow-hidden">
            <img 
                    class="w-full h-40 object-cover object-top"
                    src="../../pictures/scary3.jpg" 
                    alt="scary">
            
            <div class="pt-3 px-4">
                <h4 class="text-xl font-medium">
                    The Rising
                </h4>
    
                <p class="font-light text-xs text-white/65 mt-4 h-20">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque alias. Lorem ipsum dolor sit amet.
                </p>
    
                <div class="mt-4">
                    <div class="flex mb-2">
                        <svg    xmlns="http://www.w3.org/2000/svg"
                                width="14" 
                                height="14" 
                                fill="#FF9009" 
                                class="bi bi-star-fill" 
                                viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p class="text-xs text-center font-normal ml-1">
                            4.9 | 409 Votes
                        </p>
                    </div>
                    
                    <div class="flex justify-between">
                        <p class="font-light text-xs">
                            May, 20th 2023
                        </p>
                        <a class="text-accent2 text-xs hover:underline hover:font-semibold" href="#">
                            Read more &raquo;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="bg-accent1/10 h-96 shrink-0 w-64 rounded-sm shadow-[2px_2px_4px_0px_black] overflow-hidden">
            <img 
                    class="w-full h-40 object-cover object-top"
                    src="../../pictures/scary1.jpg" 
                    alt="scary">
            
            <div class="pt-3 px-4">
                <h4 class="text-xl font-medium">
                    Foggy Cabin
                </h4>
    
                <p class="font-light text-xs text-white/65 mt-4 h-20">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque alias. Lorem ipsum dolor sit amet.
                </p>
    
                <div class="mt-4">
                    <div class="flex mb-2">
                        <svg    xmlns="http://www.w3.org/2000/svg"
                                width="14" 
                                height="14" 
                                fill="#FF9009" 
                                class="bi bi-star-fill" 
                                viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p class="text-xs text-center font-normal ml-1">
                            4.9 | 409 Votes
                        </p>
                    </div>
                    
                    <div class="flex justify-between">
                        <p class="font-light text-xs">
                            May, 20th 2023
                        </p>
                        <a class="text-accent2 text-xs hover:underline hover:font-semibold" href="#">
                            Read more &raquo;
                        </a>
                    </div>
                </div>
            </div>
        </div>
  
        <div class="bg-accent1/10 h-96 shrink-0 w-64 rounded-sm shadow-[2px_2px_4px_0px_black] overflow-hidden">
            <img 
                    class="w-full h-40 object-cover object-top"
                    src="../../pictures/scary3.jpg" 
                    alt="scary">
            
            <div class="pt-3 px-4">
                <h4 class="text-xl font-medium">
                    The Rising
                </h4>
    
                <p class="font-light text-xs text-white/65 mt-4 h-20">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque alias. Lorem ipsum dolor sit amet.
                </p>
    
                <div class="mt-4">
                    <div class="flex mb-2">
                        <svg    xmlns="http://www.w3.org/2000/svg"
                                width="14" 
                                height="14" 
                                fill="#FF9009" 
                                class="bi bi-star-fill" 
                                viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p class="text-xs text-center font-normal ml-1">
                            4.9 | 409 Votes
                        </p>
                    </div>
                    
                    <div class="flex justify-between">
                        <p class="font-light text-xs">
                            May, 20th 2023
                        </p>
                        <a class="text-accent2 text-xs hover:underline hover:font-semibold" href="#">
                            Read more &raquo;
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-accent1/10 h-96 shrink-0 w-64 rounded-sm shadow-[2px_2px_4px_0px_black] overflow-hidden">
            <img 
                    class="w-full h-40 object-cover object-top"
                    src="../../pictures/scary5.jpg" 
                    alt="scary">
            
            <div class="pt-3 px-4">
                <h4 class="text-xl font-medium">
                    Sweet Lady
                </h4>
    
                <p class="font-light text-xs text-white/65 mt-4 h-20">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque alias. Lorem ipsum dolor sit amet.
                </p>
    
                <div class="mt-4">
                    <div class="flex mb-2">
                        <svg    xmlns="http://www.w3.org/2000/svg"
                                width="14" 
                                height="14" 
                                fill="#FF9009" 
                                class="bi bi-star-fill" 
                                viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p class="text-xs text-center font-normal ml-1">
                            4.9 | 409 Votes
                        </p>
                    </div>
                    
                    <div class="flex justify-between">
                        <p class="font-light text-xs">
                            May, 20th 2023
                        </p>
                        <a class="text-accent2 text-xs hover:underline hover:font-semibold" href="#">
                            Read more &raquo;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="bg-accent1/10 h-96 shrink-0 w-64 rounded-sm shadow-[2px_2px_4px_0px_black] overflow-hidden">
            <img 
                    class="w-full h-40 object-cover object-top"
                    src="../../pictures/scary4.jpg" 
                    alt="scary">
            
            <div class="pt-3 px-4">
                <h4 class="text-xl font-medium">
                    The Butcher
                </h4>
    
                <p class="font-light text-xs text-white/65 mt-4 h-20">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque alias. Lorem ipsum dolor sit amet.
                </p>
    
                <div class="mt-4">
                    <div class="flex mb-2">
                        <svg    xmlns="http://www.w3.org/2000/svg"
                                width="14" 
                                height="14" 
                                fill="#FF9009" 
                                class="bi bi-star-fill" 
                                viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p class="text-xs text-center font-normal ml-1">
                            4.9 | 409 Votes
                        </p>
                    </div>
                    
                    <div class="flex justify-between">
                        <p class="font-light text-xs">
                            May, 20th 2023
                        </p>
                        <a class="text-accent2 text-xs hover:underline hover:font-semibold" href="#">
                            Read more &raquo;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="bg-accent1/10 h-96 shrink-0 w-64 rounded-sm shadow-[2px_2px_4px_0px_black] overflow-hidden">
            <img 
                    class="w-full h-40 object-cover object-top"
                    src="../../pictures/scary1.jpg" 
                    alt="scary">
            
            <div class="pt-3 px-4">
                <h4 class="text-xl font-medium">
                    Foggy Cabin
                </h4>
    
                <p class="font-light text-xs text-white/65 mt-4 h-20">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque alias. Lorem ipsum dolor sit amet.
                </p>
    
                <div class="mt-4">
                    <div class="flex mb-2">
                        <svg    xmlns="http://www.w3.org/2000/svg"
                                width="14" 
                                height="14" 
                                fill="#FF9009" 
                                class="bi bi-star-fill" 
                                viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p class="text-xs text-center font-normal ml-1">
                            4.9 | 409 Votes
                        </p>
                    </div>
                    
                    <div class="flex justify-between">
                        <p class="font-light text-xs">
                            May, 20th 2023
                        </p>
                        <a class="text-accent2 text-xs hover:underline hover:font-semibold" href="#">
                            Read more &raquo;
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>