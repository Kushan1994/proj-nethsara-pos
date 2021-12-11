<?php

namespace App\Http\Controllers;

use App\Http\Requests\Supplier\StoreSupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SupplierController extends Controller
{

    public function index()
    {
        //
    }

    public function create(): \Inertia\Response
    {
        $this->authorize('create',Supplier::class);

        return Inertia::render('Supplier/Create');
    }

    public function store(StoreSupplierRequest $request)
    {
        $this->authorize('create',Supplier::class);

        Supplier::create($request->validated());
    }

    public function show(Supplier $supplier)
    {
        //
    }

    public function edit(Supplier $supplier)
    {
        //
    }

    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    public function destroy(Supplier $supplier)
    {
        $this->authorize('delete',$supplier);

        $supplier->deleteOrFail();
    }
}
