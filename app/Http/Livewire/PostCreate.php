<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Http\Livewire\User;

class PostCreate extends Component
{
    public $saveSuccess = false;
    public $post;
    

    protected $rules = [
        'post.title' => 'required|min:6|max:20',
        'post.body' => 'required|min:6|max:140',
    ];

    public function mount(){
        $this->post = new Post;
    }

    public function savePost(){
        $this->post->user_id = 11;
        $this->post->post_id = 1111;
        $this->post->slug = Str::slug($this->post->title);
        $this->post->save();
        $this->saveSuccess = true;
    }

    public function render()
    {
        return view('livewire.post-create')
                ->extends('layouts.app')
                ->section('content');
    }
}