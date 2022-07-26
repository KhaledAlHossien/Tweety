<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
                    name="body"
                    class="w-full"
                    placeholder="What's the new Tweet!!"
        required
        ></textarea>

        <hr class="mb-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{ auth()->user()->avatar}}"
                alt="Your Avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >

           <x-tweet-button></x-tweet-button>
        </footer>
<div>
    @error('body')
    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror
</div>

    </form>
</div>
