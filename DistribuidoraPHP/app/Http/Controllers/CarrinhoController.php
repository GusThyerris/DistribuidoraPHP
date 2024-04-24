<?php

namespace App\Http\Controllers;

use App\Models\carrinho;
use App\Http\Requests\StorecarrinhoRequest;
use App\Http\Requests\UpdatecarrinhoRequest;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function showCarrinhoDeCompras(Request $request){
        return view("carrinhoDeCompras");
    }

    public function mostrarItensCarrinho(carrinho $id){

        return view('carrinhoDeCompras',['itensCarrinho' => $id]);
    }

    public function  gerenciarItensCarrinho(Request $request){
        $dadosCarrinho = carrinho::query();
        $dadosCarrinho->when($request->nomeProd,function($query,$valor){
            $query->where('nomeProd','like','%'.$valor.'%');
        });
        $dadosCarrinho = $dadosCarrinho->get();

        return view('carrinhoDeCompras',['itensCarrinho' => $dadosCarrinho]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecarrinhoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(carrinho $carrinho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(carrinho $carrinho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecarrinhoRequest $request, carrinho $carrinho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(carrinho $carrinho)
    {
        //
    }
}
