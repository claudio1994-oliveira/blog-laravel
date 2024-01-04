<?php

namespace App\Livewire\Post;


use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $posts = auth()->user()->posts;
        return view('livewire.post.index', compact('posts'));
    }
}
