<x-layout>

    <form action="/ideas/add" method="post">
        @csrf

        <div class="bg-zinc-700 p-20 rounded">
            <label for="note" class="block text-sm/6 font-medium text-white">Add Idea</label>
            <div class="mt-2">
                <textarea id="note" name="note" rows="6" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
                @if($errors->has("note"))
                    <p class="text-xs text-red-500 mt-1">{{ $errors->first("note") }}</p>
                @endif
            </div>

            <button type="submit" class="py-3 px-6 bg-blue-400 text-white rounded mt-4">Add</button>
        </div>

    </form>
</x-layout>
