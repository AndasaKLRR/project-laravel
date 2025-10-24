@props(['title' => '', 'class' => '', 'icon' => ''])

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 {{ $class }} hover:shadow-md transition-shadow">
    @if($title)
        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
            @if($icon)
                <i class="{{ $icon }} mr-2 text-blue-500"></i>
            @endif
            {{ $title }}
        </h3>
    @endif
    <div class="text-gray-700">
        {{ $slot }}
    </div>
</div>