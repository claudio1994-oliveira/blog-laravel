<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public Post $post;
    public array $fields = [];

    public function mount()
    {
        $this->fields = $this->post->toArray();
    }
    public function render()
    {
        return view('livewire.post.edit');
    }
}
