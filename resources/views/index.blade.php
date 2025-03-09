<form method="POST" action="{{ route('user.destroy', ['user' => $user
>id]) }}" 
    class="d-inline"> 
    @csrf 
    @method('delete') 
    <button type="submit" class="btn btn-danger btn-sm" 
        onclick="return confirm('Tem certeza que deseja apagar este 
registro?')">Apagar</button> 
</form> 