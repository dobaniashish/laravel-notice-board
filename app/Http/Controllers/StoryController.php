<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\View\View;

class StoryController extends Controller
{
    public function index(Story $story): View
    {
        if (!$story->status) {
            abort(404);
        }

        return view('story', [
            'story' => $story,
        ]);
    }
}
