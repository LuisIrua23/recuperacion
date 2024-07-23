<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>