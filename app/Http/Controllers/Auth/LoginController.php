<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function dashboard(): RedirectResponse
    {
        switch (Auth::user()->role_id) {
            case Role::ADMIN:
                return redirect()->route('admin.dashboard');
                break;
            case Role::MANAGER:
                return redirect()->route('manager.dashboard');
                break;
            case Role::CASHIER:
                return redirect()->route('cashier.dashboard');
                break;
            case Role::ACCOUNTANT:
                return redirect()->route('accountant.dashboard');
        }
    }
}
