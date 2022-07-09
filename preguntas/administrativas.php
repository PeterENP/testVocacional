<!-- Parra Torres Jorge Isaac 
Luis Angel de la Mora Gonzalez-->

<?php
    // session_start();
	// $varsesion = $_SESSION['usuario'];
	// if($varsesion == null || $varsesion = ''){
	// 	echo "Usted no tiene autorización";
	// 	header("location: ../login/login.html");
	// 	die();
	// }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Orientación vocacional</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/vendor/bootstrap/css/bootstrap.min.css" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/fonts/iconic/css/material-design-iconic-font.min.css" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/vendor/animate/animate.css" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/vendor/css-hamburgers/hamburgers.min.css" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/vendor/animsition/css/animsition.min.css" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/vendor/select2/select2.min.css" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/vendor/daterangepicker/daterangepicker.css" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<!--===============================================================================================-->
</head>

<body>

<div class="limiter">
        <div class="container-login100" >
            <!-- <figure id="escudo">
                <img src="../escudo/escudo.png" alt="escudo" id="escudo">
            </figure> -->
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

				<!-- <div id="sesion">
						<h1>Bienvenido: <?php echo $_SESSION['usuario'] ?></h1>
							<h2>
								<a href="../login/cerrarsesion.php">Cerrar sesión</a>
							</h2>
				</div> -->
				
				<form class="login100-form validate-form" name="formulario" method="GET">
                    <!--documento de insercion de datos insertar.php -->
					<div id="opciones">	
                    <div id="titulo"><br>
						<h3>Orientación Vocacional</h2>
					</div>
					<div id=intro>
                        <br>
						<h4>Segunda Parte </h4><br>
                            A continuación harás lo mismo que en el ejercicio anterior, salvo que ahora jerarquizarás con la siguiente escala: <br>
                        <br> 1 = Menor Preferencia <br>
                        9 = Mayor Preferencia
                        
                    <br><br>
					</div>

                    
					<strong>1. Llevar en computadora los inventarios de una empresa.
                    <?php $options = <<<EOD
                            <option value="" disabled selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        EOD; ?>
                        <select class="input100" id="p1" onchange="verif(this)">
                            <?php echo $options ?>
                        </select>
					</strong>
					<strong>2. Hacer las declaraciones fiscales de empresas.
                        <select class="input100" id="p2" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>3. Seleccionar personal en un centro de reclutamiento.
                        <select class="input100" id="p3" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>4. Trabajar en una compañía de distribución de productos.
                        <select class="input100" id="p4" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>5. Administrar una agencia de viajes.
                        <select class="input100" id="p5" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>6. Planear los gastos que realizará un municipio.
                        <select class="input100" id="p6" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <strong>7. Contruir laboratorios en una universidad.
                        <select class="input100" id="p7" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <strong>8. Asesorar a campesinos de sus productos.
                        <select class="input100" id="p8" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>9. Dirigir una empresa minera.
                        <select class="input100" id="p9" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>10. Dirigir la informática de un centro comercial.
                        <select class="input100" id="p10" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>11. Control de egresos e ingresos de una empresa.
                        <select class="input100" id="p11" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>12. Planear nuevas formas de trabajo.
                        <select class="input100" id="p12" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
					<strong>13. Introducir productos al extranjero.
                        <select class="input100" id="p13" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>14.  Promover turísmo a la región.
                        <select class="input100" id="p14" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>15. Hacer campañas sociales en base al presupuesto del gobierno.
                        <select class="input100" id="p15" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>16. Dirigir una institución educativa.
                        <select class="input100" id="p16" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>17. Administrar propiedaed agrícola.
                        <select class="input100" id="p17" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>18. Organizar oficina dedicada a la explotación de minerales.
                        <select class="input100" id="p18" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
					<strong>19.  Someter a pruebas nuevos programas de computación.
                        <select class="input100" id="p19" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>20. Demostrar a una asociación sus estados financieros.
                        <select class="input100" id="p20" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>21. Implementar sistemas para que los trabajadores se desempeñen mejor.
                        <select class="input100" id="p21" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>22. Asesorar grandes almacenes, haciéndoles estudios para abrir un nuevo centro comercial.
                        <select class="input100" id="p22" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>23. Diseñar programas para un mejorar el turismo de un hotel.
                        <select class="input100" id="p23" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>24. Asesorar a un grupo de gobernantes acerca del financiamiento del Estado.
                        <select class="input100" id="p24" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>25. Ayudar al manejo eficiente de las colegiaturas de una institución educativa.
                        <select class="input100" id="p25" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>26. Trabajar en un banco agrícola.
                        <select class="input100" id="p26" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>27. Sistemas de control para maquinaria.
                        <select class="input100" id="p27" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>28. Sistema computarizado de almacén.
                        <select class="input100" id="p28" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>29. Verificar que el estado financiero sea correcto en un despacho.
                        <select class="input100" id="p29" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>30. Investigar la imagen de un centro comercial para los clientes.
                        <select class="input100" id="p30" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <strong>31. Trabajar en la importación y exportación de productos.
                        <select class="input100" id="p31" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <strong>32. Trabajar en Secretaría de Turismo.
                        <select class="input100" id="p32" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>33. Diseñar modelos administrativos para servicios del Estado.
                        <select class="input100" id="p33" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>34. Implementar sistemas administrativos para una escuela.
                        <select class="input100" id="p34" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>35. Implementar sistemas de comercialización agrícola.
                        <select class="input100" id="p35" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>36. Comercializar los minerales extraídos.
                        <select class="input100" id="p36" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
					<strong>37. Usar computadoras modernas para llevar el control de una empresa.
                        <select class="input100" id="p37" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>38. Calcular si una empresa tiene utilidades o pérdidas económicas.
                        <select class="input100" id="p38" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>39. Diseñar programas de capacitación para los empleados.
                        <select class="input100" id="p39" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>40. Diseñar campañas publicitarias para los centros comerciales.
                        <select class="input100" id="p40" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>41. Diseñar planes de viaje para extranjeros.
                        <select class="input100" id="p41" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>42. Mejorar el procedimiento de impuestos a través de equipos de computación.
                        <select class="input100" id="p42" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
					<strong>43. Mejorar instalaciones de una universidad.
                        <select class="input100" id="p43" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>44. Dirigir una empresa agrícola. 
                        <select class="input100" id="p44" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>45. Contratar personal para la extracción y beneficio de minerales.
                        <select class="input100" id="p45" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
					<strong>46. Mantener actualizado la información de una empresa.
                        <select class="input100" id="p46" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>47. Asesorar un hospital económicamente.
                        <select class="input100" id="p47" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>48. Crear una empresa turística.
                        <select class="input100" id="p48" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>49. Asesorar a artesanos en la comercialización.
                        <select class="input100" id="p49" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>50. Ser dueño de un hotel.
                        <select class="input100" id="p50" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>51. Hacer presupuestos de gastos de campañas políticas.
                        <select class="input100" id="p51" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>52. Ser director de una Universidad.
                        <select class="input100" id="p52" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>53. Ayudar a campesinos para optimizar la siembra.
                        <select class="input100" id="p53" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>54. Estudios de maquinaria para la minería.
                        <select class="input100" id="p54" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>55. Desarrollar aplicación para el control de entrada y salida de mercancía.
                        <select class="input100" id="p55" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <strong>56. Ayudar a comerciantes para tramitar oficios de Hacienda.
                        <select class="input100" id="p56" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>57. Mejorar la imagen de un producto.
                        <select class="input100" id="p57" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>58. Hacer estudios para saber que producto será más aceptado por el público.
                        <select class="input100" id="p58" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>59. Administrar empresa de intercambio de tiempos compartidos.
                        <select class="input100" id="p59" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>60. Ser tesorero de gobierno del estado.
                        <select class="input100" id="p60" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>61. Mejorar el programa académico de una escuela.
                        <select class="input100" id="p61" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>62. Organización de empresas rurales.
                        <select class="input100" id="p62" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>63. Trabajar en productora de materiales del subsuelo.
                        <select class="input100" id="p63" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>64. Dirigir el centro de informática de un aeropuerto.
                        <select class="input100" id="p64" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>65. Dar ideas a una empresa de como invertir sus utilidades.
                        <select class="input100" id="p65" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>66. Conocer los derechos y obligaciones de los trabajadores.
                        <select class="input100" id="p66" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>67. Saber que transporte es más eficiente para envío de mercancía.
                        <select class="input100" id="p67" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>68. Supervisar los servicios de atención al turismo.
                        <select class="input100" id="p68" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>69. Tener el control de gastos de un municipio.
                        <select class="input100" id="p69" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>70. Vigilar que se apliquen los gastos correctos de una escuela.
                        <select class="input100" id="p70" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>71. Proponer programa para el impulso de empresas agrícolas.
                        <select class="input100" id="p71" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>72. Hacer más eficientes las oficinas de la minería.
                        <select class="input100" id="p72" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>73. Organizar la información del gobierno.
                        <select class="input100" id="p73" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>74. Llevar contabiliad de una universidad.
                        <select class="input100" id="p74" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>75. Conocer que motiva a la gente a realizar mejor su trabajo.
                        <select class="input100" id="p75" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>76. Conocer el derecho mercantil.
                        <select class="input100" id="p76" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>77. Atraer el turismo extranjero al país.
                        <select class="input100" id="p77" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>78. Realizando estudios de la inversión de obras públicas.
                        <select class="input100" id="p78" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>79. Fundar una nueva universidad.
                        <select class="input100" id="p79" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>80. Llevar la organización de una granja.
                        <select class="input100" id="p80" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>81. Hacer cálculos de extracción y producción de minería.
                        <select class="input100" id="p81" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>82. Hacerse cargo de los sistemas de computo-electoral en campañas.
                        <select class="input100" id="p82" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>83. Conocer el derecho fiscal.
                        <select class="input100" id="p83" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>84. Crear publicidad para una compañía.
                        <select class="input100" id="p84" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>85. Diseñar nuevos productos eléctricos.
                        <select class="input100" id="p85" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>86. Conocer la gastronomía nacional.
                        <select class="input100" id="p86" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>87. Supervisar las oficinas del gobierno del estado.
                        <select class="input100" id="p87" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>88. Supervisar el funcionamiento académico de profesores.
                        <select class="input100" id="p88" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>89. Ser distribuidor de productos ganaderos.
                        <select class="input100" id="p89" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>90. Promover empresas campesinas para la explotación de minerales.
                        <select class="input100" id="p90" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" id="btnContinuar" name="btnContinuar" value="Registrarse" onclick="incompleto(event);">
                                Siguiente
                            </button>
                            </div>
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
    <script src="../login/vendor/animsition/js/animsition.min.js"></script>
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
    <!-- <script type="text/javascript" src="js/valor.js"></script> -->

