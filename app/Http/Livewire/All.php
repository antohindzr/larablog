<?php

namespace App\Http\Livewire;

use Livewire\Component;

class All extends Component
{
    public function render()
    {
        return view('livewire.all')
                ->extends('layouts.app')
                ->section('content');
    }
}
