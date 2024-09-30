<x-layout>
    <div class="block rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] mb-8">
        <h1 class="text-3xl font-semibold text-black dark:text-white">{{ $story->title }}</h1>
        <p class="mt-4 text-sm/relaxed">Published <time>{{ $story->created_at->diffForHumans() }}</time></p>
        <div class="prose mt-10">{!! $story->description !!}</div>
    </div>
</x-layout>
