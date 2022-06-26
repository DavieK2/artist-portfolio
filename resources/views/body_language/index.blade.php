<x-layouts.app>
    <x-layouts.navbar title="Work" />
    <div class="relative w-full h-[21rem] before:absolute before:inset-0 before:bg-black before:opacity-90 overflow-hidden" style="background-image: url(' {{ asset('images/header-contact.png') }} ')">
        <div class="absolute inset-0 flex flex-col items-center text-center justify-center text-4xl uppercase text-white space-y-1">
            <span>Body Language</span>
            <span class="text-xl normal-case text-gray-300">Jacqueline Suowari, 2018</span>
        </div>
    </div>
    <div class="flex flex-col py-24 mx-auto px-7 lg:px-14  max-w-5xl">
       <p class="text-xs text-gray-400">
        noun
        <br><br>
        A type of conscious and unconscious non-verbal communication in which physical behavior, attitudes and feelings, as opposed to words, are used to express or convey information.
        Such behavior includes facial expressions, body posture, gestures, eye movement, touch and the use of space.
        <br><br>
        A person's body language can reveal a lot about what they are thinking and feeling. I have come to discover that this is especially true if their non-verbal displays do not coincide with what their saying.
        Human communication is extremely complex and one must look at the whole in order to make any determination as to the attitudes being expressed. Loh, Wallace D.
        <br><br>
        As an artist, I work hard to develop themes around issues or situations that call out to me but that are easily glazed over by society. In this series, I portray different expressions of body language that could vary in meaning and translation. This is most fascinating for me because this variation in meaning is entirely dependent on cultural backgrounds, experiences and the feelings communicated as words are being spoken.
        <br><br>
        In a sense, I am asking the viewer questions with each piece;
        What do you see?
        What do you hear?
        What do you feel?
        Can you tell their stories...?
        <br><br>
        Perception is everything and our stories and experiences form the lens through which we translate this non- erbal communication.
       </p>

       <div class="mt-20">
           <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-6 w-full">
                <x-elements.pic_card image="Mission Accomplished - Jacqueline Suowari 2018" url="/body-language/Mission Accomplished" />
                <x-elements.pic_card image="Ifechukwude - Jacqueline Suowari 2018" url="/body-language/Ifechukwude" />
                <x-elements.pic_card image="Adaora - Jacqueline Suowari 2018" url="/body-language/Adaora (First daughter of the people)" />
                <x-elements.pic_card image="Comfort Zone - Jacqueline Suowari 2018" url="/body-language/Comfort Zone" />
                <x-elements.pic_card image="Love Over Rules - Jacqueline Suowari 2018" url="/body-language/Love over rules" />
                <x-elements.pic_card image="Bin Dunmuo Tua Owei Jacqueline Suowari 2018" url="/body-language/Bin Dunmou Tua Owei (The man with lots of hair)" />
                <x-elements.pic_card image="A Garland will fix it - Jacqueline Suowari 2018" url="/body-language/A Garland will fix it" />
                <x-elements.pic_card image="Bed Peace - Jacqueline Suowari 2018" url="/body-language/Bed Peace" />
           </div>
       </div>

       <div class="mt-16 w-full flex justify-end">
            <a href="{{ url('/works') }}" class="flex flex-row space-x-2 text-gray-500 text-base font-medium">
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