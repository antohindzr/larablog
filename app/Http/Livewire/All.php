<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class All extends Component
{
    public function render()
    {
        return view('livewire.all',[
            'posts' => Post::paginate(15),
        ])
                ->extends('layouts.app')
                ->section('content');
    }
}
