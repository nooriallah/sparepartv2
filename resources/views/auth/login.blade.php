<x-layout>
    <form action="/login" method="post">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-md border p-4 mx-auto mt-10">
            <legend class="fieldset-legend">Login</legend>

            <label class="label">Email</label>
            <input type="email" name="email" class="input w-full" placeholder="Email address" required />
            @error("email")
            <span class="text-xm text-red-400">{{ $message }}</span>
            @enderror

            <label class="label">Password</label>
            <input type="password" name="password" class="input w-full" placeholder="Password" required />
            @error("password")
            <span class="text-xm text-red-400">{{ $message }}</span>
            @enderror

            <button class="btn btn-secondary mt-4">Log In</button>
        </fieldset>
    </form>

</x-layout>
