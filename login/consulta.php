<!-- Parra Torres Jorge Isaac 
Luis Angel de la Mora Gonzalez-->
<?php
    //conexion con el servidor
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "alumnos";
    $conexion = mysqli_connect($host,$user,$pass,$db);
                mysqli_set_charset($conexion, "utf8");

    //verificar la conexion
    if($conexion -> connect_errno){
        echo "No conectado";
    }else{
        echo "";
    }

    $codigo = $_GET['codigo'];
    $contraseña = $_GET['contraseña'];

     //consulta de valores de usuario y contraseña para ingresar
     $consulta="SELECT * FROM datos WHERE codigo='$codigo' AND contraseña='$contraseña'";
     //ejecutar consulta
     $resultadoconsulta=mysqli_query($conexion, $consulta);
     //si conincide el dato devuelve 1 o 0
     $filas=mysqli_num_rows($resultadoconsulta);
     
     if($filas>0){
        $consulta = "SELECT Resultados FROM datos WHERE codigo='$codigo' AND contraseña='$contraseña'";
        $resultado = mysqli_query($conexion, $consulta);
        $var = $resultado->fetch_assoc();
        if ($var['Resultados'] != NULL){
            //var_dump($var['Resultados']);
            //var_dump(empty($resultado));
            header("location: ../resultados?res=".$var['Resultados']);
        }else {
            echo"<script type=\"text/javascript\">window.location='../preguntas/preguntas.php';</script>";
        }        

     }else{
         echo"<script type=\"text/javascript\">alert('Error de autentificación'); window.location='login.html';</script>";  
     }

     mysqli_free_result($resultadoconsulta);
     mysqli_close($conexion);//cerrar conexion

    //  iniciar sesión
     session_start();
          $_SESSION['codigo'] = $codigo;
        
    
?>