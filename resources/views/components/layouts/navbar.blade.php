@props(['title'])
<div class="flex flex-row justify-between items-center px-6 lg:px-10 bg-white shadow-sm h-28">
    <a href="{{ url('/') }}">
        <x-icons.logo class="w-44 h-10 lg:w-60 lg:h-20" />
    </a>
    
    <div class="flex flex-row h-full space-x-3 lg:space-x-6 justify-center items-center">
        <span class="uppercase text-gray-700 text-sm font-medium">{{ $title }}</span>
        <x-icons.menu />
    </div>
</div> 