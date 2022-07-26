<x-app>
    <div >
        @foreach($users as $user)

           <a href="{{$user->path()}}"> <div class="flex mb-4">
                <img src="{{$user->avatar}}" alt="{{$user->name}}'s avatar" width="60px"
                class="mr-4 rounded">

                <div>
                    <h4 class="font-bold "> {{'@'.$user->name}} </h4class>

               </div>
            </div>
           </a>
        @endforeach
        {{$users->links()}}
    </div>
</x-app>
