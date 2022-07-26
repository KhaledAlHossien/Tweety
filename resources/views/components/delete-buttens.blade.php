<form action="/tweets/{{$tweet->id}}" method="Post">
    @method('DELETE')
    @csrf
<button type="submit" class="bg-red-500 hover:bg-red-600 rounded-lg shadow  px-4 text-sm text-white h-6 mr-2">
    delete!
</button>
</form>
