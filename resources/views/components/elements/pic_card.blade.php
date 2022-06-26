@props(['image', 'url'])

<div class="flex flex-col space-y-2">
    <a href="{{ url("$url") }}" class="relative bg-center bg-cover h-60 lg:h-44" style="background-image: url(' {{ asset("images/$image.png") }} ')">
        <div class="absolute hover:bg-black opacity-50 inset-0 transition"></div>
    </a>
    <p class="text-xs text-gray-400 text-center">{{ str_replace( url()->current()."/", '' , url("$url")) }}</p>
</div>
