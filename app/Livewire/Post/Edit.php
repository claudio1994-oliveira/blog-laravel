<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
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

    public function update(): RedirectResponse|Redirector
    {
        $this->validate();

        $this->post->update($this->fields);

        session()->flash('success', 'Post successfully updated.');

        return to_route('dashboard');
    }
}
