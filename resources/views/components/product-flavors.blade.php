@props(['flavorsCsv'])

@php
    $flavors = explode(',', $flavorsCsv);
@endphp

<ul class="flex">
    @foreach ($flavors as $flavor)
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?flavor={{ $flavor }}">{{ $flavor }}</a>
        </li>
    @endforeach
</ul>
