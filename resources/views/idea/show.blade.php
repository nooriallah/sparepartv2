    <x-layout>



        @if(!is_null($idea))
        <h2 class="text-5xl mt-10 mb-4">Idea</h2>
        <x-idea-card note="{{ $idea->note }}" id="{{ $idea->id }}" bg_color="bg-info">
            <p class="p-5">
                {{ $idea->note }}
            </p>

            <div class="flex items-center gap-5">
                <a href="/ideas/{{ $idea->id }}/edit" class="btn p-4 bg-orange-300 rounded">Edit</a>

                <form action="/ideas/{{ $idea->id }}/delete" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="btn p-5 bg-red-400 text-white rounded">Delete</button>
                </form>
            </div>
        </x-idea-card>

        @endif

    </x-layout>
