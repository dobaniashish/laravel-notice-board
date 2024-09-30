<?php

namespace App\Http\Controllers\Admin;

use App\Events\StoryApproved;
use App\Http\Controllers\Controller;
use App\Mail\StoryNew;
use App\Models\Story;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class StoryController extends Controller
{
    public function new(): View
    {
        return view('admin.story-new');
    }

    public function save(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'min:4', 'max:255'],
            'description' => ['required', 'min:4'],
        ]);

        $user = $request->user();

        $story = $user
            ->stories()
            ->create($validated);

        Mail::to($user->email)->send(new StoryNew($story));

        return redirect()->route('admin-story-new')->with('success', 'Story saved.');
    }

    public function approve(Request $request, Story $story): View|RedirectResponse
    {
        if ($request->isMethod('post')) {

            if ($story->status) {
                return redirect()->route('admin-story-approve', $story->id)->with('success', 'Story is already approved.');
            }

            $story->status = 1;
            $story->save();

            StoryApproved::dispatch($story);

            return redirect()->route('admin-story-approve', $story->id)->with('success', 'Story approved.');
        }

        return view('admin.story-approve', [
            'story' => $story,
        ]);
    }
}
