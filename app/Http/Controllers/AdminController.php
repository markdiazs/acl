<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $caminhos = [
            'admin' => [
                'url' => '/',
                'titulo' => 'admin'
            ],
            'usuarios' => [
                'url' => '',
                'titulo' => 'usuários'
            ]
        ];
        return view('admin.index',compact('caminhos'));
    }
}
