<div>
    <div class="w-full max-w-2xl mx-auto">
        <h1 class="text-3xl mt-8 font-bold text-gray-500">Aprendendo select dinâmico com Livewire</h1>

        <div class="flex flex-col w-full bg-indigo-200 mt-16 p-8 space-y-2">
            <div>
                <div>
                    <label for="catogory" class="block">Nome do livro</label>
                    <input type="text" id="catogory" class="w-full border mb-2 h-9">
                </div>
            </div>
            <div>
                <div class="relative">
                    <label for="author" class="block">Autor</label>
                    <div>
                        <input wire:model="authorInput" type="text" id="author" class="w-full border mb-2 h-9 pl-2">
                        <span class="absolute right-2 top-7">&#10006;</span>
                    </div>
                </div>
                <div>
                    @if(count($users))
                    <ul class="bg-white opacity-70 -mt-2 py-2 h-28 overflow-auto">
                        @foreach($users as $user)
                            <li wire:click="setId({{$user->id}})" class="w-full px-2 cursor-pointer hover:bg-gray-200">
                                {{ $user->name }}
                            </li>
                        @endforeach
                        <!-- <li class="w-full px-2 cursor-pointer hover:bg-gray-200">Monteiro Lobato</li>
                        <li class="w-full px-2 cursor-pointer hover:bg-gray-200">José de Alencar</li>
                        <li class="w-full px-2 cursor-pointer hover:bg-gray-200">Cecília Meireles</li>
                        <li class="w-full px-2 cursor-pointer hover:bg-gray-200">Carlos D. de Andrade</li>
                        <li class="w-full px-2 cursor-pointer hover:bg-gray-200">Machado de Assis</li>
                        <li class="w-full px-2 cursor-pointer hover:bg-gray-200">Clarice Lispector</li>
                        <li class="w-full px-2 cursor-pointer hover:bg-gray-200">Ruth Rocha</li>
                        <li class="w-full px-2 cursor-pointer hover:bg-gray-200">Graciliano Ramos</li>
                        <li class="w-full px-2 cursor-pointer hover:bg-gray-200">Mario Quintana</li>
                        <li class="w-full px-2 cursor-pointer hover:bg-gray-200">Ana Maria Machado</li> -->
                    </ul>
                    @endif
                </div>
            </div>
            <button type="submit" class="w-full bg-white border rounded mt-9 py-4">
                Cadastrar
            </button>
        </div>

    </div>
</div>
