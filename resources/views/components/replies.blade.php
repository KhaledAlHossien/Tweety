@foreach($tweet->replies as $reply)
    <a href="{{$tweet->user->path()}}">
    <h5><b  class="text-sm  text-blue-500">
            {{$reply->user->name}}
            </a>
        </b> said...</h5>
    <x-edit-reply-buttens :reply="$reply"></x-edit-reply-buttens>
    <br>
    <h3>{{$reply->body}}</h3>

    <hr class="mb-2">

@endforeach

<form method="POST" action="/replies/{{$tweet->id}}">
    @csrf
    <textarea
        name="body"
        class="w-full"
        placeholder="write a new reply!"
        required
    ></textarea>

    <button
        type="submit"
        class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow  px-6 text-sm text-white h-8 mb-2">
        Sent!
    </button>
</form>
