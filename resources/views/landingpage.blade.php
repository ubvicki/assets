<x-template>
    <x-slot name="title">Home Page</x-slot>
    <div class="relative" id="home">
        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 ">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-purple-600 to-purple-400"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="relative pt-36 ml-auto">
                <div class="lg:w-2/3 text-center mx-auto">
                    <h1 class="text-gray-900 font-bold text-5xl md:text-6xl xl:text-7xl">Shaping a world
                        with <span class="text-purple-600">reimagination.</span></h1>
                    <p class="mt-8 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Odio incidunt nam itaque sed eius modi error totam sit illum. Voluptas doloribus
                        asperiores quaerat aperiam. Quidem harum omnis beatae ipsum soluta!</p>
                    <div class="mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6">
                        <a href="{{ route('applicant.create') }}"
                            class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-purple-600 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                            <span class="relative text-base font-semibold text-white">Application</span>
                        </a>
                        <a href="#"
                            class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:border before:border-transparent before:bg-purple-600/10 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                            <span class="relative text-base font-semibold text-purple-600">Acknowledgement Slip</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-template>
