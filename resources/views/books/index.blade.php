@extends('layouts.app')

@section('content')
    <div class="w-full max-w-2xl mx-auto">
        <h1 class="text-3xl mt-8 font-bold text-gray-700">Aprendendo select dinâmico com Livewire</h1>

        <div class="flex items-center justify-between mt-8">
            <h2 class="text-2xl text-gray-400">Listagem de livros</h2>
            <a class="text-2xl text-indigo-700" href="{{ route('books.create') }}">Adicionar</a>
        </div>
        <div class="flex flex-col w-full bg-indigo-200 mt-16 p-8 space-y-2">
            <ul>
                @forelse($books as $book)
                    <li class="w-full px-2 cursor-pointer hover:bg-gray-200">
                        {{ $book->title }} - Autor: {{ $book->user->name }}
                    </li>
                @empty
                    <p>Nenhum livro cadastrado.</p>
                @endforelse
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
        </div>
    </div>
@endsection
