<div class="sm:px-6 w-full">
    <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
        <div class="mt-7 overflow-x-auto">
            <table class="w-full whitespace-nowrap" id="tableId">
                <thead>
                    <tr class="focus:outline-none bg-purple-600 h-16 border border-grey-200 rounded">
                        @foreach ($headers as $header)
                            <th>
                                <div class="flex justify-evenly items-center pl-5">
                                    <p class="text-base font-medium leading-none text-white mr-2">{{ $header }}</p>
                                </div>
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <tr id="rowTemplate" tabindex="0" class="focus:outline-none h-16 border border-grey-200 rounded">
                        {{ $slot }}
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="w-4/5 flex justify-end">
    <button id="add-row">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
    </button>
</div>
