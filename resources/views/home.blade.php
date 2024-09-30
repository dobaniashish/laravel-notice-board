<x-layout>
    <div id="stories">
        @if ($stories->count())
            @foreach ($stories as $story)
                <x-story-card :story="$story" />
            @endforeach

            {{ $stories->links() }}
        @else
            <div
                class="text-center rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] lg:p-10 lg:pb-10">
                <p>No stories added yet.</p>
            </div>
        @endif
    </div>
</x-layout>
