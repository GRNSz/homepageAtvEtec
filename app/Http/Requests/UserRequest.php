<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function authorize(): bool 
    { 
        return true; 
    } 
 
    public function rules(): array 
    { 
 
        $userId = $this->route('user'); 
 
        return [ 
            'name' => 'required', 
            'email' => 'required|email|unique:users,email,' . ($userId ? 
$userId->id : null), 
            'password' => 'required|min:6', 
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'O e-mail já está cadastrado.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
        ];
    }
    public function destroy(User $user) 
{ 
 
    // Apagar o registro no BD 
    $user->delete();
     // Redirecionar o usuário, enviar a mensagem de sucesso 
     return redirect()->route('user.index')->with('success', 'Usuário 
     apagado com sucesso!'); 
      
     }
}