<?php

namespace App\Http\Controllers;

use App\Chamado;
use Illuminate\Auth\Access\Gate as AccessGate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chamados = Chamado::all();

        return view('home',compact('chamados'));
    }

    public function detalhe($id)
    {

        $chamado = Chamado::find($id);

        // if(Gate::denies('ver-chamado',$chamado)){
        //     abort(403,"Não autorizado");
        // }
        // if(Gate::allows('ver-chamado',$chamado)){
        //     return view('detalhe', compact('chamado'));
        // }
        return view('detalhe', compact('chamado'));
    }
}
