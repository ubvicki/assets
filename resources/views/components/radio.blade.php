<div class="flex w-3/4 justify-start flex-col gap-x-6">
    <label for="{{ $name }}" class="block text-gray-700 font-bold ">{{ $label }}</label>
    @foreach($options as $value => $optionLabel)
        <label class="inline-flex items-center">
            <input type="radio" name="{{ $name }}" value="{{ $value }}" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"><span class="ml-2 text-gray-700">{{ $optionLabel }}</span>
        </label>
    @endforeach
</div>
