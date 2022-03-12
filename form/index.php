<!doctype html>
<html lang="en">

<head>
    <title>Formularios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
    .cabecera {
        background-color: grey;
    }
</style>

<body>

    <div class="container mt-5">
        <!-- Content here -->

        <div class="row">
            <div class="col-12 text-center cabecera">
                <h2>Formularios con php</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <form action="recibe.php" method="POST" enctype="multipart/form-data" autocomplete="off">

                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña">
                    </div>

                    <div class="form-group">
                        <label for="pasatiempos">Pasatiempo</label>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="pasatiempo[]" id="" value="gammer">
                                Gammer
                            </label>
                            <br>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="pasatiempo[]" value="cocina">
                                Cocina
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Peliculas</label>
                        <select class="custom-select" name="pelicula" id="">
                            <option selected value="">por favor seleccionar</option>
                            <option value="ciencia">Ciencia Ficción</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="drama">Drama</option>
                            <option value="accion">Acción</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" rows="3" maxlength="100"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Sexo</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="radio" name="sexo" value="masculino">
                                Masculino
                            </span>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="radio" name="sexo" value="femenino" >
                                Femenino
                            </span>

                        </div>
                    </div>

                    <div class="form-group">
                      <label for="imagen">Subir imagen</label>
                      <input type="file" class="form-control-file" name="imagen" placeholder="subir imagen" >
                   
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </div>


                </form>
            </div>
        </div>


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>