</body>

<script type="text/javascript">

a = 1;

for (i=1; i<=90; i++){
    if(a > 9){
            a = 1;
        } 
    console.log(i);
        document.getElementById('p'+i).value =a;
        a += 1;
        
}

    function suma(e){
        e.preventDefault()

        RI  = 0;
        RF  = 0;
        RH  = 0;
        RC  = 0;
        RT  = 0;
        RP  = 0;
        RE  = 0;
        RA  = 0;
        RM  = 0;   

        for (i=0; i < 10; i++) {
            RI+=parseInt(document.getElementById(`p${(i*9)+1}`).value) || 0;
            RF+=parseInt(document.getElementById(`p${(i*9)+2}`).value) || 0;
            RH+=parseInt(document.getElementById(`p${(i*9)+3}`).value) || 0;
            RC+=parseInt(document.getElementById(`p${(i*9)+4}`).value) || 0;
            RT+=parseInt(document.getElementById(`p${(i*9)+5}`).value) || 0;
            RP+=parseInt(document.getElementById(`p${(i*9)+6}`).value) || 0;
            RE+=parseInt(document.getElementById(`p${(i*9)+7}`).value) || 0;
            RA+=parseInt(document.getElementById(`p${(i*9)+8}`).value) || 0;
            RM+=parseInt(document.getElementById(`p${(i*9)+9}`).value) || 0;
        }

        var locations = [
            "recursosinstrumentales",
            "recursosfinancieros",
            "recursoshumanos",
            "recursoscomerciales",
            "recursosturisticos",
            "recursospublicos",
            "recursoseducativos",
            "recursosagricolas",
            "recursosmineros"
        ]

        var results = [RI, RF, RH, RC, RT, RP, RE, RA, RM]
        var max = results[0];
        var maxIndex = 0;

        for (var i = 1; i < results.length; i++) {
            if (results[i] > max) {
                maxIndex = i;
                max = results[i];
            }
        }
        
        window.location.href = `../resultados?res=administrativas_${locations[maxIndex]}`;
    }
