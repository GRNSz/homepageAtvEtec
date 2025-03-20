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

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,
            'telefone' => 'nullable|string|max:20',
            'endereco' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:100',
            'estado' => 'nullable|string|max:2',
            'cep' => 'nullable|string|max:9',
        ]);

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

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/')->with('success', 'Logout realizado com sucesso!');
    }
    
    public function CRUD()
    {
        // Retorna a view do CRUD
        return view('crud');

        // Retorna a view com todos os usuários cadastrados
        $users = User::all();
        return view('users.index', compact('users'));

        $user = User::OrderBy('id', 'desc')->paginate(10);
        return view('users.index', compact('crud', $user));

    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('nome', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }
    public function searchByEmail(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('email', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }
    public function searchByPhone(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('telefone', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }
    public function searchByAddress(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('endereco', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }
    public function searchByCity(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('cidade', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }
    public function searchByState(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('estado', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }
    public function searchByZip(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('cep', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }
    public function searchByDate(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('created_at', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }
    public function searchByUpdatedAt(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('updated_at', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }
    public function searchById(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('id', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }
    public function searchByName(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('nome', 'LIKE', "%{$query}%")->get();
        return view('users.index', compact('users'));
    }

}
