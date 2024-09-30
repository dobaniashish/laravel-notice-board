<x-layout>

    @if (session()->has('success'))
        <div class="mt-2 mb-6 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500"
            role="alert">
            <span id="hs-soft-color-success-label" class="font-bold">Success</span> {{ session()->get('success') }}
        </div>
    @endif

    <div class="rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] lg:p-10 lg:pb-10">
        <form method="POST" action="{{ route('admin-story-save') }}">
            @csrf

            <div>
                <x-input-label for="title" value="Title" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                    required />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="description" value="Description" />
                <x-textarea-input id="description" class="block mt-1 w-full" type="text" name="description"
                    rows="10" required>{{ old('description') }}</x-textarea-input>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <x-primary-button class="mt-4">Save</x-primary-button>

        </form>
    </div>
</x-layout>