</script>

<script type="text/javascript">
    	function verif(s1) {
    		var s2;
    		for (var i=1;i<=9;i++) {
    			s2 = document.getElementById('p' + i);
    			if (s1.value == s2.value && s1 != s2 && Number.isInteger(+s1.value)) {
    				alert('Valor repetido');
    				s1.options[0].selected = true;
    				return;
    		}
    	}
    }
</script>

<script type="text/javascript">
    	function verif2(s1) {
    		var s2;
    		for (var i=10;i<=18;i++) {
    			s2 = document.getElementById('p' + i);
    			if (s1.value == s2.value && s1 != s2 && Number.isInteger(+s1.value)) {
    				alert('Valor repetido');
    				s1.options[0].selected = true;
    				return;
    		}
    	}
    }
</script>

<script type="text/javascript">
    	function verif3(s1) {
    		var s2;
    		for (var i=19;i<=27;i++) {
    			s2 = document.getElementById('p' + i);
    			if (s1.value == s2.value && s1 != s2 && Number.isInteger(+s1.value)) {
    				alert('Valor repetido');
    				s1.options[0].selected = true;
    				return;
    		}
    	}
    }
</script>

<script type="text/javascript">
    	function verif4(s1) {
    		var s2;
    		for (var i=28;i<=36;i++) {
    			s2 = document.getElementById('p' + i);
    			if (s1.value == s2.value && s1 != s2 && Number.isInteger(+s1.value)) {
    				alert('Valor repetido');
    				s1.options[0].selected = true;
    				return;
    		}
    	}
    }
