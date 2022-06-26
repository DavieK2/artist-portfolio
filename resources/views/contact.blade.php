<x-layouts.app>
    <x-layouts.navbar title="Contact" />
    <div class="relative w-full h-[21rem] before:absolute before:inset-0 before:bg-black before:opacity-90 overflow-hidden" style="background-image: url(' {{ asset('images/header-contact.png') }} ')">
        <img class="absolute right-0 inset-y-0" src=" {{ asset('images/contact_pic.png') }} ">
    </div>
    <div class="flex flex-col py-24 mx-auto px-7 lg:px-14  max-w-5xl">
        <p class="text-xs text-gray-400">For Inquiries, contact:</p>
        <h6 class="text-[#9F6969]">js@jacquelinesuowari.com</h6>

        <div class="mt-24">
            <p class="text-xs text-gray-400">To join the mailing list, submit the form below</p>
            <div class="flex flex-col mt-10">
                <div class="flex flex-col space-y-10 md:space-y-0 md:flex-row md:space-x-16">
                    <input class="py-2 text-xs border-gray-400 border-b w-80 focus:ring-0 focus:outline-none" type="text" name="first_name" placeholder="First Name*">
                    <input class="py-2 text-xs border-gray-400 border-b w-80 focus:ring-0 focus:outline-none" type="text" name="last_name" placeholder="Last Name*">
                </div>

                <div class="mt-10 flex flex-row">
                    <input class="py-2 text-xs border-gray-400 border-b w-80 focus:ring-0 focus:outline-none" type="email" name="email" placeholder="Email*">
                </div>

                <div class="mt-10 flex flex-row">
                   <button class="bg-[#9F6969] hover:bg-[#5a3030] transition text-white p-2 rounded text-sm focus:border-transparent">Submit</button>
                </div>
                
            </div>
        </div>
    </div>

    <div class="absolute inset-x-0 bottom-0 p-7 lg:p-16">
        <x-layouts.footer />
    </div>
</x-layouts.app>