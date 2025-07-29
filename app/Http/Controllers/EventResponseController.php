<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventResponseController extends Controller
{
    public function respond(Request $request, Event $event)
    {
        $validated = $request->validate([
            'response' => ['required', Rule::in(['going', 'not_going', 'maybe'])],
        ]);

        $user = $request->user();

        // Check if the user already responded
        if ($event->users()->where('user_id', $user->id)->exists()) {
            $event->users()->updateExistingPivot($user->id, ['response' => $validated['response']]);
        } else {
            $event->users()->attach($user->id, ['response' => $validated['response']]);
        }

        return back()->with('status', 'Tvoj odgovor je bil posodobljen.');
    }
}
