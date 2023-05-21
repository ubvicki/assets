<div class="w-3/4">
    <label for="{{ $name }}" class="text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    <div class="my-3">
      <input name="{{ $name }}" type="{{ $type }}" autocomplete="{{ $name }}" class="w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>
</div>

{{-- <div>
    <label class="text-white dark:text-gray-200" for="{{ $name }}">{{ $label }}</label>
    <input id="{{ $name }}" type="{{ $type }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
</div> --}}
