<x-app>
  <header class="mb-6 relative">

      <div class="relative">
          <img src="/images/default-profile-banner.jpg" alt="Background Profile" class="mb-2">

          <img src="{{ $user->avatar }}"
               class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left:50%"
               width="150px"
          >
      </div>

      <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl ">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffforHumans()}}</p>
            </div>

          <div class="flex">

              @can('edit',$user)
              <a href="{{$user->path('edit')}}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                      Edit Profile
                  </a>
              @endcan

             <x-follow-button :user="$user"></x-follow-button>

          </div>
      </div>
      <div>
         <div class="text-gray-600 font-bold">About me</div>
      <P class="text-sm">
          @if($user->aboutme)
              {{$user->aboutme}}
          @else
              No thing yet.
              @endif
      </P>
      </div>
  </header>


  @include('_timeLine',[
    'tweets'=>$tweets
])

</x-app>
