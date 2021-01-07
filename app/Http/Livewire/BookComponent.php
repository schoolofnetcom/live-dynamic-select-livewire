<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\User;

class BookComponent extends Component
{
    public $users = [];
    public $title;
    public $showList = false;
    public $userId;
    public $authorInput = "";

    public function updatedAuthorInput() {
        $this->users = User::where('name', 'like', "%$this->authorInput%")->get();
        $this->showList = true;
    }

    public function clear() {
        $this->reset(['authorInput', 'userId']);
    }

    public function setId($user) {
        $this->userId = $user['id'];
        $this->authorInput = $user['name'];
        $this->showList = false;
    }

    // public function mount() {

    // }

    public function save() {
        Book::create([
            'title' => $this->title,
            'user_id' => $this->userId
        ]);
        
        return redirect()->to(route('books.list'));
    }

    public function render()
    {
        return view('livewire.book-component');
    }
}
