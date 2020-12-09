@props([
        'label',
        'model'
    ])

<div>
    <label for="{{ $model }}" class="block text-sm font-medium leading-5 text-gray-700">
        {{ $label }}
    </label>
    <div class="mt-1 rounded-md shadow-sm">
        <input wire:model="{{ $model }}" {{ $attributes }} id="{{ $model }}" type="text" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
        @if($errors->has($model))
            <p class="text-red-500 text-xs p-2">
                {{ $errors->first($model) }}
            </p>
        @endif
    </div>
</div>
