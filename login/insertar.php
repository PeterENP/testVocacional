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

    // $solictud = "CREATE TABLE datos( 
    //     Nombre varchar (30),
    //     Apellido varchar (30),
    //     Codigo int (9),
    //     Correo varchar (40),
    //     Semestre int (1),
    //     Grupo varchar (1),
    //     Turno varchar (11), PRIMARY KEY (codigo)) 
    //     Usuario varchar (15) 
    //     Contraseña varchar (9)";

    // $resultado = mysqli_query($conexion, $solictud);

    //obtener el valor en la variable
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $codigo = $_GET['codigo'];
    $correo = $_GET['correo'];
    $semestre = $_GET['semestre'];
    $grupo = $_GET['grupo'];
    $turno = $_GET['turno'];
    // $usuario = $_GET['usuario'];
    $contraseña = $_GET['contraseña'];
    
    $existe = "SELECT * FROM datos WHERE Correo='$correo' OR Codigo=$codigo";

    $resultado = mysqli_query($conexion,$existe);

    //var_dump($resultado->fetch_assoc());

    if($resultado->fetch_assoc() == NULL) {
        $solicitud = "INSERT INTO datos (Nombre, Apellido, Codigo, Correo, Semestre, Grupo, Turno, Contraseña)
        VALUES('$nombre','$apellido','$codigo','$correo','$semestre','$grupo','$turno','$contraseña')";

        $agregar = mysqli_query($conexion,$solicitud);

        echo"<script type=\"text/javascript\">alert('Se ha creado la cuenta satisfactoriamente, porfavor inicia sesión'); window.location='login.html';</script>";  
 
    } else {
        echo"<script type=\"text/javascript\">alert('El Código o Correo ya ha sido utilizado, porfavor ingresa otro'); window.location='../registro/registro.php';</script>";
    }
    
?>