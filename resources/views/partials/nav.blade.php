<div class="navbar bg-base-100">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">{{config('app.name')}}</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{route('public.index')}}">Home</a></li>
            <li><a href="{{route('public.about')}}">About</a></li>
        </ul>
    </div>
</div>
