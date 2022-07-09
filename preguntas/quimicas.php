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
                        7 = Mayor Preferencia
                        
                    <br><br>
					</div>

                    
					<strong>1.  Investigar la composición molecular de cualquier sustancia.
                    <?php $options = <<<EOD
                            <option value="" disabled selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        EOD; ?>
                        <select class="input100" id="p1" onchange="verif(this)">
                            <?php echo $options ?>
                        </select>
					</strong>
					<strong>2. Trabajar en una industria de metales.
                        <select class="input100" id="p2" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>3. Elaborar productos alimenticios como leche, quesos, jamón, etc.
                        <select class="input100" id="p3" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>4. Hacer análisis clínicos para identificar bacterias que enferman a los individuos.
                        <select class="input100" id="p4" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>5. Trabajar para una compañía que produce medicinas.
                        <select class="input100" id="p5" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>6. Producir fertilizantes para árboles y plantas.
                        <select class="input100" id="p6" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <strong>7. Diseñar un químico para elaborar pinturas con propiedades nuevas.
                        <select class="input100" id="p7" onchange="verif(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>8. Investigar las diferencias entre química órganica e inorgánica.
                        <select class="input100" id="p8" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>9. Supervisar el proceso químico en una fundidora de acero.
                        <select class="input100" id="p9" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    
                    <strong>10. Saber como los microorganismos producen fermentacion de ciertas sustancias.
                        <select class="input100" id="p10" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>11. Conocer técnicas químicas para detectar enfermedades en el cuerpo humano.
                        <select class="input100" id="p11" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>12. Trabajar en un laboratorio productor de medicamentos.
                        <select class="input100" id="p12" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
					<strong>13. Conocer cómo actúan algunas sustancias químicas en control de plagas.
                        <select class="input100" id="p13" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>14.  Supervisar la calidad de producción en una planta industrial de aceites.
                        <select class="input100" id="p14" onchange="verif2(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
					<strong>15. Dedicarme a investigar en el laboratorio químico de una universidad y publicar dichos resultados.
                        <select class="input100" id="p15" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>16. Aplicar técnicas químicas para obtener sustancias más perdurables en la fabricación de espejos y metales.
                        <select class="input100" id="p16" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>17. Trabajar en el laboratorio químico en una compañía que produce alimentos.
                        <select class="input100" id="p17" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>18. Diseñar un modelo químico.
                        <select class="input100" id="p18" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
					<strong>19. Aplicar técnicas químicas para producir nuevos analgésicos y cierto tipo de drogas.
                        <select class="input100" id="p19" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>20. Asesorar a un grupo de agricultores acerca del tipo de sustancias químicas que deben usar en sembradíos para el control de plagas.
                        <select class="input100" id="p20" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>21. Diseñar un procedimiento químico para lograr plásticos más resistentes.
                        <select class="input100" id="p21" onchange="verif3(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
					<strong>22. Profundizar en la composición química de los reactivos.
                        <select class="input100" id="p22" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>23. Trabajar en una planta química que produzca materias de construcción.
                        <select class="input100" id="p23" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>24. Supervisar el correcto uso de conservadores de una empresa.
                        <select class="input100" id="p24" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>25. Realizar análisis de microbios en un laboratorio para combatir epidemias.
                        <select class="input100" id="p25" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>26. Investigar una fórmula química que sirva como medicamento contra los trastornos nerviosos.
                        <select class="input100" id="p26" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>27. Hacer una investigación para el gobierno federal respecto a compuestos químicos.
                        <select class="input100" id="p27" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>28. Trabajar en una planta química que produzca barnices.
                        <select class="input100" id="p28" onchange="verif4(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>29. Enseñar química en la universidad.
                        <select class="input100" id="p29" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>30. Diseñar nuevos equipos e instrumentos químicos para producir porcelana.
                        <select class="input100" id="p30" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    
                    <strong>31. Conocer el uso de compuestos químicos en la elaboración de la cerveza.
                        <select class="input100" id="p31" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <strong>32. Diseñar un nuevo proceso químico para identificar diferentes tipos de bacterias.
                        <select class="input100" id="p32" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>33. Realizar trabajos de investigación a desarrollar fórmulas para la producción de anticonceptivos.
                        <select class="input100" id="p33" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>34. Trabajar en la Secretaría de Agricultura como analista y evaluador de sustancias.
                        <select class="input100" id="p34" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>35. Trabajar en una empresa dedicada a la producción de explosivos.
                        <select class="input100" id="p35" onchange="verif5(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>36. Profundizar en todos los grandes descubrimientos químicos.
                        <select class="input100" id="p36" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
					<strong>37. Utilizar técnicas químicas para producir cobre.
                        <select class="input100" id="p37" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>38. Investigar propiedades nutritivas de los peces.
                        <select class="input100" id="p38" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>39. Saber que tipo de compuesto o fármaco es el adecuado para el tratamiento de microbios de un organismo enfermo.
                        <select class="input100" id="p39" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>40. Trabajar en un laboratorio químico dedicado a dictaminar la peligrosidad de ciertos fármacos.
                        <select class="input100" id="p40" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>41. Ser un experto en el diagnóstico y análisis de sustancias químicas que componen el suelo.
                        <select class="input100" id="p41" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>42. Conocer las técnicas de producción de asfaltos e impermeabilizantes.
                        <select class="input100" id="p42" onchange="verif6(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
					<strong>43. Crear nuevos métodos de análisis químicos y publicarlos.
                        <select class="input100" id="p43" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>44. Diseñar un proceso químico para obtener nuevos desinfectantes o bactericidas. 
                        <select class="input100" id="p44" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>45. Conocer técnicas de conservación química que eviten la descomposición de los alimentos.
                        <select class="input100" id="p45" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>46. Estudiar nuevos procedimientos para la detección del cáncer por medio de la orina.
                        <select class="input100" id="p46" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>47. Diseñarle a una industria un procedimiento químico para producir tratamientos antidiarreicos.
                        <select class="input100" id="p47" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>48. Hacer análisis de nutrientes de pastos forrajeros.
                        <select class="input100" id="p48" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>49. Trabajar en un laboratorio químico de Petróleos Mexicanos.
                        <select class="input100" id="p49" onchange="verif7(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
					<strong>50. Investigar fenómenos químicos no explicados todavía.
                        <select class="input100" id="p50" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
					<strong>51. Supervisar en una industria el proceso químico para la elaboración de sales y mínerales.
                        <select class="input100" id="p51" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>52. Ser un perito del estado químico de los alimentos.
                        <select class="input100" id="p52" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>53. Trabajar en un laboratorio con un grupo de ginecólogos.
                        <select class="input100" id="p53" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>54. Supervisar en una empresa la calidad química de la producción de cremas antisépticas.
                        <select class="input100" id="p54" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <strong>55. Trabajar en un laboratorio dedicado a realizar análisis agrícolas.
                        <select class="input100" id="p55" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
					</strong>
                    <strong>56. Trabajar en un laboratorio dedicado a producir nuevas fibras sintéticas derivadas del petróleo.
                        <select class="input100" id="p56" onchange="verif8(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>57. Trabajar en un instituto de ciencias e investigación en química.
                        <select class="input100" id="p57" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>58. Trabajar en una empresa de vidrio vigilando el proceso químico .
                        <select class="input100" id="p58" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>59. Diagnosticar, a través de análisis químicos la potabilidad del agua.
                        <select class="input100" id="p59" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>60. Hacer análisis de sangre a pacientes de un hospital.
                        <select class="input100" id="p60" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>61. Conocer el procedimiento para elaborar fármcos que ayuden a los diabéticos.
                        <select class="input100" id="p61" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>62. Asesorar a un grupo de agricultores acerca del uso correcto de insecticidas y pesticidas.
                        <select class="input100" id="p62" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>63. Trabajar en los laboratorios químicos de una empresa dedicada a la fabricación de llantas.
                        <select class="input100" id="p63" onchange="verif9(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>64. Experimentar nuevas fórmulas químicas y posteriormente publicarlo en una revista.
                        <select class="input100" id="p64" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>65. Diseñar un procedimiento químico para elaborar aluminio.
                        <select class="input100" id="p65" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>66. Conocer técnicas químicas para aprovechar los recursos alimenticios de algunos vegetales.
                        <select class="input100" id="p66" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>67. Conocer el procedimiento químico para la detección del virus SIDA.
                        <select class="input100" id="p67" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>68. Diseñar procedimientos para la conservación de fármacos.
                        <select class="input100" id="p68" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>69. Trabajar en un departamento de análisis de alimento para el ganado.
                        <select class="input100" id="p69" onchange="verif10(this)">
                             <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>70. Conocer técnicas químicas para elaborar energéticos como gasolina y dísel.
                        <select class="input100" id="p70" onchange="verif10(this)">
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

