<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir um bug</title>
</head>
<body>
        <form action="{{route('excluir_bug', ['id' => $bug->id])}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">Tem certeza que deseja excluir este bug?</label><br />        
        <input type="text" name="titulobug" value="{{$bug->titulobug}}"><br />

        <button>Sim</button>
    </form>
</body>
</html>