<div>
<div class="w-full max-w-2xl mx-auto">
        <h1 class="text-3xl mt-8 font-bold text-gray-500">Aprendendo select dinâmico com Livewire</h1>

        <form wire:submit.prevent="save" class="flex flex-col w-full bg-indigo-200 mt-16 p-8 space-y-2" autocomplete="off">
            <div>
                <div>
                    <label for="title" class="block">Nome do livro</label>
                    <input wire:model="title" type="text" id="title" class="w-full border mb-2 h-9 pl-2">
                </div>
            </div>
            <div>
                <div class="relative">
                    <label for="author" class="block">Autor</label>
                    <div>
                        <input wire:model="search" type="text" id="author" class="w-full border mb-2 h-9 pl-2">
                        <span wire:click="clear" class="absolute right-2 top-7 cursor-pointer">&#10006;</span>
                    </div>
                </div>
                <div>
                    @if($showList)
                    <ul class="bg-white opacity-70 -mt-2 py-2 h-28 overflow-auto">
                        @foreach($users as $user)
                            <li wire:click="setId({{ $user }})" class="w-full px-2 cursor-pointer hover:bg-gray-200">{{ $user->name }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            <button type="submit" class="w-full bg-white border rounded mt-9 py-4">
                Cadastrar
            </button>
        </form>

        {{-- <div>
            <input wire:model="data.name" type="text">
            <input wire:model="data.age" type="number">
            <input wire:model="data.genre" type="text">
            <button wire:click="clearUser">Limpar usuario</button>
        </div> --}}

        <div class="pt-4">
            <a class="text-2xl text-indigo-600" href="{{ route('books.list') }}"><< voltar</a>
        </div>
    </div>
</div>
