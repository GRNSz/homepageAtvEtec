<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Se você não estiver implementando autorização personalizada
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|min:6',
            'confirmar_senha' => 'required|same:senha', // Garante que a confirmação de senha seja igual à senha
            'telefone' => 'nullable|string|max:20',
            'endereco' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:255',
            'estado' => 'nullable|string|max:2',
            'cep' => 'nullable|string|max:10',
        ];
    }

    public function messages()
    {
        return [
            'confirmar_senha.same' => 'As senhas não coincidem.',
        ];
    }
}
