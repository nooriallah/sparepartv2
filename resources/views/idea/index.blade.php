    <x-layout>

        @if(count($ideas))
        <h2 class="text-5xl mt-10 mb-4">Ideas</h2>

        <div class="grid grid-cols-2 gap-5">

            @foreach ($ideas as $idea)
            <x-idea-card note="$diea->note" id="{{ $idea->id }}" bg_color="bg-primary">
                <a href="/ideas/{{ $idea->id }}"> {{ $idea->note }}</a>
            </x-idea-card>
            @endforeach

        </div>

        @else
        <h3>No Idea exist <a href="/ideas/create" class="text-blue-400">Create new</a></h3>
        @endif

    </x-layout>
