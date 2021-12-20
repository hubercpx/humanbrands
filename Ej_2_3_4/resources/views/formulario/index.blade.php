<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->


</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <form id="formulario">

            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer01">Nombre</label>
                    <input type="text" name="nombre" class="form-control is-valid" id="validationServer01" value="Mark"
                        required>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationServer02">DPI</label>
                    <input type="text" name="dpi" class="form-control is-valid" id="validationServer02"
                        value="3428 05452 2205" required>

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer03">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control is-valid" id="validationServer02" required>

                </div>
            </div>

            <button class="btn btn-primary" onclick="post();">Guardar</button>
        </form>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">DPI</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->dpi}}</td>
            <td>{{$cliente->fecha_nacimiento}}</td>
            <td><a href="{{route('delete.cliente', $cliente->id)}}" class="btn btn-danger">Eliminar</a></td>
        </tr>
    @endforeach

  </tbody>
</table>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script>

function post(path, parameters) {
    console.log('entro');
    var form = $('#formulario');
    console.log(form);

    form.attr("method", "post");
    form.attr("action", '/cliente_create');

    $.each(parameters, function(key, value) {
        var field = $('<input></input>');

        field.attr("type", "hidden");
        field.attr("name", key);
        field.attr("value", value);

        form.append(field);
    });


    $(document.body).append(form);
    form.submit();
}
</script>

</html>
