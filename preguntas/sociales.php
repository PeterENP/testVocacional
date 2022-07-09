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
                        6 = Mayor Preferencia
                        
                    <br><br>
					</div>

                    
					<strong>1. Conocer como afectan las costumbres de alguna religión.
                    <?php $options = <<<EOD
                            <option value="" disabled selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        EOD; ?>
                        <select class="input100" id="p1" onchange="verif(this)">
                            <?php echo $options ?>
                        </select>
					</strong>
					<strong>2. Ayudar a los enfermos de un hospital.
                        <select class="input100" id="p2" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>3. Conocer porque el hombre se comporta así.
                        <select class="input100" id="p3" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>4. Conocer la relación politica entre países.
                        <select class="input100" id="p4" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>5. Enseñar técnicas para que aprendan mejor los alumnos.
                        <select class="input100" id="p5" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>6. Anunciar los avances científicos de una universidad.
                        <select class="input100" id="p6" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>7. Investigar porqué los índigenas no quieren hablar español.
                        <select class="input100" id="p7" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <strong>8. Apoyar a reclusos en rehabilitaciónes.
                        <select class="input100" id="p8" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>9. Ayudar a alguien que está pasando por un momento difícil.
                        <select class="input100" id="p9" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    
                    <strong>10. Conocer el derecho internacional.
                        <select class="input100" id="p10" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>11. Diseñar técnicas para sordos y ciegos.
                        <select class="input100" id="p11" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>12. Ir a eventos como un empresario.
                        <select class="input100" id="p12" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
					<strong>13. Investigar porque la sociedad crea pandillas.
                        <select class="input100" id="p13" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>14. Organizar colectas para indigentes.
                        <select class="input100" id="p14" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>15. Ayudar familias a integrarse nuevamente.
                        <select class="input100" id="p15" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>16. Defender una empresa en base a los derechos.
                        <select class="input100" id="p16" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>17. Diseñar planes para que los estudiantes mejoren académicamente.
                        <select class="input100" id="p17" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>18. Dar la bienvenidad a visitantes extranjeros.
                        <select class="input100" id="p18" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
					<strong>19. Investigar porque se divorcian.
                        <select class="input100" id="p19" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>20. Promover cooperativas para los necesitados.
                        <select class="input100" id="p20" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>21. Entender como evoluciona la psicología del hombre.
                        <select class="input100" id="p21" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>22. Trabajar en una embajada fuera del país.
                        <select class="input100" id="p22" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>23. Formar centros de capacitación para campesinos.
                        <select class="input100" id="p23" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>24. Atender quejas de usuarios de una empresa.
                        <select class="input100" id="p24" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>25. Investigar porque los índigenas no quieren vivir en la ciudad.
                        <select class="input100" id="p25" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>26. Servir para defender los derechos humanos.
                        <select class="input100" id="p26" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>27. Conocer que es el psicoanálisis.
                        <select class="input100" id="p27" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>28. Conocer el derecho mercantil nacional e internacional.
                        <select class="input100" id="p28" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>29. Implementar actividades para que los estudiantes crezcan académicamente.
                        <select class="input100" id="p29" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>30. Trabajar en agencia turística para que hacer más agradable su estancia a los usuarios.
                        <select class="input100" id="p30" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>31. Investigar las causas del incremente de la población.
                        <select class="input100" id="p31" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <strong>32. Conseguir donativos para mejorar un hospital.
                        <select class="input100" id="p32" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>33. Ayudar a las personas a conocerce a sí mismas.
                        <select class="input100" id="p33" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>34. Determinar si una persona es culpable o inocente en base al derecho.
                        <select class="input100" id="p34" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>35. Enseñar un nuevo idioma.
                        <select class="input100" id="p35" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>36. Organizar convivencias culturales para los extranjeros.
                        <select class="input100" id="p36" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
					<strong>37. Estudiar porque los campesinos emigran a Estados Unidos.
                        <select class="input100" id="p37" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>38. Promover una mejor condición de vida a jubilados.
                        <select class="input100" id="p38" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>39. Ayudar a los jóvenes a orientarse profesionalmente.
                        <select class="input100" id="p39" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>40. Aprobar, desaprobar y diseñar nuevas leyes.
                        <select class="input100" id="p40" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>41. Determinar que sistema educativo es mejor.
                        <select class="input100" id="p41" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>42. Mejorar el ambiente laboral.
                        <select class="input100" id="p42" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
					<strong>43. Investigar porque existen diferentes religiones en una comunidad.
                        <select class="input100" id="p43" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>44. Recolectar objetos domésticos y dárselos a necesitados. 
                        <select class="input100" id="p44" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>45. Conocer como se desarrolla la inteligencia de un niño.
                        <select class="input100" id="p45" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>46. Participar en campañas políticas.
                        <select class="input100" id="p46" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>47. Crear programas para personas con problemas de aprendizaje.
                        <select class="input100" id="p47" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>48. Corregir la mala comunicación entre trabajadores.
                        <select class="input100" id="p48" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>49. Investigar el matrimonio de grupos marginados.
                        <select class="input100" id="p49" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>50. Ayudar a los padres a integrarse al proceso educativo de los alumnos.
                        <select class="input100" id="p50" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>51. Aplicar pruebas mentales para conocer la personalidad.
                        <select class="input100" id="p51" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>52. Crear nuevas leyes para el comercio internacional.
                        <select class="input100" id="p52" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>53. Supervisar que se cumplan los programas de estudio correctamente.
                        <select class="input100" id="p53" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>54. Diagnosticar errores de empresarios y su comunidad.
                        <select class="input100" id="p54" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>55. Investigar la forma de vida de las clases sociales altas.
                        <select class="input100" id="p55" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <strong>56. Ayudar a los pobres a trámitar servicios de luz, agua, entre otros.
                        <select class="input100" id="p56" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>57. Ayudar a personas con trastornos psicológicos.
                        <select class="input100" id="p57" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>58. Ser experteo en la historia política del país.
                        <select class="input100" id="p58" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>59. Investigar como enseñar mejor a los alumnos.
                        <select class="input100" id="p59" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>60. Mejorar la comunicación de una institución de gobierno.
                        <select class="input100" id="p60" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>                   			                                  
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" id="btnContinuar" name="btnContinuar" value="Registrarse" onclick="incompleto(event);">
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

