<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\User;

class BookComponent extends Component
{
    public $users = [];
    public $showList = false;
    public $title;
    public $search;
    public $userId;
    // public $data = [
    //     "name" => "",
    //     "age" => "",
    //     "genre" => ""
    // ];

    public function updatedSearch($value) {
        $this->users = User::where("name", "like", "%{$this->search}%")->get();
        $this->showList = true;
    }

    public function setId($user) {
        $this->userId = $user["id"];
        $this->search = $user["name"];
        $this->showList = false;
    }

    public function clear() {
        // $this->search = null;
        // $this->userId = null;
        $this->reset(['search', 'userId']);
    }

    // public function clearUser() {
    //     $this->reset('data');
    // }

    public function save() {
        Book::create([
            'title' => $this->title,
            'user_id' => $this->userId
        ]);

        // $this->title = null;

        return redirect()->to(route('books.list'));
    }

    public function render()
    {
        return view('livewire.book-component');
    }
}
