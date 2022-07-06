<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="col-6" action="/" method="POST">
        @csrf
        <label for="">modelo</label>
        <input type="text" name="modelo" id="">

        <label for="">marca</label>
        <input type="text" name="marca" id="">

        <label for="">precio</label>
        <input type="number" name="precio" id="">

        <label for="">stock</label>
        <input type="number" name="stock" id="">

        <input type="submit" value="Guardar">


    </form>
</body>
</html>
