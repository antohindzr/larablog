<?php

namespace App\Http\Livewire;
use App\Models\User as BlogPost;
use App\Models\Post;
use App\Models\Subscription;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class User extends Component
{
    public $user;
    public $post;
    public $subscription;
    
    
    public $postraw;
   
        

    public function mount($id){
        $this->user = BlogPost::where('id', $id)->first();
        $this->post = Post::all()->where('user_id', '=', $this->user->id);
        $this->subscription=Subscription::all()->where('user_id', '=', $this->user->id);
    }
    
    public function render()
    {   
        
        return view('livewire.user', [
            'posts' => $this->post,
            'subscriptions' => $this->subscription,
            'postsubs' =>         $postsubs=DB::table('posts')
            ->join('subscriptions', 'posts.user_id', '=', 'subscriptions.subscription_id')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->where('subscriptions.user_id', $this->user->id)
            ->select('posts.*', 'users.name')
            ->latest()
            ->paginate(10),


            'namesubs' => $namesubs=DB::table('users')
            ->join('subscriptions', 'users.id', '=', 'subscriptions.subscription_id')
            ->where('subscriptions.user_id', $this->user->id)
            ->select('users.id', 'users.name')
            ->paginate(5),
        ])
                ->extends('layouts.app')
                ->section('content');
    }
}