for (i=1; i<=70; i++){
    if(a > 7){
            a = 1;
        } 
    console.log(i);
        document.getElementById('p'+i).value =a;
        a += 1;
        
}

    function suma(e){
        e.preventDefault()

        P     = 0;
        I     = 0;
        OBQA  = 0;
        OBQC  = 0;
        OBQF  = 0;
        QAG   = 0;
        OPI   = 0;
        for (i=0; i < 10; i++) {
            P+=parseInt(document.getElementById(`p${(i*7)+1}`).value) || 0;
            I+=parseInt(document.getElementById(`p${(i*7)+2}`).value) || 0;
            OBQA+=parseInt(document.getElementById(`p${(i*7)+3}`).value) || 0;
            OBQC+=parseInt(document.getElementById(`p${(i*7)+4}`).value) || 0;
            OBQF+=parseInt(document.getElementById(`p${(i*7)+5}`).value) || 0;
            QAG+=parseInt(document.getElementById(`p${(i*7)+6}`).value) || 0;
            OPI+=parseInt(document.getElementById(`p${(i*7)+7}`).value) || 0;
        }

        var locations = [
            "puras",
            "inorganica",
            "organicobioquimicasalimentos",
            "organicobioquimicoclinico",
            "organicobioquimicofarmocologia",
            "quimicasagricolas",
            "organicopetroquimicoindustrial"
        ]

        var results = [P, I, OBQA, OBQC, OBQF, QAG, OPI]
        var max = results[0];
        var maxIndex = 0;

        for (var i = 1; i < results.length; i++) {
            if (results[i] > max) {
                maxIndex = i;
                max = results[i];
            }
        }
        
        window.location.href = `../resultados?res=quimicas_${locations[maxIndex]}`;
    }
</script>

<script type="text/javascript">
    	function verif(s1) {
    		var s2;
    		for (var i=1;i<=7;i++) {
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
    		for (var i=8;i<=14;i++) {
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
    		for (var i=15;i<=21;i++) {
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
    		for (var i=22;i<=28;i++) {
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
    		for (var i=29;i<=35;i++) {
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
    		for (var i=36;i<=42;i++) {
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
    		for (var i=43;i<=49;i++) {
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
    		for (var i=50;i<=56;i++) {
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
    		for (var i=57;i<=63;i++) {
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
    		for (var i=64;i<=70;i++) {
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
        validarp70(e) ){
            suma(e);
        }else{
            e.preventDefault();
        }
            
        
    };

    formulario.addEventListener("submit", validar);
    
}
</script>

</html>