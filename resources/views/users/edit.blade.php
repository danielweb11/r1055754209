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
        <h1>Vista para Actualizar usuario</h1>

        <form action="{{route('users.update', $user->id)}}" method="post">
            @csrf
            @method('put')
            <div class="input-group mb-3">
                <label class="input-group-text">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$user->name}}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text">Correo</label>
                <input type="email" name="correo" class="form-control" value="{{$user->email}}">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text">Contraseña</label>
                <input type="password" name="contrasenia" class="form-control" value="{{$user->password}}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text">Salario</label>
                <input type="number" name="salario" class="form-control" value="{{$user->salario}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>


        
    </div>
    
</body>
</html>