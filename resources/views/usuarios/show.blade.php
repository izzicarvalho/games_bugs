<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar usuarios</title>
</head>
<body>
        <label for="login">Login</label><br />
        <input type="text" name="login" value="{{$usuario->login}}"><br />

        <label for="senha">Senha</label><br/>
        <input type="text" name="senha" value="{{$usuario->senha}}"><br />

       
        <label for="tipo">Tipo</label><br/> <select name="tipo">
            <option value="administrador">Administrador</option>
            <option value="comum">Comum</option>
          </select><br/>


        <button>Salvar</button>
    </form>
</body>
</html>