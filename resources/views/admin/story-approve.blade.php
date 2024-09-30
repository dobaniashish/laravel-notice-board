<x-layout>

    @if (session()->has('success'))
        <div class="mt-2 mb-6 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4" role="alert">
            <span id="hs-soft-color-success-label" class="font-bold">Success</span> {{ session()->get('success') }}
        </div>
    @endif

    <div class="block rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] mb-8">
        <h1 class="text-3xl font-semibold text-black dark:text-white">{{ $story->title }}</h1>
        <p class="mt-4 text-sm/relaxed">Published <time>{{ $story->created_at->diffForHumans() }}</time></p>
        <div class="prose mt-10">{!! $story->description !!}</div>

        @if ($story->status)
            <p class="text-teal-800 mt-10">
                Story is already approved!
            </p>
        @else
            <form method="POST" action="{{ route('admin-story-approve', $story->id) }}">
                @csrf
                <x-primary-button class="mt-4">Approve Story</x-primary-button>
            </form>
        @endif
    </div>

</x-layout>
