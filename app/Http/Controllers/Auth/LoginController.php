<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LoginController extends Controller {

    public function index() {
        return Inertia::render('Auth/Login', [
            'status' => session('status')
        ]);
    }

    public function store(LoginRequest $request):RedirectResponse {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(route('dashboard.index'));
    }

    public function destroy(Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('/'));
    }
}
