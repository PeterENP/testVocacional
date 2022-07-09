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
        <div class="container-login100">
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
                        10 = Mayor Preferencia
                        
                    <br><br>
					</div>

                    
					<strong>1. Conocer por qué y para qué existe el hombre.
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
                            <option value="10">10</option>
                        EOD; ?>
                        <select class="input100" id="p1" onchange="verif(this)">
                            <?php echo $options ?>
                        </select>
					</strong>
					<strong>2. Dirigir una obra teatral.
                        <select class="input100" id="p2" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>3. Escribir en un periódico.
                        <select class="input100" id="p3" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>4. Aprender técnicas de fotograbado.
                        <select class="input100" id="p4" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>5. Dirigir a un grupo escolar dedicado a realizar bailes.
                        <select class="input100" id="p5" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>6. Dirigir un coro eclesiástico.
                        <select class="input100" id="p6" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <strong>7. Supervisar el arreglo de información en un periódico.
                        <select class="input100" id="p7" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <strong>8. Traducir las grandes obras clásicas de la literatura.
                        <select class="input100" id="p8" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>9. Hacer excavaciones en búsqueda de objetos pertenecientes a civilizaciones antiguas.
                        <select class="input100" id="p9" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>10. Trabajar en una biblioteca.
                        <select class="input100" id="p10" onchange="verif(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>11. Conocer a fondo el pensamiento de Aristóteles, Patón y Marx.
                        <select class="input100" id="p11" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>12. Actuar en televisión.
                        <select class="input100" id="p12" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
					<strong>13. Supervisar la redacción y estilo de los escritos de un periódico.
                        <select class="input100" id="p13" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>14.  Ser hábil en el manejo de técnicas para construcción de maquetas.
                        <select class="input100" id="p14" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>15. Participar en un grupo que investiga baílables y danzas regionales.
                        <select class="input100" id="p15" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>16. Realizar composiciones musicales.
                        <select class="input100" id="p16" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>17. Elaborar una revista de difusión dentro de la universidad.
                        <select class="input100" id="p17" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>18. Hacer doblajes de películas extranjeras.
                        <select class="input100" id="p18" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
					<strong>19. Conocer la forma de vida de los pueblos a través de su religión y arte.
                        <select class="input100" id="p19" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>20. Conocer a fondo los sistemas de clasificación de libros.
                        <select class="input100" id="p20" onchange="verif2(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
					<strong>21. Poder explicar el sentido de la existencia de la vida humana.
                        <select class="input100" id="p21" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>22. Dirigir un grupo escolar de teatro.
                        <select class="input100" id="p22" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>23. Participar en un jurado que califique un concurso de novela.
                        <select class="input100" id="p23" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>24. Dominar las técnicas de acuarela y óleo.
                        <select class="input100" id="p24" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>25. Fungir como jurado en un certamen de baile y danza.
                        <select class="input100" id="p25" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>26. Ser hábil en el manejo de diversos instrumentos musicales.
                        <select class="input100" id="p26" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>27. Producir documentales viodegrabados.
                        <select class="input100" id="p27" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>28. Traducir trabajos de investigación que se exponen en un congreso internacional de ciencias.
                        <select class="input100" id="p28" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>29. Conocer las diferencias y semejanzas en la forma de vida de los diversos grupos indígenas.
                        <select class="input100" id="p29" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>30. Asesorar a coleccionistas de libros acerca de cómo organizarlos.
                        <select class="input100" id="p30" onchange="verif3(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>31. Comparar diferentes teorías filosóficas que hablen del hombre, en relación con la religión.
                        <select class="input100" id="p31" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <strong>32. Conocer en detalle las nuevas técnicas de dirección teatral.
                        <select class="input100" id="p32" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>33. Supervisar la redacción y el estilo de los editoriales de periódicos.
                        <select class="input100" id="p33" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>34. Manejar las técnicas de reconstrucción de murales y esculturas.
                        <select class="input100" id="p34" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>35. Investigar la historia y evolución de los diferentes bailables internacionales.
                        <select class="input100" id="p35" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>36. Conocer en detalle las posibilidades y limitaciones de diversos instrumentos musicales.
                        <select class="input100" id="p36" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
					<strong>37. Manejar hábilmente las cámaras fotográficas de cine.
                        <select class="input100" id="p37" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>38. Servir como intérprete entre dos personas de diferente nacionalidad.
                        <select class="input100" id="p38" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>39. Saber clasificar utensilios, tales como herramientas de caza.
                        <select class="input100" id="p39" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>40. Ser experto en clasificación de documentos antiguos.
                        <select class="input100" id="p40" onchange="verif4(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
					<strong>41. Investigar lo que significa el trabajo para el hombre.
                        <select class="input100" id="p41" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>42. Crear nuevos estilos de actuación.
                        <select class="input100" id="p42" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
					<strong>43. Escribir cuentos cortos.
                        <select class="input100" id="p43" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>44. Diseñar escenografías para obras teatrales. 
                        <select class="input100" id="p44" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>45. Participar en un grupo que ejecute danza clásica.
                        <select class="input100" id="p45" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>46. Investigar e interpretar la música latinoamericana.
                        <select class="input100" id="p46" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>47. Trabajar en un estudio dedicado a la fotografía.
                        <select class="input100" id="p47" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>48. Traducir documentos de una embajada.
                        <select class="input100" id="p48" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>49. Entender las razones de nuestros antepasados como centros ceremoniales.
                        <select class="input100" id="p49" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
					<strong>50. Dirigir o administrar una biblioteca universitaria.
                        <select class="input100" id="p50" onchange="verif5(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <br><hr style="border-color:red;"><br>
					<strong>51. Saber en detalle cómo el hombre conoce el mundo que lo rodea.
                        <select class="input100" id="p51" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>52. Representar papeles dramáticos y cómicos en la radio.
                        <select class="input100" id="p52" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>53. Escribir guiones de teatro con temas de actualidad.
                        <select class="input100" id="p53" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>54. Conocer en detalle las técnicas para trabajar piel, vidrio, madera, etcétera.
                        <select class="input100" id="p54" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <strong>55. Crear nuevas formas de expresión corporal y musical a través del baile.
                        <select class="input100" id="p55" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
					</strong>
                    <strong>56. Enseñar a los niños a pronunciar las notas musicales.
                        <select class="input100" id="p56" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>57. Producir programas televisivos.
                        <select class="input100" id="p57" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>58. Doblar al español series de televisión.
                        <select class="input100" id="p58" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>59. Conocer en profundidad las formas de vida de la gente.
                        <select class="input100" id="p59" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>60. Ser encargado del cuidado de los libros de un gran mosaico.
                        <select class="input100" id="p60" onchange="verif6(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>61. Escribir un libro en relación a los seres humanos.
                        <select class="input100" id="p61" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>62. Actuar como maestro de ceremonias en un festival mussical.
                        <select class="input100" id="p62" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>63. Participar en un programa de televisión de literatura.
                        <select class="input100" id="p63" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>64. Hacer una investigación respecto a la evolución de la artesanía en México.
                        <select class="input100" id="p64" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>65. Montar la coreografía para un programa musical.
                        <select class="input100" id="p65" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>66. Leer e interpretar notas musicales.
                        <select class="input100" id="p66" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>67. Producir audiovisuales.
                        <select class="input100" id="p67" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>68. Dominar perfectamente tres o más idiomas.
                        <select class="input100" id="p68" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>69. Estudiar a fondo la historia y evolución de un pueblo.
                        <select class="input100" id="p69" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>70. Hacer visitas a las bibliotecas más grandes del mundo.
                        <select class="input100" id="p70" onchange="verif7(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>71. Conocer las teorías que hablan de Dios.
                        <select class="input100" id="p71" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>72. Ser parte de un jurado para una obra teatral.
                        <select class="input100" id="p72" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>73. Investigar los diferentes estilos y géneros literarios de la biblia.
                        <select class="input100" id="p73" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>74. Ser jurado en concurso de logotipos.
                        <select class="input100" id="p74" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>75. Dirigir una escuela de danza y baile.
                        <select class="input100" id="p75" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>76. Hacer arreglos musicales para un intérprete famoso.
                        <select class="input100" id="p76" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>77. Tomar fotografías para una revista.
                        <select class="input100" id="p77" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>78. Trabajar en una editorial haciendo traducciones.
                        <select class="input100" id="p78" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>79. Participar en el rescate de construcciones antiguas.
                        <select class="input100" id="p79" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>80. Ser experto en colecciones de libros clásicos.
                        <select class="input100" id="p80" onchange="verif8(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>81. Conocer el fin que persigue el hombre y la razón de la historia.
                        <select class="input100" id="p81" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>82. Investigar y representar teatro de origen indígena.
                        <select class="input100" id="p82" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>83. Enseñar redacción y ortografía.
                        <select class="input100" id="p83" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>84. Manejar la técnica del dibujo.
                        <select class="input100" id="p84" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>85. Dirigir a un grupo de niños.
                        <select class="input100" id="p85" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>86. Ser parte de una sinfónica.
                        <select class="input100" id="p86" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>87. Diseñar y producir programas televisivos para niños.
                        <select class="input100" id="p87" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>88. Conocer a fondo la gramática de otros idiomas.
                        <select class="input100" id="p88" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>89. Hacer revisiones y estudios de documentos antiguos.
                        <select class="input100" id="p89" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>90. Promover las visitas a las bibliotecas.
                        <select class="input100" id="p90" onchange="verif9(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <br><hr style="border-color:red;"><br>
                    <strong>91. Enseñar la materia de filosofía en una universidad.
                        <select class="input100" id="p91" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>92. Dirigir telenovelas de alta calidad.
                        <select class="input100" id="p92" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>93. Concientizar a la gente del lenguaje escrito.
                        <select class="input100" id="p93" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>94. Ser hábil en el dibujo y modelado.
                        <select class="input100" id="p94" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>95. Organizar un programa para la danza y el baile.
                        <select class="input100" id="p95" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>96. Componer y ejecutar música con aparatos electrónicos.
                        <select class="input100" id="p96" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>97. Manejar las teorías de la comunicación humana.
                        <select class="input100" id="p97" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>98. Ayudar a estudiantes en la traducción de materiales científicos.
                        <select class="input100" id="p98" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>99. Investigar los diferentes grupos sociales.
                        <select class="input100" id="p99" onchange="verif10(this)">
                        <?php echo $options ?>
                        </select>
                    </strong>
                    <strong>100. Conocer el manejo de una biblioteca.
                        <select class="input100" id="p100" onchange="verif10(this)">
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

