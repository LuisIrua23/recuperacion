<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
    
    <center>
        <h1>Categorias</h1>
        <form action="{{ route('category.update', $category) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('put')
            <label>
                Codigo:
                <br>
                <input type="text" name="codigo" value="{{ old('codigo', $category->codigo) }}">
            </label>
            <br>
            <label>
                Iva:
                <br>
                <input type="text" name="iva" value="{{ old('iva', $category->iva) }}">
            </label>
            <br>_
            <label>
                Descripcion:
                <br>
                <input type="text" name="descripcion" value="{{ old('descripcion', $category->descripcion) }}">
            </label>
            
            <br>
            <br>
            <br>
            
            <button type="submit">Enviar Formulario:</button>
            </form>
    </center>

</body>
</html>