<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrar Cliente</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style type="text/css"> 
    .bg{
        background-color: rgb(241, 242, 247);
    }
    .card{
        text-align: center;
        font-family: "Open Sans", sans-serif;
        color: #435466;
        font-size: 20px;
        box-sizing: border-box;
        background-color: #f5f5f5;
        background: linear-gradient(to right, rgba(235,240,241,1) 0%,rgba(235,240,241,1) 21%,rgba(255,255,255,0) 100%);
        
    }
    .tab-content{
        padding-left: 0px;
        padding-top: 0px;
    }

</style>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                <?=
                    $this->Html->image("logo.png");
                ?> 
                </div>
                <div class="card-body">
                    <div class="custom-tab">

                        <nav>
                            <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="false">Cliente</a>
                                <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Tienda</a>                   
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                <div class="login-form">
                                    <form>
                                        <div class="form-group">
                                            <label>Nombre y Apellido</label>
                                            <input type="text" class="form-control" placeholder="Luis Carlos Pérez">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de nacimiento</label>
                                            <input name="fecha" type="date" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input type="tel" class="form-control" placeholder="011-4267893">
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre de usuario</label>
                                            <input type="email" class="form-control" placeholder="ejemplo@email.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" minlength="6" class="form-control" placeholder="******">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirmar contraseña</label>
                                            <input type="password" minlength="6" class="form-control" placeholder="******">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Aceptar Terminos y Politicas
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrarse</button>
                                        <div class="register-link m-t-15 text-center">
                                            <p>Si estas registrado?<a href="#"> Iniciar Sesión</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                <div class="login-form">
                                    <form>
                                        <div class="card">
                                            <strong>TIENDA</strong>
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre de la tienda</label>
                                            <input type="text" class="form-control" placeholder="Tienda">
                                        </div>



                                        <div class="form-group">
                                            <label>Direccion de la tienda</label>
                                            <input type="text" class="form-control" placeholder="C°: Ing. González N°: 468 (Oeste)">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Horario de apertura</label>

                                                <input type="time" name="hora" value="11:45:00" max="22:30:00" min="10:00:00" step="1">

                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Horario de cierre</label>

                                                <input type="time" name="hora" value="11:45:00" max="22:30:00" min="10:00:00" step="1">

                                            </div>
                                        </div>
                                        <div class="card">
                                            <strong>USUARIO</strong>
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre y Apellido</label>
                                            <input type="text" class="form-control" placeholder="Luis Carlos Pérez">
                                        </div>

                                        <div class="form-group">
                                            <label>Fecha de nacimiento</label>
                                            <input name="fecha" type="date" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input type="tel" class="form-control" placeholder="011-4267893">
                                        </div>

                                        <div class="form-group">
                                            <label>Nombre de usuario</label>
                                            <input type="email" class="form-control" placeholder="ejemplo@email.com">
                                        </div>

                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" minlength="6" class="form-control" placeholder="******">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirmar contraseña</label>
                                            <input type="password" minlength="6" class="form-control" placeholder="******">
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Aceptar los terminos y politicas
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Acceder</button>

                                        <div class="register-link m-t-15 text-center">
                                            <p>Si estas registrado? <a href="#"> Iniciar sesión</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
