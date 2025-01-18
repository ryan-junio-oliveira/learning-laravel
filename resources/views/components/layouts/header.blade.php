@props([
    'title' => 'Dashboard',
])

<div class="flex flex-col md:flex-wrap bg-custom-white h-24 md:h-12 justify-center items-center border-t border-gray-300 p-4 gap-4">
    <h1 class="text-start text-xl font-medium">{{ $title }}</h1>

    <div>
        {{ $slot ?? '' }}
    </div>
</div>
