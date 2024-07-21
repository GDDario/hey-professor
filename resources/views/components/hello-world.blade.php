@props([
    'title'
])

<div>
    <div class="font-bold uppercase p-2 text-white">
        {{$title}}
    </div>
    <div class="text-lg text-red-600 font-bold bg-red-50 p-20 border-3 border-red-300">
        {{ $slot }}
    </div>
</div>
