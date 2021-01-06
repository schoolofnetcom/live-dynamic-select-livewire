<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Select extends Component
{
    public $state;
    public $listOfStates = [];
    public $showList = false;
    public $users = [];
    public $authorInput = "";

    public function updatedAuthorInput($value) {
        $this->users = User::where("name", "like", "%{$this->authorInput}%")->get();
    }

    public function setId($id) {
        dd($id);
    }

    public function mount() {
        // $client = new Client();
        // $request = new \GuzzleHttp\Psr7\Request('GET', 'https://jsonplaceholder.typicode.com/todos');
        // $promise = $client->sendAsync($request)->then(function ($response) {
        //     $this->listOfStates = $response->getBody();
        // });
        // $promise->wait();
        // $response = $client->get('https://jsonplaceholder.typicode.com/todos');
        // $res = $client->request("GET", "https://jsonplaceholder.typicode.com/todos");
        // dd($response->getBody()->getContents());
    }

    public function render()
    {
        return view('livewire.select');
    }
}
