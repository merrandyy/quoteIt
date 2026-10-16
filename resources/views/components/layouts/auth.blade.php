<x-layouts.default>
    <div class="flex flex-col justify-center items-center min-h-screen">
    <div class="mb-10">
        <a href="{{ route('home')}}">
        <h1 class="font-bold text-4xl">
            MeTweet
        </h1>
        </a>
    </div>
    <div>
        {{ $slot }}
    </div>
    </div>
</x-layouts.default>