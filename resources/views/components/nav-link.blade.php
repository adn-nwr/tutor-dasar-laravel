@props(['active' => false])

<a {{ $attributes }}
    @class([ "rounded-md px-3 py-2 text-sm font-medium" , "bg-gray-900 text-white"=> $active,
    "text-gray-300 hover:bg-gray-700 hover:text-white" => !$active,
    ])
    @if($active) aria-current="page" @endif >{{ $slot }}</a>

<!-- <a {{ $attributes }}
    @class([ "rounded-md px-3 py-2 text-sm font-medium" , "bg-gray-900 text-white"=> request()->is($attributes['href']),
    "text-gray-300 hover:bg-gray-700 hover:text-white" => !request()->is($attributes['href']),
    ])
    >{{ $slot }}</a> -->

<!-- <a {{ $attributes }}
    @if(request()->is($attributes['href']))
    class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
    @else
    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
    @endif
    >{{ $slot }}</a> -->