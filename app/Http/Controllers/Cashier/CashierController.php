<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CashierController extends Controller
{
    public function dashboard(): \Inertia\Response
    {
        return Inertia::render('Cashier/Dashboard');
    }
}
