<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create()
    {
        // Retorna a view do formulário de cadastro
        return view('cadastro');
    }

    public function store(UserRequest $request)
    {
        // Valida os dados via UserRequest (validado automaticamente)

        // $request->validate([
        //     'nome' => 'required|string|max:255',
        //     'email' => 'required|email|unique:users,email',
        //     'senha' => 'required|min:6|confirmed',
        //     'telefone' => 'nullable|regex:/\(\d{2}\) \d{5}-\d{4}/',
        //     'endereco' => 'nullable|string|max:255',
        //     'cidade' => 'nullable|string|max:255',
        //     'estado' => 'nullable|string|max:2',
        //     'cep' => 'nullable|string|max:10',
        // ]);

        $user = new User();
        $user->nome = $request->input('nome');
        $user->email = $request->input('email');
        $user->senha = bcrypt($request->input('senha'));
        $user->telefone = $request->input('telefone');
        $user->endereco = $request->input('endereco');
        $user->cidade = $request->input('cidade');
        $user->estado = $request->input('estado');
        $user->cep = $request->input('cep');
        $user->save();
    
        return redirect()->route('usuario')->with('success', 'Usuário cadastrado com sucesso!');

        // Verifica se a senha e a confirmação da senha são iguais
        if ($request->senha !== $request->confirmar_senha) {
            return back()->withErrors(['confirmar_senha' => 'As senhas não coincidem.']);
        }

        // Criação do usuário no banco de dados
        $user = User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
        ]);

        // Redireciona para a página de login com sucesso
        return redirect('/usuario')->with('success', 'Cadastro realizado com sucesso!');
    }

    // public function index()
    // {
    //     // Retorna a view com todos os usuários cadastrados
    //     $users = User::all();
    //     return view('usuario', compact('users'));
    // }
}
