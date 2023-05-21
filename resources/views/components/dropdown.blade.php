<div class="w-3/4">
<div class="flex flex-col w-1/2 justify-start">
    <label class="block font-medium text-sm text-gray-700">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        @foreach ($options as $value => $optionLabel)
            <option value="{{ $value }}">{{ $optionLabel }}</option>
        @endforeach
    </select>
</div>
</div>
