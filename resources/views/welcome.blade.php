<x-layouts.app>
    <div class="relative flex flex-row items-center -mb-36">
        <div class="h-full w-[40rem]">
            <img class="w-full min-h-screen object-cover" src="{{ asset('images/landing-image.png') }}">
        </div>
       
        <div class="hidden lg:flex flex-col items-center w-full h-full py-4 px-10">
            <x-icons.logo class="max-w-4xl" />
        </div>

        <div class="lg:hidden flex items-center justify-center absolute inset-0 bg-white bg-opacity-70">
            <x-icons.logo class="max-w-xl px-5" />
        </div>
    </div>

    <x-icons.menu class="absolute top-5 right-5" />
    <x-layouts.menu />
    <x-layouts.footer class="lg:flex absolute bottom-10 w-full lg:pl-96 xl:pl-[40rem] px-10" />
</x-layouts.app>