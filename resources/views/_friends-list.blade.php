<div class="bg-blue-100 border-gray-300 rounded-lg py-4 px-6 ">
<h1 class=" font-bold text-xl mb-4">Followings</h1>
<ul>
    @forelse(auth()->user()->follows as $user)
        <li>
            <div class="flex items-center text-sm mb-2">

                <a href="{{$user->path()}}" class="flex items-center text-sm">

                <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2" width="40" height="40">

                {{$user->name}}
                 </a>

            </div>
    </li>
    @empty
        <li><p>Lets Follow some frinds!!</p></li>
    @endforelse
</ul>
</div>
