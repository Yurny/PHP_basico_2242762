<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" />
    <title>Buscador</title>
</head>
<body>
    <form class="form-horizontal"
    method="POST"
    action="{{url('buscar')}}">
    @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Buscador en diferentes motores de busqueda</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="termino">1.Ingrese el termino a buscar:</label>
          <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="Termino" class="form-control input-md">

          </div>
        </div>



        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">2.Seleccione motor de búsqueda</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="Motores-0" value="1" checked="checked">
              Google
            </label>
            </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="Motores-1" value="2">
              Bing
            </label>
            </div>
            <div class="radio">
                <label for="motores-1">
                  <input type="radio" name="motores" id="Motores-1" value="3">
                   Duck Duck Go
                </label>
                </div>
                <div class="radio">
                    <label for="motores-1">
                      <input type="radio" name="motores" id="Motores-1" value="4">
                       Youtube
                    </label>
                    </div>
                    <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="Motores-1" value="5">
                           Qwant
                        </label>
                        </div>
                    <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="Motores-1" value="6">
                            Lukol
                        </label>
                        </div>
                    <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="Motores-1" value="7">
                            MetaGer
                        </label>
                        </div>
                    <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="Motores-1" value="8">
                            Yahoo!
                        </label>
                        </div>
                    <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="Motores-1" value="9">
                            Ask
                        </label>
                        </div>
                    <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="Motores-1" value="10">
                            Twitch
                        </label>
                        </div>

          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
           <label class="col-md-4 control-label" for="boton"></label>
           <div class="col-md-4">
             <button type="submit" id="boton" name="boton" class="btn btn-info">Buscar</button>
           </div>
         </div>
        </fieldset>
        </form>
</body>
</html>
