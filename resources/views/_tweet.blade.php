<div class="flex p-4 {{$loop->last ?'' : 'border-b border-b-gray-400'}}">
    <div class="mr-2 flex-shrink-0">
       <a href="{{$tweet->user->path()}}">
        <img src="{{ $tweet->user->avatar }}"
             alt=""
             class="rounded-full mr-2"
             width="50px"
             height="50px"
        >
       </a>
    </div>

    <div class="font-bold mb-2">
        <div class="flex justify-between items-center mb-2">

        <a href="{{$tweet->user->path()}}">
        <h5 class="mr-2">{{$tweet->user->name}}</h5>
        </a>
        @can('delete-tweet',$tweet)
            <div class="flex ">

            <x-delete-buttens :tweet="$tweet"></x-delete-buttens>
            <x-edit-buttens :tweet="$tweet"></x-edit-buttens>

            </div>
            @endcan

        </div>
        <div class="mb-2">
            <p class="text-sm">created befor {{ $tweet->created_at->diffforHumans()}}</p>
        </div>

        <p class="text-lg mb-3">
            {{$tweet->body}}
        </p>

        <x-like-buttens :tweet="$tweet"></x-like-buttens>
        <x-replies :tweet="$tweet"></x-replies>
    </div>
</div>
