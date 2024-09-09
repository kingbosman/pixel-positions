@props(['size' => 'text-2xs'])
<a class="bg-white/10 px-3 font-bold py-1 rounded-xl {{ $size }} hover:bg-white/25 transition-colors duration-300" href="#">{{ $slot }}</a>