for (i=1; i<=100; i++){
    if(a > 10){
            a = 1;
        } 
    console.log(i);
        document.getElementById('p'+i).value =a;
        a += 1;
        
} 

    function suma(e){
        e.preventDefault()

        HM  = 0;
        SEO = 0;
        SEE = 0;
        SEP = 0;
        SEC = 0;
        SEA = 0;
        SC  = 0;
        I   = 0;
        C   = 0;
        CC  = 0;


        for (i=0; i < 10; i++) {
            HM+=parseInt(document.getElementById(`p${(i*10)+1}`).value) || 0;
            SEO+=parseInt(document.getElementById(`p${(i*10)+2}`).value) || 0;
            SEE+=parseInt(document.getElementById(`p${(i*10)+3}`).value) || 0;
            SEP+=parseInt(document.getElementById(`p${(i*10)+4}`).value) || 0;
            SEC+=parseInt(document.getElementById(`p${(i*10)+5}`).value) || 0;
            SEA+=parseInt(document.getElementById(`p${(i*10)+6}`).value) || 0;
            SC+=parseInt(document.getElementById(`p${(i*10)+7}`).value) || 0;
            I+=parseInt(document.getElementById(`p${(i*10)+8}`).value) || 0;
            C+=parseInt(document.getElementById(`p${(i*10)+9}`).value) || 0;
            CC+=parseInt(document.getElementById(`p${(i*10)+10}`).value) || 0;
        }

        var locations = [
            "hombremismo",
            "suexpresionoral",
            "suexpresionescrita",
            "suexpresionplastica",
            "suexpresioncorporal",
            "suexpresionauditiva",
            "sucomplementacion",
            "idiomas",
            "sucombinacion",
            "cuidadocultural"
        ]

        var results = [HM, SEO, SEE, SEP, SEC, SEA, SC, I, C, CC]
        var max = results[0];
        var maxIndex = 0;

        for (var i = 1; i < results.length; i++) {
            if (results[i] > max) {
                maxIndex = i;
                max = results[i];
            }
        }
        
        window.location.href = `../resultados?res=humanidades_${locations[maxIndex]}`;
    }
