<?php

namespace App\Http\Controllers\Accountant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AccountantController extends Controller
{
    public function dashboard(): \Inertia\Response
    {
        return Inertia::render('Accountant/Dashboard');
    }
}
