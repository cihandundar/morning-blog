<header class="bg-black py-5">
    <div class="container max-w-screen-xl mx-auto flex items-center justify-between">
        <a href="/">@include('front.partials.svg.logo')</a>
        <nav>
            @include('front.partials.menu')
        </nav>
        <div class="flex items-center gap-5">
            <div class="relative">
                <input class="py-1 px-3 rounded-sm outline-none" type="search" placeholder="Search...">
                <button class="absolute right-2 top-1"> <i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <button class="bg-red-600 py-1 px-5 text-white rounded-sm hover:bg-red-700 transition-all duration-300">
                <a href="#">Subscribe</a>
            </button>
        </div>
    </div>
</header>
