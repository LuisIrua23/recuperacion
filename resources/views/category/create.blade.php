<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear</title>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>