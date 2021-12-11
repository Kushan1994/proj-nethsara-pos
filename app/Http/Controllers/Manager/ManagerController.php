<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\StoreSupplierRequest;
use App\Models\Supplier;
use Inertia\Inertia;

class ManagerController extends Controller
{
    public function dashboard(): \Inertia\Response
    {
        return Inertia::render('Manager/Dashboard');
    }
}
