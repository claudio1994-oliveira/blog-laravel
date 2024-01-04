<?php

namespace App\Livewire\Post;

use Illuminate\View\View;
use Livewire\Component;

abstract class PostBase extends Component
{
    public array $fields;

    protected array $rules = [
        'fields.title' => 'required',
        'fields.body' => 'required'
    ];

    protected array $messages = [
        'fields.*' => 'The field is required.'
    ];
    
    public function mount(): void
    {
        $this->fields = [];
    }
    
    abstract function render(): View;
}