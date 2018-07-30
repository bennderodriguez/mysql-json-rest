<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>AXA | RockJS Framework®</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="apple-mobile-Web-app-title" content="RockJS Framework®">
        <meta name="author" content="RockJS Framework®|Focus On Services">
        <meta name="keywords" content="Soporte tecnico,it,ti,soluciones,datacenter,consultoria,centro de datos,empresarial,administracion,proyectos,soporte multimarca, Focus On Services es un proveedor global de servicios con presencia en más de 16 países de Latinoamérica con un amplio portafolio de servicios en Tecnologías de Información y con los mejores tiempos de respuesta de la industria, Software, Desarrollo, app, apps, android, IOS, 
              Transformación digital, Software on demand, Software a la medida, Servicios de desarrollo de software, fabrica de software, Progress, 4GL, ABL, app server, PAS, Servicios Web Síncronos,protocolos REST JSON XML">
        <meta name="description" content="La forma más rápida de adoptar la Transformación Digital">

        <!-- Favicon -->
        <link href="asset/images/favicon.ico" rel="icon">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">

        <!-- JQuery Export datatable csv,excel pdf -->
        <link rel="stylesheet" href="asset/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="asset/css/buttons.dataTables.min.css">
        <style>
            body {
                display: table;
                position: relative;
                background-image: url(asset/images/back.png);
                background-size: cover;
                background-attachment: fixed;
                padding: 0px 0;
                color: #fff;
                width: 100%;
                height: 100vh;
            }
            .panel {
                margin-bottom: 20px;
                background-color: #ffffff5c;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .panel-default>.panel-heading {
                color: #3873ae;
                background-color: #f5f5f5c2;
                border-color: #ddd;
                text-align: center;
            }

            .tops{
                margin-top: 5em;
                margin-left: auto !important;
                margin-right: auto;

            }
            .loader {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url(asset/images/loader.gif) 50% 50% no-repeat rgb(249,249,249);
                opacity: .8;
            }
        </style>
    </head>
    <body>
        <div class="loader"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-5 center-block" style="margin-left:  auto; margin-right: auto;">
                    <div class="login-panel panel panel-default tops center-block">

                        <div class="panel-heading"><div><img src="asset/images/axa.svg" width="20%"></div>
                            <h3 class="panel-title">Portal Vida Integral</h3><br>
                        </div>
                        <div class="panel-body">
                            <form role="form" id="contactForm" data-toggle="validator" class="shake" autocomplete="off">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Número de cliente" value="1234" id="cliente_vida" name="cliente_vida" type="number" maxlength="9" min="1" autofocus required data-error="Por favor ingrese el núemro de cliente">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" value="1234" id="pass_cv" name="pass_cv" type="password" required data-error="Por favor ingrese el password">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type="submit" id="form-submit" class="btn btn-primary pull-right float-right">Ingresar</button><br>
                                </fieldset>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col">
                                    <div id="msgSubmit" class="h4 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>                                    
                            </div>
                            <div class="row">
                                <div class="col-sm-6 text-muted">
                                    <p style="font-size: 10px">¿Olvidó su contraseña? <br>
                                        ¿Está bloqueado su acceso?
                                    </p>
                                </div>
                                <div class="col-sm-6"><a href="#" class="btn-default float-right align-bottom">Haga click aquí</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <img src="asset/images/logo.png" width="15%"></img><p class="text-dark">Power by Focus On Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>