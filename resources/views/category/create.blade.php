<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Categorias</h1>
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf {{-- token o seguridad  --}}
            <label  class="form-label">
                Codigo:
                <br>
                <input class="form-control" type="text" name="codigo"  class="form-control" required>
            </label>
            <br>
            <label  class="form-label">
                Iva:
                <br>
                <input class="form-control"  type="text" name="iva" required>
            </label>
            <br>
            <label  class="form-label">
                Descripcion:
                <br>
                <input class="form-control"  type="text" name="descripcion" required>
            </label>
            <br>
            <br><br>
            <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
        </form>
    </center>
    
</body>
</html>