for (i=1; i<=60; i++){
    if(a > 6){
            a = 1;
        } 
    console.log(i);
        document.getElementById('p'+i).value =a;
        a += 1;
        
}

    function suma(e){
        e.preventDefault()

        P = 0;
        CRA  = 0;
        CREX  = 0;
        CRL  = 0;
        CRED  = 0;
        CRI  = 0;
        for (i=0; i < 10; i++) {
            P+=parseInt(document.getElementById(`p${(i*6)+1}`).value) || 0;
            CRA+=parseInt(document.getElementById(`p${(i*6)+2}`).value) || 0;
            CREX+=parseInt(document.getElementById(`p${(i*6)+3}`).value) || 0;
            CRL+=parseInt(document.getElementById(`p${(i*6)+4}`).value) || 0;
            CRED+=parseInt(document.getElementById(`p${(i*6)+5}`).value) || 0;
            CRI+=parseInt(document.getElementById(`p${(i*6)+6}`).value) || 0;
        }

        var locations = [
            "leyesrelacionhumana",
            "relacionasistencial",
            "relacionexistencial",
            "relacionlegal",
            "relacioneducacional",
            "relacioninterhumana"
        ]

        var results = [P, CRA, CREX, CRL, CRED, CRI]
        var max = results[0];
        var maxIndex = 0;

        for (var i = 1; i < results.length; i++) {
            if (results[i] > max) {
                maxIndex = i;
                max = results[i];
            }
        }
        
        window.location.href = `../resultados?res=sociales_${locations[maxIndex]}`;
    }
</script>

<script type="text/javascript">
    	function verif(s1) {
    		var s2;
    		for (var i=1;i<=6;i++) {
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
    		for (var i=7;i<=12;i++) {
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
    		for (var i=13;i<=18;i++) {
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
    		for (var i=19;i<=24;i++) {
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
    		for (var i=25;i<=30;i++) {
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
    		for (var i=31;i<=36;i++) {
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
    		for (var i=37;i<=42;i++) {
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
    		for (var i=43;i<=48;i++) {
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
    		for (var i=49;i<=54;i++) {
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
    		for (var i=55;i<=60;i++) {
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
        validarp60(e) ){
            suma(e);
        }else{
            e.preventDefault();
        }
            
        
    };

    formulario.addEventListener("submit", validar);
    
}
</script>

</html>