</script>

<script type="text/javascript">
    	function verif(s1) {
    		var s2;
    		for (var i=1;i<=10;i++) {
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
    		for (var i=11;i<=20;i++) {
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
    		for (var i=21;i<=30;i++) {
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
    		for (var i=31;i<=40;i++) {
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
    		for (var i=41;i<=50;i++) {
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
    		for (var i=51;i<=60;i++) {
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
    		for (var i=61;i<=70;i++) {
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
    		for (var i=71;i<=80;i++) {
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
    		for (var i=81;i<=90;i++) {
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
    		for (var i=91;i<=100;i++) {
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
    var validarp91 = function (e) {
        if (formulario.p91.value == 0) {
            alert("Campo incompleto: Pregunta 91");
            return false;
        }
            return true;
    };
    var validarp92 = function (e) {
        if (formulario.p92.value == 0) {
            alert("Campo incompleto: Pregunta 92");
            return false;
        }
            return true;
    };
    var validarp93 = function (e) {
        if (formulario.p93.value == 0) {
            alert("Campo incompleto: Pregunta 93");
            return false;
        }
            return true;
    };
    var validarp94 = function (e) {
        if (formulario.p94.value == 0) {
            alert("Campo incompleto: Pregunta 94");
            return false;
        }
            return true;
    };
    var validarp95 = function (e) {
        if (formulario.p95.value == 0) {
            alert("Campo incompleto: Pregunta 95");
            return false;
        }
            return true;
    };
    var validarp96 = function (e) {
        if (formulario.p96.value == 0) {
            alert("Campo incompleto: Pregunta 96");
            return false;
        }
            return true;
    };
    var validarp97 = function (e) {
        if (formulario.p97.value == 0) {
            alert("Campo incompleto: Pregunta 97");
            return false;
        }
            return true;
    };
    var validarp98 = function (e) {
        if (formulario.p98.value == 0) {
            alert("Campo incompleto: Pregunta 98");
            return false;
        }
            return true;
    };
    var validarp99 = function (e) {
        if (formulario.p99.value == 0) {
            alert("Campo incompleto: Pregunta 99");
            return false;
        }
            return true;
    };
    var validarp100 = function (e) {
        if (formulario.p100.value == 0) {
            alert("Campo incompleto: Pregunta 100");
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
        validarp90(e) && 
        validarp91(e) && 
        validarp92(e) && 
        validarp93(e) && 
        validarp94(e) && 
        validarp95(e) && 
        validarp96(e) && 
        validarp97(e) && 
        validarp98(e) && 
        validarp99(e) && 
        validarp100(e) ){
            suma(e);
        }else{
            e.preventDefault();
        }
            
        
    };

    formulario.addEventListener("submit", validar);
    
}
</script>


</html>