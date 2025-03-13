<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        // Retorna a view com todos os usuários cadastrados
        $users = User::all();
        return view('users.index', compact('users'));
    }
    
    public function create()
    {
        // Retorna a view do formulário de cadastro
        return view('cadastro');
    }

    public function store(UserRequest $request)
    {
        // Valida os dados via UserRequest (validado automaticamente)

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

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        // Verificar se o usuário atual é o mesmo que está sendo editado
        if (auth()->id() != $id) {
            return redirect()->route('usuario')->with('error', 'Você não tem permissão para editar este perfil.');
        }
        
        return view('menudousuario', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,
            'telefone' => 'nullable|string|max:20',
            'endereco' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:100',
            'estado' => 'nullable|string|max:2',
            'cep' => 'nullable|string|max:9',
        ]);

        $user = User::findOrFail($id);
        $user->update($validated);

        return redirect()->route('menudousuario')->with('success', 'Perfil atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        // Verificar se o usuário atual é o mesmo que está sendo excluído
        if (auth()->id() != $id) {
            return redirect()->route('usuario')->with('error', 'Você não tem permissão para excluir esta conta.');
        }
        
        $user->delete();
        Auth::logout();
        
        return redirect('/')->with('success', 'Sua conta foi excluída com sucesso.');
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'senha_atual' => 'required',
            'nova_senha' => 'required|min:6',
            'confirmar_nova_senha' => 'required|same:nova_senha',
        ]);

        $user = User::findOrFail($id);

        if (!Hash::check($request->senha_atual, $user->senha)) {
            return back()->with('error', 'A senha atual está incorreta.');
        }

        $user->senha = Hash::make($request->nova_senha);
        $user->save();

        return redirect()->route('menudousuario')->with('success', 'Senha alterada com sucesso!');
    }
}
