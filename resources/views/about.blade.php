<x-layouts.app>
    <x-layouts.navbar title="About" />
    <div class="flex flex-col py-24 mx-auto px-7 lg:px-14  max-w-5xl">
        <div class="flex flex-col space-y-8 md:space-y-0  md:flex-row items-center md:space-x-8">
            <div class="flex">
                <img class="w-full h-full" src=" {{ asset('images/profile_pic.png') }} ">
            </div>
            <div class="max-w-md">
                <h4 class="pb-1 text-lg">Jacqueline Suowari</h4>
                <p class="text-[10px] text-gray-500">B.1990, Nigeria</p>
                <p class="text-xs text-gray-500 pt-5">
                    Jacqueline Suowari is a Visual Artist. <br>
                    Her journey into art started from the early age of five and for the past decade, she has stunned her ardent collectors with magnetic pieces which over time, have grown larger than life. <br><br>
                    Jacqueline is motivated by the intriguing art of drawing. She is inspired by identity and subliminal human emotional responses, as they influence perception and communication. The thousands of ballpoint pen strokes which make up every single piece of her work reveals the countless hours which it takes to achieve perfection in her eyes, with a single piece sometimes taking several months to complete. In each piece, she combines various elements of design to share her experiences and inspiration with the audience. <br><br>
                    Jacqueline has participated in several group exhibitions locally and internationally, and has been featured in several publications including “Ballpoint Art; Complexity from Simplicity” by Sandu Publishing, which features a number of Ballpoint Pen artists from around the world, as well as Chukwuemeka Ben Bosah’s book, “The Art of Nigerian Women”, which chronicles some of the best of Nigeria’s artists, living and working today. <br><br>
                </p>
            </div>
        </div>
        <div class="w-full h-px bg-gray-300 mt-28"></div>
        <h6 class="mt-8 mb-2 text-[#9F6969]">CV</h6>
        <a href="{{ url('/cv') }}" class="text-xs text-gray-400">Click here to view</a>
    </div>


    <div class="absolute inset-x-0 bottom-0 p-7 lg:p-16">
        <x-layouts.footer />
    </div>
</x-layouts.app>