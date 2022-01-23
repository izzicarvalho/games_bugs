<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar/Atualizar Bugs</title>
</head>
<body>
        <form action="{{route('alterar_bug', ['id' => $bug->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="titulobug">Título</label><br />
        <input type="text" name="titulobug" value="{{$bug->titulobug}}"><br />

        <label for="detalhesbug">Detalhes</label><br/>
        <input type="text" name="detalhesbug" value="{{$bug->detalhesbug}}"><br />

        <label for="caminhoimg">Imagem</label><br/>
        <input type="file" name="caminhoimg"><br />

        <label for="tipo">Tipo</label><br/> <select name="tipo">
            <option value="visual">Visual</option>
            <option value="sonoro">Sonoro</option>
            <option value="glitch">Glitch</option>
            <option value="financeiro">Financeiro</option>
            <option value="fisico">Fisico</option>
          </select><br/>


        <!--<label for="status">Status</label><br/>
        <select name="status">
            <option value="aberto">Aberto</option>
            <option value="pendente" selected>Em correção</option>
            <option value="corrigido">Corrigido</option>
          </select><br/>-->

        <button>Salvar</button>
    </form>
</body>
</html>