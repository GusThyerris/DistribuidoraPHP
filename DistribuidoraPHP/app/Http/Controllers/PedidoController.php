<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;


class PedidoController extends Controller
{

    public function cadPedido(Request $request){
        //dd($request);
        $dadosValidos = $request->validate([
            'cepPed' => 'string|required',
            'ruaPed' => 'string|required',
            'bairroPed' => 'string|required',
            'cidadePed' => 'string|required',
            'ufPed' => 'string|required',
            'numeroPed' => 'string|required',
            'complPed' => 'string|required',
            'quantPed' => 'integer|required',
            'telefonePed' => 'required',
            'cpfPed' => 'string|required',
        ]);
        
//dd($dadosValidos);
         Pedido::create($dadosValidos);
         return Redirect::route('homeClie');
    }

    public function mostrarGerenciarPedidosId(Pedido $id){

        return view('gerenciarPedidos',['registrosPedidos' => $id]);
    }

    public function  gerenciarPedidos(Request $request){
        // dd($request);
        $dadosPedidos = Pedido::query();
        $dadosPedidos->when($request->cpfPed,function($query,$valor){
            $query->where('cpfPed','like','%'.$valor.'%');
        });
        $dadosPedidos = $dadosPedidos->get();

        return view('pedidosEmAndamento',['registrosPedidos' => $dadosPedidos]);
    }



}
