<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar/Atualizar Usuarios</title>
</head>
<body>
        <form action="{{route('alterar_usuario', ['id' => $usuario->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="login">Login</label><br />
        <input type="text" name="" value="{{$usuario->login}}"><br />

        <label for="senha">Senha</label><br/>
        <input type="text" name="senha" value="{{$bug->senha}}"><br />

        <label for="tipo">Tipo</label><br/> <select name="tipo">
            <option value="administrador">Administrador</option>
            <option value="comum">Comum</option>
          </select><br/>

          <button>Salvar</button>
    </form>
</body>
</html>