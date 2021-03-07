<div>
    <div class="grid grid-cols-1 bg-gray-300">
        <h1 class="ml-3 text-2xl font-bold">Tweets</h1>
        <div class="p-5 mx-auto bg-white rounded-md">
            <h1 class="font-bold">Tweet</h1>
            <form method="post" wire:submit.prevent="create">
                <textarea type="text" rows="4" cols="50" name="content" id="content" wire:model="content">
                </textarea>
                <br>
                <button type="submit" class="p-2 text-xl text-white bg-indigo-600 rounded-md">Criar Tweet</button>
                @error('content') {{ $message }} @enderror
            </form>
        </div>
        @foreach ($tweets as $tweet)
            <div class="mx-10 my-3">
                <div class="flex-grow bg-white rounded-md">
                    <div class="ml-2 sm:flex sm:items-center">
                        @if($tweet->user->photo)
                            <img src="{{ url('storage/' . $tweet->user->photo) }}" alt="{{ $tweet->user->name }}" class="h-16 my-2 rounded rounded-full sm:flex-shrink-0">
                        @else
                            <img src="{{ url('img/profile.png') }}" alt="{{ $tweet->user->name }}">
                        @endif
                        <div class="text-center sm:ml-4 sm:text-left">
                            {{$tweet->content}}
                            @if ($tweet->likes->count())
                                <span>(</span>
                                <button class="text-sm font-semibold text-red-500 rounded-md">
                                    <a href="#" wire:click.prevent="unlike({{ $tweet->id }})"> Descurtir </a>
                                </button>
                                <span>)</span>
                            @else
                                <span>(</span>
                                <button class="text-sm font-semibold text-blue-500 rounded-sm">
                                    <a href="#" wire:click.prevent="like({{ $tweet->id }})"> Curtir </a>
                                </button>
                                <span>)</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <hr>
    <div>
        {{ $tweets->links() }}
    </div>
</div>
