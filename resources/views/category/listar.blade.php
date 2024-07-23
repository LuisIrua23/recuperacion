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
        <table class="table">
            <td>
                <h4>id category
            </td>
            <td>
                <h4>codigo
            </td>
            <td>
                <h4>iva
            </td>
            <td>
                <h4>descripcion
            </td>
            
    
    
            @foreach ($category as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->codigo }}</td>
                    <td>{{ $category->iva }} </td>
                    <td>{{ $category->descripcion }} </td>
                    <td><a href="{{ route('category.show', $category->id) }}"
                            style="text-decoration: none">Mostrar</a></td>
                    <td><a href="{{ route('category.edit', $category->id) }}" style="text-decoration: none">Editar</a></td>
                    <td>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
    
</body>
</html>