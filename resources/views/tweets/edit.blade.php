<x-app>
    <form method="POST" action="/tweets/{{$tweet->id}}">
        @method('PATCH')
        @csrf

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="body"
            >
                Body
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text"
                   name="body"
                   id="body"
                   value="{{ $tweet->body }}"
                   required
            >

            @error('body')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit"
                    class="bg-blue-400 text-white rounded-lg py-2 px-4 hover:bg-blue-500 mr-4"
            >
                Update!
            </button>

            <a href="{{ route('home') }}" class="hover:underline text-gray-700">Cancel</a>
        </div>
    </form>
</x-app>
