<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Illuminate\View\View;

class Edit extends PostBase
{
    public Post $post;

    public function mount(): void
    {
        $this->fields = $this->post->toArray();
    }
    
    public function render(): View
    {
        return view('livewire.post.edit');
    }
}
