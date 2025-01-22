<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    // public function updatePassword(Request $request)
    // {
    //     $user = Auth::user();

    //     // Validate the password input
    //     $request->validate([
    //         'current_password' => ['required'],
    //         'password' => ['required', 'confirmed', 'min:8'],
    //     ]);

    //     // Check if the current password is correct
    //     if (!Hash::check($request->current_password, $user->password)) {
    //         return back()->withErrors(['current_password' => 'The current password is incorrect.']);
    //     }

    //     // Update the password
    //     $user->password = Hash::make($request->password);
    //     $user->save();

    //     return back()->with('status', 'Password updated successfully!');
    // }

 
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            // 'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
