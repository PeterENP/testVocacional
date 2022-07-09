// Parra Torres Jorge Isaac 
// Luis Angel de la Mora Gonzalez

(function () {
    var formulario = document.getElementsByName('formulario')[0],
        elementos = formulario.elements,
        boton = document.getElementById('btnContinuar');

    var validarNombre = function (e) {
        if (formulario.nombre.value == 0) {
            alert("Campo incompleto: Nombre");
            e.preventDefault();
        }
    };

    var validarApellido = function (e) {
        if (formulario.apellido.value == 0) {
            alert("Campo incompleto: Apellido");
            e.preventDefault();
        }
    };

    var validarCodigo = function (e) {
        if (formulario.codigo.value == 0) {
            alert("Campo incompleto: Codigo");
            e.preventDefault();
        }
    };
    var validarCorreo = function (e) {
        if (formulario.correo.value == 0) {
            alert("Campo incompleto: Correo");
            e.preventDefault();
        }
    };
    var validarSemetre = function (e) {
        if (formulario.semestre.value == 0) {
            alert("Campo incompleto: Semestre");
            e.preventDefault();
        }
    };
    var validarGrupo = function (e) {
        if (formulario.grupo.value == 0) {
            alert("Campo incompleto: Grupo");
            e.preventDefault();
        }
    };

    // var validarUsuario = function (e) {
    //     if (formulario.usuario.value == 0) {
    //         alert("Campo incompleto: Usuario");
    //         e.preventDefault();
    //     }
    // };

    var validarContraseña = function (e) {
        if (formulario.contraseña.value == 0) {
            alert("Campo incompleto: Contraseña");
            e.preventDefault();
        }
    };

    var validar = function (e) {
        validarNombre(e);
        validarApellido(e);
        validarCodigo(e);
        validarCorreo(e);
        validarSemetre(e);
        validarGrupo(e);
        validarRadio(e);
        // validarUsuario(e);
        validarContraseña(e);
    };

    formulario.addEventListener("submit", validar);

    var validarRadio = function (e) {
        if (formulario.turno[0].checked == true || formulario.turno[1].checked == true) {
        } else {
            alert("Campo incompleto: Turno");
            e.preventDefault();
        }
    }
}());

function solonumeros(e) {

    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    codigo = "1234567890";
    especiales = "37-38-46"; //flechas d i, suprimir
    teclado_especial = false;

    for (var i in especiales) {
        if (key == especiales[i]) {
            teclado_especial = true;
        }
    }
    if (codigo.indexOf(teclado) == -1 && !teclado_especial) {
        return false;
    }
};

function sololetras(e) {

    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    nombre = "qwertyuiopasdfghjklñzxcvbnmáéíóúQWERTYUIOPASDFGHJKLÑZXCVBNM ";
    especiales = "8-37-38-46"; //espacio,flechas d i, suprimir
    teclado_especial = false;

    for (var i in especiales) {
        if (key == especiales[i]) {
            teclado_especial = true;
        }
    }
    if (nombre.indexOf(teclado) == -1 && !teclado_especial) {
        return false;
    }

};









