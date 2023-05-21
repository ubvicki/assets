@include('components.headpart')
<form action="{{ route('applicant.store') }}" method="post">
    @csrf
    <div class="w-full flex flex-col justify-center items-center mt-8">
        <div class="w-full mx-4 flex flex-col justify-center items-center rounded shadow-lg border overflow-hidden bg-white sm:w-1/2">
            {{ $slot }}
        </div>
    </div>
</form>