</script>

<script type="text/javascript">
    	function verif5(s1) {
    		var s2;
    		for (var i=37;i<=45;i++) {
    			s2 = document.getElementById('p' + i);
    			if (s1.value == s2.value && s1 != s2 && Number.isInteger(+s1.value)) {
    				alert('Valor repetido');
    				s1.options[0].selected = true;
    				return;
    		}
    	}
    }
</script>

<script type="text/javascript">
    	function verif6(s1) {
    		var s2;
    		for (var i=46;i<=54;i++) {
    			s2 = document.getElementById('p' + i);
    			if (s1.value == s2.value && s1 != s2 && Number.isInteger(+s1.value)) {
    				alert('Valor repetido');
    				s1.options[0].selected = true;
    				return;
    		}
    	}
    }
</script>

<script type="text/javascript">
    	function verif7(s1) {
    		var s2;
    		for (var i=55;i<=63;i++) {
    			s2 = document.getElementById('p' + i);
    			if (s1.value == s2.value && s1 != s2 && Number.isInteger(+s1.value)) {
    				alert('Valor repetido');
    				s1.options[0].selected = true;
    				return;
    		}
    	}
    }
</script>

<script type="text/javascript">
    	function verif8(s1) {
    		var s2;
    		for (var i=64;i<=72;i++) {
    			s2 = document.getElementById('p' + i);
    			if (s1.value == s2.value && s1 != s2 && Number.isInteger(+s1.value)) {
    				alert('Valor repetido');
    				s1.options[0].selected = true;
    				return;
    		}
    	}
    }
</script>

<script type="text/javascript">
    	function verif9(s1) {
    		var s2;
    		for (var i=73;i<=81;i++) {
    			s2 = document.getElementById('p' + i);
    			if (s1.value == s2.value && s1 != s2 && Number.isInteger(+s1.value)) {
    				alert('Valor repetido');
    				s1.options[0].selected = true;
    				return;
    		}
    	}
    }
</script>

<script type="text/javascript">
    	function verif10(s1) {
    		var s2;
    		for (var i=82;i<=90;i++) {
    			s2 = document.getElementById('p' + i);
    			if (s1.value == s2.value && s1 != s2 && Number.isInteger(+s1.value)) {
                    
    				alert('Valor repetido'); 

    				s1.options[0].selected = true;
    				return;
    		}
    	}
    }
</script>

