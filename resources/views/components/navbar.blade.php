<div class="navbar bg-base-100 shadow-sm">

    <div class="navbar-start">
        <a class="btn btn-ghost text-xl">Sparepartv2</a>
    </div>


    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/ideas/index">Home</a></li>
            <li><a href="/ideas/create">New Idea</a></li>
        </ul>
    </div>

    <div class="navbar-end space-x-1">
        @guest
        <a class="btn btn-secondary" href="/register">Register</a>
        <a class="btn btn-primary" href="/login">Login</a>
        @endguest
        @auth
        <form action="/logout" method="post">
            @csrf
            @method("DELETE")
            <button class="btn btn-soft p-3" >Logout</button>
        </form>
        @endauth
    </div>
</div>
