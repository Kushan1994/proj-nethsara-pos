<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ManagerController extends Controller
{
    public function dashboard(): \Inertia\Response
    {
        return Inertia::render('Manager/Dashboard');
    }
}
