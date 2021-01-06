<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookComponent extends Component
{
    public function create() {
        Book::create([
            'title' => "Book Title",
            'user_id' => "1"
        ]);

        return redirect()->to(route('books.list'));
    }

    public function render()
    {
        return view('livewire.book-component');
    }
}
