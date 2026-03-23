    <x-layout>


        
        @if(!is_null($idea))
        <h2 class="text-5xl mt-10 mb-4">Idea</h2>
        <p class="p-5">
            {{ $idea->note }}
        </p>
        <div class="flex items-center gap-5">
            <a href="/ideas/{{ $idea->id }}/edit" class="p-4 bg-orange-300 rounded mt-4">Edit</a>

        <form action="/ideas/{{ $idea->id }}/delete" method="post">
            @csrf
            @method("DELETE")
            <button class="px-6 py-3 bg-red-400 text-white rounded">Delete</button>
        </form>
        </div>
        @endif

    </x-layout>
