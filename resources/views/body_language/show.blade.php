<x-layouts.app>
    <x-layouts.navbar title="Work" />
    <div class="relative w-full h-[21rem] before:absolute before:inset-0 before:bg-black before:opacity-90 overflow-hidden" style="background-image: url(' {{ asset('images/header-contact.png') }} ')">
      <h4 class="absolute inset-0 flex items-center text-center justify-center text-4xl uppercase text-white">Body Language</h4>
    </div>
    
    <div class="flex flex-col py-36 mx-auto px-7 lg:px-14  max-w-5xl">
        <div class="flex flex-col space-y-8 md:space-y-0  md:flex-row items-center md:space-x-24">
            <div class="flex">
                <img class="w-full h-full" src=" {{ asset("images/body_language/$work->image.png") }} ">
            </div>
            <div class="max-w-md">
                <div class="space-y-1">
                    <h4 class="text-lg">{{ $work->illustration }}</h4>
                    <p class="text-xs text-gray-400">{{ $work->tools }}</p>
                    <p class="text-xs text-gray-400">{{ $work->dimensions }}</p>
                    <p class="text-xs text-gray-400">{{ $work->year }}</p>
                </div>
               
                <p class="text-xs text-gray-500 mt-20 leading-loose">
                   {!! $work->description !!}
                </p>
            </div>
        </div>

        <div class="mt-16 w-full flex justify-end">
            <a href="{{ url('/body-language') }}" class="flex flex-row space-x-2 text-gray-500 text-base font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                </svg>
                <span>Back</span>
            </a>
       </div>
    </div>

    <div class="absolute inset-x-0 bottom-0 p-7 lg:p-16">
        <x-layouts.footer />
    </div>
</x-layouts.app>