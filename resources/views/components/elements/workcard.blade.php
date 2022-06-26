@props(['image', 'title', 'url'])

<div class="flex flex-col lg:flex-row w-full lg:items-center space-y-10 space-x-0 lg:space-x-28 lg:space-y-0 mt-14">
    <div class="flex flex-shrink-0 w-full lg:w-[42rem]">
        <img class="w-full h-full object-cover" src="{{ asset("images/$image.png") }}" >
    </div>
    <div class="flex flex-col">
        <div class="flex flex-col space-y-1">
            <span class="uppercase tracking-[0.315em]">{{ $title }}</span>
            <span class="text-xs text-gray-500">Jacqueline Suowari, 2021</span>
        </div>
        <div class="mt-10 flex flex-row items-center space-x-1">
            <a href="{{ url("/$url") }}" class="text-[14px] font-medium">View Collection </a>
            <x-icons.arrow />
        </div>
    </div>
</div>