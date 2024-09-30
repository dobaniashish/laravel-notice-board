<a href="{{ route('story', $story->id) }}"
    class="block rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] mb-8">
    <h2 class="text-xl font-semibold text-black dark:text-white">{{ $story->title }}</h2>
    <p class="mt-4 text-sm/relaxed">Published <time>{{ $story->created_at->diffForHumans() }}</time></p>
</a>
