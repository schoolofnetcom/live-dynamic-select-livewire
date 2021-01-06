<div>
    <div class="w-full max-w-2xl mx-auto">
        <h1 class="text-3xl mt-8 font-bold text-gray-500">Aprendendo select dinâmico com Livewire</h1>

        <div class="flex flex-col w-full bg-indigo-200 mt-16 p-8 space-y-2">
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
</div>
