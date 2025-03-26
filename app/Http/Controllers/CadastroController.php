<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function create()
    {
        return view('cadastrar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomesinst' => 'required|string|max:255',
            'tel1' => 'required|string|max:20',
            'tel2' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'campatuacao' => 'required|string|max:255',
            'descricao' => 'required|string|max:600',
        ]);

        Cadastro::create($request->all());

        return redirect('/')->with('success', 'Entidade cadastrada com sucesso!');
    }

    public function index()
{
    $cadastros = Cadastro::all();
    return view('entidades.index', compact('cadastros'));
}

}