<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'stories' => Story::where('status', 1)->latest()->paginate(10),
        ]);
    }
}
