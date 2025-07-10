<div class="bg-accent1/10 h-96 shrink-0 w-64 shadow-[2px_2px_4px_0px_black] flex flex-col rounded-xs">
    <img 
            class="w-full h-40 object-cover object-top"
            src="/storage/{{ $image }}" 
            alt="scary">
    
    <div class="pt-3 px-4 flex flex-col gap-4 flex-1">
        <h4 class="text-xl font-medium line-clamp-2 ">
            {{ $title }}
        </h4>

        <p class="font-light text-xs text-white/65 h-14">
            {{ $desc }}
        </p>

        <div class="mt-auto mb-8">
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
                    {{ $rating }} | {{ $votes }} votes
                </p>
            </div>
            
            <div class="flex justify-between">
                <p class="font-light text-xs">
                    {{ $date }}
                </p>
                <a class="text-accent2 text-xs hover:underline hover:font-semibold" href="{{ $link }}">
                    Read more &raquo;
                </a>
            </div>
        </div>
    </div>
</div>