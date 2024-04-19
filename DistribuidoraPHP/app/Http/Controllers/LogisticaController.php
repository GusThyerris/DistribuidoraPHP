<?php

namespace App\Http\Controllers;

use App\Models\Logistica;
use App\Http\Requests\StoreLogisticaRequest;
use App\Http\Requests\UpdateLogisticaRequest;

class LogisticaController extends Controller
{

    public function showHomeLog()
    {
        return view("homeLog");
    }

    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(StoreLogisticaRequest $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Logistica $logistica)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Logistica $logistica)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateLogisticaRequest $request, Logistica $logistica)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Logistica $logistica)
    // {
    //     //
    // }
}
