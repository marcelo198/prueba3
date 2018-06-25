<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" ba>
      <a class="navbar-brand" href="#">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Modificar</a>
            <a class="nav-item nav-link" href="#">Crear</a>
            <a class="nav-item nav-link" href="#">Listar</a>
            <a class="nav-item nav-link" href="#">Eliminar</a>
          </div>
        </div>
    </nav>
    <div class="container">
      <div class="form-group">
        <form>
            <div class="form-group">
              <label for="">Genero</label>
              <div class="form-group form-check">
                <select name="genero">
                  <option value="m">Seleccione una opción</option>
                   <option value="m">Masculino</option>
                   <option value="f">Femenino</option>
                   <option value="o">otro</option>
                </select>
             </div>
              <label for="">Situacion sentimental </label>
              <input type="email" class="form-control" id="situacion" aria-describedby="emailHelp" placeholder="Ingrese su situacion sentimental">

              <label for="">Fecha de nacimiento </label>
                <form>
                <div>
                  <input type="date" id="fecha" name="fnac">
                </div>
              </form>
              <label for="">Email </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">Nunca entregues información en sitios desconocidos.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>

  </body>
</html>
