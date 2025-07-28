@props(['active' => 'false'])

<a {{ $attributes }} class="{{ $active ? ' text-white' : 'text-white' }} rounded-md  px-3 py-2 font-semibold" aria-current="{{ $active ? 'page' : false }}" style="font-size: 12px;">{{ $slot }}</a>