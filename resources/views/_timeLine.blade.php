<div class="border border-gray-300 rounded-lg">
    @forelse($tweets as $tweet)
        @include("_tweet")
    @empty
        <P class=" flex justify-center">there's no tweet yet!!</P>
    @endforelse
    {{$tweets->links()}}
</div>
