    <nav id="navbar" class="h-32 w-full bg-linear-to-b from-accent1/15 from-30% z-20 py-4 px-8 sticky top-0 flex justify-between items-center transition-all duration-300">
        <a href="/" class="h-full">
            <h1 class="font-nosifer text-4xl mt-0 ">CERAM </h1>
        </a>

        <button type="button" id="hamburger-menu" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </button>

        <ul id="nav-bar" class="md:justify-between justify-start gap-8 md-gap-0 -translate-x-full md:-translate-x-0 p-8 md:p-0 flex w-80 top-0 left-0 h-screen md:h-full bg-accent1dark md:backdrop-blur-none md:bg-transparent flex-col md:flex-row absolute md:static">
            <button type="button" class="absolute top-4 right-4 md:hidden" id="close-nav">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>

            <li class="text-xl">
                <a href="/" class="mx-2 my-1 {{ request()->is('/') ? 'text-accent2 font-inknut underline' : 'hover:text-white border-b-2 border-transparent hover:border-white transition-all duration-300 origin-left' }}  cursor-pointer ">Home</a>
            </li>

            <li class="text-xl">
                <a href="/posts" class="mx-2 my-1 {{ request()->is(['post', 'posts']) ? 'text-accent2 font-inknut underline' : 'hover:text-white border-b-2 border-transparent hover:border-white transition-all duration-300 origin-left' }}  cursor-pointer ">Stories</a>
            </li>

            @auth
                <li class="text-xl w-full">
                    <form action="{{ route('logout') }}" method="POST" class="w-fit">
                        @csrf
                        <button type="submit" class="mx-2 my-1 {{ request()->is('login') ? 'text-accent2 font-inknut underline' : 'hover:text-white border-b-2 border-transparent hover:border-white transition-all duration-300 origin-left' }}  cursor-pointer ">Log-Out</button>
                    </form>
                </li>
            @endauth
            @guest
                <li class="text-xl">
                    <a href="/settings/account" class="mx-2 my-1 {{ request()->is('login') ? 'text-accent2 font-inknut underline' : 'hover:text-white border-b-2 border-transparent hover:border-white transition-all duration-300 origin-left' }}  cursor-pointer ">Login</a>
                </li>
            @endguest
        </ul>
    </nav>