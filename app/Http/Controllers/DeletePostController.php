<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DeletePostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Post $post)
    {
        try {
            $post->delete();
            
            session()->flash('success', 'Post successfully deleted.');
            
            return to_route('dashboard');
        } catch (\Exception $e){
            session()->flash('error', 'An error occurred while deleting the post');

            return to_route('dashboard');
        }
    }
}
