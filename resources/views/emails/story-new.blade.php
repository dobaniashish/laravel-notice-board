<x-mail::message>

A new Story has been added.

Title: {{ $storyTitle }}

Please check and approve it.

<x-mail::button :url="$approveUrl">Approve Story</x-mail::button>

Thanks,<br>

{{ config('app.name') }}

</x-mail::message>
