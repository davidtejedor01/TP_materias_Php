<div
    class="max-w-lg w-full relative overflow-hidden z-10 bg-gray-800 p-8 rounded-lg shadow-md
           before:w-24 before:h-24 before:absolute before:bg-purple-600 before:rounded-full before:-z-10 before:blur-2xl before:-top-6 before:-left-6
           after:w-32 after:h-32 after:absolute after:bg-sky-400 after:rounded-full after:-z-10 after:blur-xl after:top-24 after:-right-12">

    <h3 class="text-2xl font-bold text-white mb-6 text-center">{{ $title }}</h3>

    @if ($errors->any())
        <div class="bg-red-600 text-white text-center p-2 rounded mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
        @csrf

        {{ $slot }}
    </form>

</div>