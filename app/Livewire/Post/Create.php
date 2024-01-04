<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public array $fields = [];

    protected array $rules = [
        'fields.title' => 'required',
        'fields.body' => 'required'
    ];

    protected array $messages = [
        'fields.*' => 'The field is required.'
    ];

    public function render()
    {
        return view('livewire.post.create');
    }

    public function store()
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
