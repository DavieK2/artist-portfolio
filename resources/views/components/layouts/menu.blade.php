<div x-show="menu" 
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 flex flex-row items-center bg-[#1C1A1B] overflow-hidden" style="display: none">

    <div class="h-full w-[40rem]">
        <img class="w-full min-h-screen object-cover" src="{{ asset('images/landing-image.png') }}">
    </div>
    
    <div class="relative flex flex-col w-full h-full">
        <x-icons.close />
        <div class="flex flex-col mt-40 pr-5 lg:pr-8">
            <ul class="flex flex-col items-end uppercase text-white space-y-10">
                <li class="hover:-translate-x-2 transition hover:border-b-2 border-white"><a href="{{ url('/') }}">Home</a></li>
                <li class="hover:-translate-x-2 transition hover:border-b-2 border-white"><a href="{{ url('/works') }}">Work</a></li>
                <li class="hover:-translate-x-2 transition hover:border-b-2 border-white"><a href="#">Catalogues</a></li>
                <li class="hover:-translate-x-2 transition hover:border-b-2 border-white"><a href="{{ url('/media') }}">Media</a></li>
                <li class="hover:-translate-x-2 transition hover:border-b-2 border-white"><a href="{{ url('/about') }}">About</a></li>
                <li class="hover:-translate-x-2 transition hover:border-b-2 border-white"><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
