@props(['skill' => '', 'level' => 0, 'color' => 'blue'])

@php
    $colorClasses = [
        'blue' => 'bg-blue-500',
        'green' => 'bg-green-500',
        'yellow' => 'bg-yellow-500',
        'red' => 'bg-red-500',
        'purple' => 'bg-purple-500',
        'pink' => 'bg-pink-500',
        'indigo' => 'bg-indigo-500',
        'teal' => 'bg-teal-500',
        'orange' => 'bg-orange-500'
    ];
    
    $colorClass = $colorClasses[$color] ?? $colorClasses['blue'];
@endphp

<div class="mb-4">
    <div class="flex justify-between mb-2">
        <span class="font-medium text-gray-700">{{ $skill }}</span>
        <span class="text-sm text-gray-600 font-semibold">{{ $level }}%</span>
    </div>
    <div class="w-full bg-gray-200 rounded-full h-3">
        <div class="h-3 rounded-full {{ $colorClass }} transition-all duration-500 ease-out" 
      style="width: {{ $level }}%"></div>
    </div>
</div>