<div class="w-3/4">
<div class="flex flex-col justify-start">
    <label for="{{ $name }}" class="block text-gray-700 font-bold mb-2">{{ $label }}</label>
    @foreach($options as $value => $optionLabel)
        <label class="inline-flex items-center gap-x-3">
            <input type="checkbox" name="{{ $name }}[]" value="{{ $value }}" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">{{ $optionLabel }}</span>
        </label>
    @endforeach
</div>
</div>
