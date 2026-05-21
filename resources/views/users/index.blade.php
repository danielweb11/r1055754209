<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center">
        <h1>Formulario para crear usuario</h1>

        <form action="{{route('users.store')}}" method="post">
            @csrf
            <div class="input-group mb-3">
                <label class="input-group-text">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text">Correo</label>
                <input type="email" name="correo" class="form-control">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text">Contraseña</label>
                <input type="password" name="contrasenia" class="form-control">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text">Salario</label>
                <input type="number" name="salario" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>


        <table class="table table striped">
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>SALARIO</th>
            <th>Opciones</th>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->salario}}</td>
                    <td>
                        <a href="" class="btn btn-warning">Editar</a>

                        <form action="" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
        
    </table>
    </div>
    
</body>
</html>