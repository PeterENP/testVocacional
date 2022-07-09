<!-- Parra Torres Jorge Isaac 
Luis Angel de la Mora Gonzalez-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login/css/util.css">
    <link rel="stylesheet" type="text/css" href="../login/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="../redessociales/redes.css">
    <link rel="stylesheet" href="CSSRegistro.css">
    <link rel="stylesheet" href="../login/css/util.css">
    <link rel="stylesheet" href="../login/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" >
            <figure id="escudo">
                <img src="../escudo/escudo.png" alt="escudo" id="escudo">
            </figure>
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            
            

                <form class="login100-form validate-form" action="../login/insertar.php" name="formulario" method="GET">
                    <!--documento de insercion de datos insertar.php -->

                    <span class="login100-form-title p-b-49">
                        Registro
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="El nombre es requerido">
                        <span class="label-input100">Nombre(s)</span>
                        <input class="input100" type="text" name="nombre" placeholder="Nombre(s)" minlength="3"
                            maxlength="30" onkeypress="return sololetras (event)">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="El apellido es requerido">
                        <span class="label-input100">Apellido(s)</span>
                        <input class="input100" type="text" name="apellido" placeholder="Apellido(s)" minlength="3"
                            maxlength="30" onkeypress="return sololetras (event)">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="El correo es requerido">
                        <span class="label-input100">Correo</span>
                        <input class="input100" type="text" name="correo" placeholder="Correo electrónico"
                            minlength="13" maxlength="50">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" >
                        <span class="label-input100">Semestre</span>
                        <select class="input100" name="semestre">
                            <option value="" disabled selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" >
                        <span class="label-input100">Grupo</span>
                        <select class="input100" name="grupo">
                            <option value="" disabled selected></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="El turno es requerido">
                        <span class="label-input100">Turno</span><br>
                        <label>Matutino      
                            <input class="input100" style="cursor:pointer" type="radio" name="turno" value="Matutino">
                        </label>
                        <label>Vespertino
                            <input class="input100" style="cursor:pointer" type="radio" name="turno" value="Vespertino">
                        </label>
                    </div>
                
                    <!-- <div class="wrap-input100 validate-input m-b-23" data-validate="El usuario es requerido">
                        <span class="label-input100">Usuario</span>
                        <input class="input100" type="text" name="usuario" placeholder="Usuario" minlength="4"
                            maxlength="15" onkeypress="return sololetras (event)">
                    </div> -->
                    
                    <div class="wrap-input100 validate-input m-b-23" data-validate="El código es requerido">
                        <span class="label-input100">Código</span>
                        <input class="input100" type="text" name="codigo" placeholder="Código de estudiante"
                            minlength="7" maxlength="9" onkeypress="return solonumeros (event)">
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="La contraseña es requerida">
                        <span class="label-input100">Contraseña</span>
                        <input class="input100" type="password" name="contraseña" placeholder="Contraseña" minlength="9"
                            maxlength="9">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <br>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" id="btnContinuar" name="btnContinuar" value="Registrarse">
                                Registrarse
                            </button>
                        </div>
                    </div>

                    
                    
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="../login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../login/endor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../login/vendor/bootstrap/js/popper.js"></script>
    <script src="../login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../login/vendor/daterangepicker/moment.min.js"></script>
    <script src="../login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../login/js/main.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="JSRegistro.js"></script>


</body>

</html>