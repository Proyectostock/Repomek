<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mek - Revisado</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="img/iconohead.ico">

       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>  
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Este boton despliega la barra de navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <a class="navbar-brand" href="#">Mek</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Inventario <span class="caret"> </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="laser.php">Laser</a></li>
                                <li><a href="impacto.php">Impacto</a></li>
                                <li><a href="bowe.php">Bowe</a></li>
                                <li><a href="slalom.php">Slalom</a></li>
                                <li><a href="revisado.php">Revisado</a></li>
                                <li><a href="despacho.php">Despacho</a></li>
                            </ul> 
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Produccion <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Laser</a></li>
                                <li><a href="#">Impacto</a></li>
                                <li><a href="#">Bowe</a></li>
                                <li><a href="#">Slalom</a></li>
                                <li><a href="#">Revisado</a></li>

                            </ul>
                        </li>

                        <li><a href="#">Proveedores</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Buscar">
                        </div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Iniciar sesion</a></li>
                        <li><a href="#">Registro</a></li>
                    </ul>

                </div>
            </div>


        </nav>

  
<div class="container" style="
            margin-top: 39px;
            padding-top: 0px;
            height: 250px;
            padding-bottom: 0px;
            margin-bottom: 0px;
        ">
            <div class="jumbotron">
                <h1>Revisado</h1>
                
            </div>
        </div>

        
     <form class="form-horizontal">
        <fieldset>

        <!-- Form Name -->


        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="selectbasic">Operaria</label>
          <div class="col-md-4">
            <select id="selectbasic" name="selectbasic" class="form-control">
              <option value="1">NombreRevisado1</option>
              <option value="2">NombreRevisado2</option>
              <option value="">NombreRevisado3</option>
              <option value="">NombreRevisado4</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="insumo_revisado">Insumos de revisado</label>
          <div class="col-md-4">
            <select id="insumo_revisado" name="insumo_varios" class="form-control">
              <option value="1">Bandas elasticas</option>
              <option value="2">Bolsas trasparentes</option>
              <option value="3">Cintas de lomo negro</option>
            </select>
          </div>
        </div>
              

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="tapas_revisado">Tapas</label>
          <div class="col-md-4">
            <select id="tapas_revisado" name="tapas_revisado" class="form-control">
                <option value="1">Credicoop</option>
                <option value="2">Nación</option>
                <option value="3">Provincia</option>
                <option value="4">Ciudad</option>
                <option value="5">Chubut</option>
                <option value="6">Chaco</option>
                <option value="7">Industrial</option>
                <option value="8">Frances</option>
                <option value="9">Patagonia</option>
                <option value="10">Rio Corporativa</option>
                <option value="11">Rio Select</option>
                <option value="12">Rio Infinity</option>
                <option value="13">Rio Infinity gold</option>
                <option value="14">Rio Advanced</option>
                <option value="15">Piano</option>
                <option value="16">Comafi</option>
                <option value="17">Banco de Valores</option>
                <option value="18">Caja de valores</option>
                <option value="19">Hipotecario</option>
                <option value="20">Finansur</option>
                <option value="21">Columbia</option>
                <option value="22">Corrientes</option>
                <option value="23">Galicia</option>
                <option value="24">Galicia Cuenta Corriente</option>
                <option value="25">Galicia Eminent</option>
                <option value="26">Galicia Eminent cuenta corriente</option>

            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="contratapas_revisado">Contratapas</label>
          <div class="col-md-4">
            <select id="contratapas_revisado" name="contratapas_revisado" class="form-control">
                <option value="1">Credicoop</option>
                <option value="2">Nación</option>
                <option value="3">Provincia</option>
                <option value="4">Ciudad</option>
                <option value="5">Chubut</option>
                <option value="6">Chaco</option>
                <option value="7">Industrial</option>
                <option value="9">Patagonia</option>
                <option value="10">Rio Corporativa</option>
                <option value="11">Rio Select</option>
                <option value="12">Rio Infinity</option>
                <option value="13">Rio Infinity gold</option>
                <option value="14">Rio Advanced</option>
                <option value="15">Piano</option>
                <option value="17">Banco de Valores</option>
                <option value="18">Caja de valores</option>
                <option value="19">Hipotecario</option>
                <option value="20">Finansur</option>
                <option value="21">Columbia</option>
                <option value="22">Corrientes</option>
                <option value="23">Genericas(Blancas)</option>
            </select>
          </div>
        </div>   
                
        <div class="form-group">
          <label class="col-md-4 control-label" for="planillas_revisado">Planillas</label>
          <div class="col-md-4">
            <select id="planillas_revisado" name="planillas_revisado" class="form-control">
                <option value="1">Planilla de Provincia</option>
                <option value="2">Planilla y Calendario de Rio</option>
                <option value="3">Planilla y Calendario de Tierra del fuego</option>
                <option value="4">Planilla y Calendario de Francés</option>
                <option value="5">Planilla Generica</option>
            </select>
          </div>      
        </div>
        
            

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="cantidad_revisado">Cantidad</label>  
          <div class="col-md-2">
          <input id="cantidad_revisado" name="cantidad_revisado" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
         <label class="col-md-4 control-label" for="enviar"></label>
          <div class="col-md-4">
            <button id="enviar" name="enviar" class="btn btn_primary">Enviar</button>
          </div>
        </div>

        </fieldset>
        </form>





        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>