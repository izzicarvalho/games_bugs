<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar usuario</title>
</head>
<body>
    <form action="{{route('registrar_usuario')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="login">Login</label><br />
        <input type="text" name="login"><br />

        <label for="senha">Senha</label><br/>
        <input type="text" name="senha"><br />

        <label for="tipo">Tipo de Usuario</label><br/> <select name="tipo">
            <option value="Administrador">Administrador</option>
            <option value="Outro">Outro</option>s
          </select><br/>

        <button>Salvar</button>
    </form>
</body>
</html>