<script type="text/javascript">
    	
    function incompleto(e) {

        var formulario = document.getElementsByName('formulario')[0],
        elementos = formulario.elements,
        boton = document.getElementById('btnContinuar');

    var validarp1 = function (e) {
        if (formulario.p1.value == 0) {
            alert("Campo incompleto: Pregunta 1");
            return false;
        }
            return true;
    };
    var validarp2 = function (e) {
        if (formulario.p2.value == 0) {
            alert("Campo incompleto: Pregunta 2");
            return false;
        }
            return true;
    };
    var validarp3 = function (e) {
        if (formulario.p3.value == 0) {
            alert("Campo incompleto: Pregunta 3");
            return false;
        }
            return true;
    };
    var validarp4 = function (e) {
        if (formulario.p4.value == 0) {
            alert("Campo incompleto: Pregunta 4");
            return false;
        }
            return true;
    };
    var validarp5 = function (e) {
        if (formulario.p5.value == 0) {
            alert("Campo incompleto: Pregunta 5");
            return false;
        }
            return true;
    };
    var validarp6 = function (e) {
        if (formulario.p6.value == 0) {
            alert("Campo incompleto: Pregunta 6");
            return false;
        }
            return true;
    };
    var validarp7 = function (e) {
        if (formulario.p7.value == 0) {
            alert("Campo incompleto: Pregunta 7");
            return false;
        }
            return true;
    };
    var validarp8 = function (e) {
        if (formulario.p8.value == 0) {
            alert("Campo incompleto: Pregunta 8");
            return false;
        }
            return true;
    };
    var validarp9 = function (e) {
        if (formulario.p9.value == 0) {
            alert("Campo incompleto: Pregunta 9");
            return false;
        }
            return true;
    };
    var validarp10 = function (e) {
        if (formulario.p10.value == 0) {
            alert("Campo incompleto: Pregunta 10");
            return false;
        }
            return true;
    };
    var validarp11 = function (e) {
        if (formulario.p11.value == 0) {
            alert("Campo incompleto: Pregunta 11");
            return false;
        }
            return true;
    };
    var validarp12 = function (e) {
        if (formulario.p12.value == 0) {
            alert("Campo incompleto: Pregunta 12");
            return false;
        }
            return true;
    };
    var validarp13 = function (e) {
        if (formulario.p13.value == 0) {
            alert("Campo incompleto: Pregunta 13");
            return false;
        }
            return true;
    };
    var validarp14 = function (e) {
        if (formulario.p14.value == 0) {
            alert("Campo incompleto: Pregunta 14");
            return false;
        }
            return true;
    };
    var validarp15 = function (e) {
        if (formulario.p15.value == 0) {
            alert("Campo incompleto: Pregunta 15");
            return false;
        }
            return true;
    };
    var validarp16 = function (e) {
        if (formulario.p16.value == 0) {
            alert("Campo incompleto: Pregunta 16");
            return false;
        }
            return true;
    };
    var validarp17 = function (e) {
        if (formulario.p17.value == 0) {
            alert("Campo incompleto: Pregunta 17");
            return false;
        }
            return true;
    };
    var validarp18 = function (e) {
        if (formulario.p18.value == 0) {
            alert("Campo incompleto: Pregunta 18");
            return false;
        }
            return true;
    };
    var validarp19 = function (e) {
        if (formulario.p19.value == 0) {
            alert("Campo incompleto: Pregunta 19");
            return false;
        }
            return true;
    };
    var validarp20 = function (e) {
        if (formulario.p20.value == 0) {
            alert("Campo incompleto: Pregunta 20");
            return false;
        }
            return true;
    };
    var validarp21 = function (e) {
        if (formulario.p21.value == 0) {
            alert("Campo incompleto: Pregunta 21");
            return false;
        }
            return true;
    };
    var validarp22 = function (e) {
        if (formulario.p22.value == 0) {
            alert("Campo incompleto: Pregunta 22");
            return false;
        }
            return true;
    };
    var validarp23 = function (e) {
        if (formulario.p23.value == 0) {
            alert("Campo incompleto: Pregunta 23");
            return false;
        }
            return true;
    };
    var validarp24 = function (e) {
        if (formulario.p24.value == 0) {
            alert("Campo incompleto: Pregunta 24");
            return false;
        }
            return true;
    };
    var validarp25 = function (e) {
        if (formulario.p25.value == 0) {
            alert("Campo incompleto: Pregunta 25");
            return false;
        }
            return true;
    };
    var validarp26 = function (e) {
        if (formulario.p26.value == 0) {
            alert("Campo incompleto: Pregunta 26");
            return false;
        }
            return true;
    };
    var validarp27 = function (e) {
        if (formulario.p27.value == 0) {
            alert("Campo incompleto: Pregunta 27");
            return false;
        }
            return true;
    };
    var validarp28 = function (e) {
        if (formulario.p28.value == 0) {
            alert("Campo incompleto: Pregunta 28");
            return false;
        }
            return true;
    };
    var validarp29 = function (e) {
        if (formulario.p29.value == 0) {
            alert("Campo incompleto: Pregunta 29");
            return false;
        }
            return true;
    };
    var validarp30 = function (e) {
        if (formulario.p30.value == 0) {
            alert("Campo incompleto: Pregunta 30");
            return false;
        }
            return true;
    };
    var validarp31 = function (e) {
        if (formulario.p31.value == 0) {
            alert("Campo incompleto: Pregunta 31");
            return false;
        }
            return true;
    };
    var validarp32 = function (e) {
        if (formulario.p32.value == 0) {
            alert("Campo incompleto: Pregunta 32");
            return false;
        }
            return true;
    };
    var validarp33 = function (e) {
        if (formulario.p33.value == 0) {
            alert("Campo incompleto: Pregunta 33");
            return false;
        }
            return true;
    };
    var validarp34 = function (e) {
        if (formulario.p34.value == 0) {
            alert("Campo incompleto: Pregunta 34");
            return false;
        }
            return true;
    };
    var validarp35 = function (e) {
        if (formulario.p35.value == 0) {
            alert("Campo incompleto: Pregunta 35");
            return false;
        }
            return true;
    };
    var validarp36 = function (e) {
        if (formulario.p36.value == 0) {
            alert("Campo incompleto: Pregunta 36");
            return false;
        }
            return true;
    };
    var validarp37 = function (e) {
        if (formulario.p37.value == 0) {
            alert("Campo incompleto: Pregunta 37");
            return false;
        }
            return true;
    };
    var validarp38 = function (e) {
        if (formulario.p38.value == 0) {
            alert("Campo incompleto: Pregunta 38");
            return false;
        }
            return true;
    };
    var validarp39 = function (e) {
        if (formulario.p39.value == 0) {
            alert("Campo incompleto: Pregunta 39");
            return false;
        }
            return true;
    };
    var validarp40 = function (e) {
        if (formulario.p40.value == 0) {
            alert("Campo incompleto: Pregunta 40");
            return false;
        }
            return true;
    };
    var validarp41 = function (e) {
        if (formulario.p41.value == 0) {
            alert("Campo incompleto: Pregunta 41");
            return false;
        }
            return true;
    };
    var validarp42 = function (e) {
        if (formulario.p42.value == 0) {
            alert("Campo incompleto: Pregunta 42");
            return false;
        }
            return true;
    };
    var validarp43 = function (e) {
        if (formulario.p43.value == 0) {
            alert("Campo incompleto: Pregunta 43");
            return false;
        }
            return true;
    };
    var validarp44 = function (e) {
        if (formulario.p44.value == 0) {
            alert("Campo incompleto: Pregunta 44");
            return false;
        }
            return true;
    };
    var validarp45 = function (e) {
        if (formulario.p45.value == 0) {
            alert("Campo incompleto: Pregunta 45");
            return false;
        }
            return true;
    };
    var validarp46 = function (e) {
        if (formulario.p46.value == 0) {
            alert("Campo incompleto: Pregunta 46");
            return false;
        }
            return true;
    };
    var validarp47 = function (e) {
        if (formulario.p47.value == 0) {
            alert("Campo incompleto: Pregunta 47");
            return false;
        }
            return true;
    };
    var validarp48 = function (e) {
        if (formulario.p48.value == 0) {
            alert("Campo incompleto: Pregunta 48");
            return false;
        }
            return true;
    };
    var validarp49 = function (e) {
        if (formulario.p49.value == 0) {
            alert("Campo incompleto: Pregunta 49");
            return false;
        }
            return true;
    };
    var validarp50 = function (e) {
        if (formulario.p50.value == 0) {
            alert("Campo incompleto: Pregunta 50");
            return false;
        }
            return true;
    };
    var validarp51 = function (e) {
        if (formulario.p51.value == 0) {
            alert("Campo incompleto: Pregunta 51");
            return false;
        }
            return true;
    };
    var validarp52 = function (e) {
        if (formulario.p52.value == 0) {
            alert("Campo incompleto: Pregunta 52");
            return false;
        }
            return true;
    };
    var validarp53 = function (e) {
        if (formulario.p53.value == 0) {
            alert("Campo incompleto: Pregunta 53");
            return false;
        }
            return true;
    };
    var validarp54 = function (e) {
        if (formulario.p54.value == 0) {
            alert("Campo incompleto: Pregunta 54");
            return false;
        }
            return true;
    };
    var validarp55 = function (e) {
        if (formulario.p55.value == 0) {
            alert("Campo incompleto: Pregunta 55");
            return false;
        }
            return true;
    };
    var validarp56 = function (e) {
        if (formulario.p56.value == 0) {
            alert("Campo incompleto: Pregunta 56");
            return false;
        }
            return true;
    };
    var validarp57 = function (e) {
        if (formulario.p57.value == 0) {
            alert("Campo incompleto: Pregunta 57");
            return false;
        }
            return true;
    };
    var validarp58 = function (e) {
        if (formulario.p58.value == 0) {
            alert("Campo incompleto: Pregunta 58");
            return false;
        }
            return true;
    };
    var validarp59 = function (e) {
        if (formulario.p59.value == 0) {
            alert("Campo incompleto: Pregunta 59");
            return false;
        }
            return true;
    };
    var validarp60 = function (e) {
        if (formulario.p60.value == 0) {
            alert("Campo incompleto: Pregunta 60");
            return false;
        }
            return true;
    };
    var validarp61 = function (e) {
        if (formulario.p61.value == 0) {
            alert("Campo incompleto: Pregunta 61");
            return false;
        }
            return true;
    };
    var validarp62 = function (e) {
        if (formulario.p62.value == 0) {
            alert("Campo incompleto: Pregunta 62");
            return false;
        }
            return true;
    };
    var validarp63 = function (e) {
        if (formulario.p63.value == 0) {
            alert("Campo incompleto: Pregunta 63");
            return false;
        }
            return true;
    };
    var validarp60 = function (e) {
        if (formulario.p63.value == 0) {
            alert("Campo incompleto: Pregunta 63");
            return false;
        }
            return true;
    };
    var validarp64 = function (e) {
        if (formulario.p64.value == 0) {
            alert("Campo incompleto: Pregunta 64");
            return false;
        }
            return true;
    };
    var validarp65 = function (e) {
        if (formulario.p65.value == 0) {
            alert("Campo incompleto: Pregunta 65");
            return false;
        }
            return true;
    };
    var validarp66 = function (e) {
        if (formulario.p66.value == 0) {
            alert("Campo incompleto: Pregunta 66");
            return false;
        }
            return true;
    };
    var validarp67 = function (e) {
        if (formulario.p67.value == 0) {
            alert("Campo incompleto: Pregunta 67");
            return false;
        }
            return true;
    };
    var validarp68 = function (e) {
        if (formulario.p68.value == 0) {
            alert("Campo incompleto: Pregunta 68");
            return false;
        }
            return true;
    };
    var validarp69 = function (e) {
        if (formulario.p69.value == 0) {
            alert("Campo incompleto: Pregunta 69");
            return false;
        }
            return true;
    };
    var validarp70 = function (e) {
        if (formulario.p70.value == 0) {
            alert("Campo incompleto: Pregunta 70");
            return false;
        }
            return true;
    };
    var validarp71 = function (e) {
        if (formulario.p71.value == 0) {
            alert("Campo incompleto: Pregunta 71");
            return false;
        }
            return true;
    };
    var validarp72 = function (e) {
        if (formulario.p72.value == 0) {
            alert("Campo incompleto: Pregunta 72");
            return false;
        }
            return true;
    };
    var validarp73 = function (e) {
        if (formulario.p73.value == 0) {
            alert("Campo incompleto: Pregunta 73");
            return false;
        }
            return true;
    };
    var validarp74 = function (e) {
        if (formulario.p74.value == 0) {
            alert("Campo incompleto: Pregunta 74");
            return false;
        }
            return true;
    };
    var validarp75 = function (e) {
        if (formulario.p75.value == 0) {
            alert("Campo incompleto: Pregunta 75");
            return false;
        }
            return true;
    };
    var validarp76 = function (e) {
        if (formulario.p76.value == 0) {
            alert("Campo incompleto: Pregunta 76");
            return false;
        }
            return true;
    };
    var validarp77 = function (e) {
        if (formulario.p77.value == 0) {
            alert("Campo incompleto: Pregunta 77");
            return false;
        }
            return true;
    };
    var validarp78 = function (e) {
        if (formulario.p78.value == 0) {
            alert("Campo incompleto: Pregunta 78");
            return false;
        }
            return true;
    };
    var validarp79 = function (e) {
        if (formulario.p79.value == 0) {
            alert("Campo incompleto: Pregunta 79");
            return false;
        }
            return true;
    };
    var validarp80 = function (e) {
        if (formulario.p80.value == 0) {
            alert("Campo incompleto: Pregunta 80");
            return false;
        }
            return true;
    };
    var validarp81 = function (e) {
        if (formulario.p81.value == 0) {
            alert("Campo incompleto: Pregunta 81");
            return false;
        }
            return true;
    };
    var validarp82 = function (e) {
        if (formulario.p82.value == 0) {
            alert("Campo incompleto: Pregunta 82");
            return false;
        }
            return true;
    };
    var validarp83 = function (e) {
        if (formulario.p83.value == 0) {
            alert("Campo incompleto: Pregunta 83");
            return false;
        }
            return true;
    };
    var validarp84 = function (e) {
        if (formulario.p84.value == 0) {
            alert("Campo incompleto: Pregunta 84");
            return false;
        }
            return true;
    };
    var validarp85 = function (e) {
        if (formulario.p85.value == 0) {
            alert("Campo incompleto: Pregunta 85");
            return false;
        }
            return true;
    };
    var validarp86 = function (e) {
        if (formulario.p86.value == 0) {
            alert("Campo incompleto: Pregunta 86");
            return false;
        }
            return true;
    };
    var validarp87 = function (e) {
        if (formulario.p87.value == 0) {
            alert("Campo incompleto: Pregunta 87");
            return false;
        }
            return true;
    };
    var validarp88 = function (e) {
        if (formulario.p88.value == 0) {
            alert("Campo incompleto: Pregunta 88");
            return false;
        }
            return true;
    };
    var validarp89 = function (e) {
        if (formulario.p89.value == 0) {
            alert("Campo incompleto: Pregunta 89");
            return false;
        }
            return true;
    };
    var validarp90 = function (e) {
        if (formulario.p90.value == 0) {
            alert("Campo incompleto: Pregunta 90");
            return false;
        }
            return true;
    };


    var validar = function (e) {
        if(
        validarp1(e) && 
        validarp2(e) && 
        validarp3(e) && 
        validarp4(e) && 
        validarp5(e) && 
        validarp6(e) && 
        validarp7(e) && 
        validarp8(e) && 
        validarp9(e) && 
        validarp10(e) && 
        validarp11(e) && 
        validarp12(e) && 
        validarp13(e) && 
        validarp14(e) && 
        validarp15(e) && 
        validarp16(e) && 
        validarp17(e) && 
        validarp18(e) && 
        validarp19(e) && 
        validarp20(e) && 
        validarp21(e) && 
        validarp22(e) && 
        validarp23(e) && 
        validarp24(e) && 
        validarp25(e) && 
        validarp26(e) && 
        validarp27(e) && 
        validarp28(e) && 
        validarp29(e) && 
        validarp30(e) && 
        validarp31(e) && 
        validarp32(e) && 
        validarp33(e) && 
        validarp34(e) && 
        validarp35(e) && 
        validarp36(e) && 
        validarp37(e) && 
        validarp38(e) && 
        validarp39(e) && 
        validarp40(e) && 
        validarp41(e) && 
        validarp42(e) && 
        validarp43(e) && 
        validarp44(e) && 
        validarp45(e) && 
        validarp46(e) && 
        validarp47(e) && 
        validarp48(e) && 
        validarp49(e) && 
        validarp50(e) && 
        validarp51(e) && 
        validarp52(e) && 
        validarp53(e) && 
        validarp54(e) && 
        validarp55(e) && 
        validarp56(e) && 
        validarp57(e) && 
        validarp58(e) && 
        validarp59(e) && 
        validarp60(e) && 
        validarp61(e) && 
        validarp62(e) && 
        validarp63(e) && 
        validarp64(e) && 
        validarp65(e) && 
        validarp66(e) && 
        validarp67(e) && 
        validarp68(e) && 
        validarp69(e) && 
        validarp70(e) && 
        validarp71(e) && 
        validarp72(e) && 
        validarp73(e) && 
        validarp74(e) && 
        validarp75(e) && 
        validarp76(e) && 
        validarp77(e) && 
        validarp78(e) && 
        validarp79(e) && 
        validarp80(e) && 
        validarp81(e) && 
        validarp82(e) && 
        validarp83(e) && 
        validarp84(e) && 
        validarp85(e) && 
        validarp86(e) && 
        validarp87(e) && 
        validarp88(e) && 
        validarp89(e) && 
        validarp90(e) ){
            suma(e);
        }else{
            e.preventDefault();
        }
            
        
    };

    formulario.addEventListener("submit", validar);
    
}
</script>

</html>