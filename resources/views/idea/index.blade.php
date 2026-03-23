    <x-layout>


        @if(count($ideas))
        <h2 class="text-5xl mt-10 mb-4">Ideas</h2>
        <ul class="p-5">
            @foreach ($ideas as $idea)
            <li class="mb-3 border p-2">
              <a href="/ideas/{{ $idea->id }}"> {{ $idea->note }}</a> 
            </li>
            @endforeach

        </ul>
        @endif

    </x-layout>
