@props(['size' => 'text-2xs', 'tag'])
<a href="/tags/{{ strtolower($tag->name) }}" class="bg-white/10 px-3 font-bold py-1 rounded-xl {{ $size }} hover:bg-white/25 transition-colors duration-300" href="#">{{ $tag->name }}</a>
