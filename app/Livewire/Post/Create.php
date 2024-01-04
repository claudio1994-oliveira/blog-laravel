<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class Create extends PostBase
{

    public function render(): View
    {
        return view('livewire.post.create');
    }

    public function store(): RedirectResponse|Redirector
    {
        $this->validate();

        Post::create([
        'user_id' => auth()->user()->id,
        ... $this->fields
        ]);

        session()->flash('success', 'Post successfully created.');

        return to_route('dashboard');
    }
}
