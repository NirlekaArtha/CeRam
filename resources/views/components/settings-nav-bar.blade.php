<nav id="nav-bar" class="bg-accent1dark md:bg-accent1/15 z-10 h-full p-8 absolute -translate-x-full md:-translate-x-0 md:static">

<button type="button" class="absolute top-4 right-4 md:hidden" id="close-nav">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
</button>

<h1 class="text-4xl mb-12">
    Settings
</h1>

<ul class="flex flex-col gap-8">
    <li>  
    <a class="flex gap-4 {{ url()->current() === route('settings.profile') ?  'text-accent2light' : '' }}" 
    href="{{ route('settings.profile') }}">
        <svg xmlns="http://www.w3.org/2000/svg" 
            width="24" height="24" viewBox="0 0 24 24" 
            fill="none" stroke="currentColor" stroke-width="2" 
            stroke-linecap="round" stroke-linejoin="round" 
            class="">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
        Account Preferences
    </a>
    </li>
    <li>
    <a class="flex gap-4 {{ url()->current() === route('settings.security') ?  'text-accent2light' : '' }}" 
    href="{{ route('settings.security') }}">
        <svg xmlns="http://www.w3.org/2000/svg" 
            width="24" height="24" viewBox="0 0 24 24" 
            fill="none" stroke="currentColor" stroke-width="2" 
            stroke-linecap="round" stroke-linejoin="round" 
            class="">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
        Signin & security
    </a>
    </li>
    <li>
    <a  class="flex gap-4 {{ url()->current() === route('settings.saved-stories') ?  'text-accent2light' : '' }}" 
        href="{{ route('settings.saved-stories') }}">
        <svg xmlns="http://www.w3.org/2000/svg" 
            width="24" height="24" viewBox="0 0 24 24" 
            fill="none" stroke="currentColor" stroke-width="2" 
            stroke-linecap="round" stroke-linejoin="round" 
            class="">
        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
        Saved stories
    </a>
    </li>
    <li>
    <a  class="flex gap-4 {{ url()->current() === route('settings.your-stories') ?  'text-accent2light' : '' }}" 
        href="{{ route('settings.your-stories') }}">
        <svg xmlns="http://www.w3.org/2000/svg" 
            width="24" height="24" viewBox="0 0 24 24" 
            fill="none" stroke="currentColor" stroke-width="2" 
            stroke-linecap="round" stroke-linejoin="round" 
            class="feather feather-book">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
        </svg>
        Your stories
    </a>
    </li>
</ul>
</nav>