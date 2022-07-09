<!-- Parra Torres Jorge Isaac 
Luis Angel de la Mora Gonzalez-->
<?php 
session_start();
$varsesion = $_SESSION['codigo'];
if($varsesion == null || $varsesion = ''){
	echo "Usted no tiene autorización";
	header("location: ../login/login.html");
	die();
}
?>
<script type="text/javascript">
	const carreras = {
		fisicomatematicas: {
			puras: [
				'Licenciado en matemáticas',
				'Licenciado en física',
				'Ingeniero físico industrial',
				'Licenciado en fisicomatemáticas'
			],
			artefactos: [
				'Ingeniero militar artillero',
				'Ingeniero en transmisiones',
				'Ingeniero mecánico',
				'Ingeniero electricista',
				'Ingeniero físico industrial',
				'Ingeniero en sistemas computacionales',
				'Ingeniero en electrónica y comunicaciones',
				'Ingeniero en construcción de barcos',
				'Ingeniero en sistemas electrónicos',
				'Jefe de máquinas',
				'Ingeniero mecánico electricista',
				'Ingeniero en aeronáutica',
				'Ingeniero biomédico'
			],
			naturaleza: [
				'Ingeniero geólogo',
				'Ingeniero geólogo marino',
				'Ingeniero petrolero',
				'Ingeniero minero',
				'Ingeniero en energía',
				'Licenciado en ciencias atmosféricas'
			],
			industria: [
				'Ingeniero industrial y de sistemas',
				'Ingeniero industrial y de procesos',
				'Ingeniero textil en tejidos de punto',
				'Ingeniero textil en acabados',
				'Ingeniero industrial militar',
				'Ingeniero industrial administrador',
				'Licenciado en administración de operaciones',
				'Licenciado en administración y organización de la producción'
			],
			construccion: [
				'Ingeniero civil',
				'Ingeniero constructor militar',
				'Ingeniero municipal',
				'Ingeniero civil portuario',
				'Arquitectura',
				'Ingeniero urbanista',
				'Ingeniero civil arquitecto',
				'Licenciado arquitecto en planeación',
				'Ingeniero en planeación y diseño',
				'Licenciado en diseño de los asentamientos humanos',
				'Arquitectura y urbanismo',
				'Ingeniero civil en sistemas',
				'Ingeniero civil en hidráulica',
				'Ingeniero civil en construcción y estructura'
			],
			manejodedatos: [
				'Licenciado en administración y actuaría',
				'Licenciado en actuaría',
				'Licenciado en estadística',
				'Licenciado en matemáticas aplicadas',
				'Licenciado en estadística y matemática',
				'Licenciado en matemática'
			],
			mediciongeodesica: [
				'Ingeniero topógrafo y geodésta',
				'Ingeniero topógrafo hidromensor',
				'Ingeniero topógrafo',
				'Ingeniero geógrafo y teniente de corbeta',
				'Ingeniero geodésta',
				'Ingeniero geógrafo'
			],
			diseno: [
				'Licenciado en diseño industrial',
				'Ingeniero en diseño industrial'
			]
		}, 
		administrativas: {
			recursosinstrumentales: [
				'Licenciado en informática',
				'Licenciado en computación',
				'Licenciado en computación administrativa',
				'Licenciado analista programador',
				'Licenciado en ciencias de la información',
				'Licenciado en ciencias de computación',
				'Licenciado en informática y contaduría pública'
			],
			recursosfinancieros: [
				'Contador público',
				'Licenciado en administración financiera',
				'Licenciado en economía',
				'Licenciado en banca y finanzas',
				'Licenciado en administración bancaria y finanzas',
				'Licenciado en informática y contaduría pública'
			],
			recursoshumanos: [
				'Licenciado en administración de empresas',
				'Licenciado en relaciones industriales',
				'Licenciado en administración de personal',
				'Licenciado en recursos humanos',
				'Licenciado en psicología organizacional'
			],
			recursoscomerciales: [
				'Licenciado en comercio',
				'Licenciado en comercio exterior',
				'Licenciado en mercadotecnia',
				'Licenciado en aduana',
				'Licenciado en administración de empresas',
				'Licenciado en publicidad',
				'Licenciado en relaciones comerciales'
			],
			recursosturisticos: [
				'Licenciado en turismo',
				'Licenciado en administración de empresas turísticas',
				'Licenciado en hotelería y turismo',
				'Licenciado en administración de empresas'
			],
			recursospublicos: [
				'Licenciado en administración pública',
				'Licenciado en administración de planeación y desarrollo',
				'Licenciado en administración fiscal',
				'Licenciado en administración de empresas',
				'Licenciado en administración de empresas públicas',
				'Licenciado en administración pública y ciencias políticas'
			],
			recursoseducativos: [
				'Licenciado en administración educativa',
				'Licenciado en administración de empresas',
				'Licenciado en planeación y administración de la educación'
			],
			recursosagricolas: [
				'Licenciado en administración agrícola',
				'Licenciado en administración de empresas agrícolas',
				'Licenciado en administración de empresas',
				'Licenciado en administración de agroindustrias'
			],
			recursosmineros: [
				'Licenciado en administración de empresas mineras',
				'Licenciado en administración de empresas'
			]
		},
		biologias:{
			puras: [
				'Licenciado en biología',
				'Licenciado en biología marína',
				'Licenciado biólogo ecólogo',
				'Biólogo científico en botánica',
				'Biólogo científico en microbiología',
				'Biólogo científico en biofísica'
			],
			saludhumana: [
				'Licenciado en enfermería',
				'Medico cirujano',
				'Medicina homeopática',
				'Odontología',
				'Audiometrísta',
				'Optometrista',
				'Licenciado en nutrición',
				'Rehabilitación física',
				'Licenciado en investigación biomédica básica'
			],
			saludanimal: [
				'Médico veterinario',
				'Ingeniero zootecnísta',
				'Medico veterinario y zootecnista'
			],
			terrestre: [
				'Ingeniero fitotecnista',
				'Ingeniero agrónomo en zonas áridas',
				'Ingeniero agrónomo en agroindustrias',
				'Ingeniero agroindustrial',
				'Licenciado en horticultura',
				'Ingeniero hortícola',
				'Ingeniero agrónomo fruticultor',
				'Ingeniero en plantación'
			],
			silvicola: [
				'Ingeniero forestal',
				'Guardia forestal',
				'Ingeniero agrónomo en recursos forestales',
				'Ingeniero agrónomo en bosques',
				'Ingeniero agrónomo fruticultor',
				'Ingeniero silvícola'
			],
			ambientalista: [
				'Ingeniero ambiental',
				'Ingeniero civil ambiental',
				'Ingeniero civil en agua',
				'Ingeniero civil en aire',
				'Licenciado en ecología e ingeniería social'
			],
			maritima: [
				'Biólogo pesquero marino',
				'Biólogo pesquero',
				'Ingeniero bioquímico (tecnología de alimentos del mar)',
				'Ingeniero pesquero',
				'Ingeniero en pesquerías',
				'Ingeniero acuacultor',
				'Ingeniero en sistemas acuícolas',
				'Ingeniero en pesca industrial',
				'Oceanólogo',
				'Ingeniero acuicultor'
			]
		},
		quimicas: {
			puras: [
				'Licenciado en ciencias químicas'
			],
			inorganica: [
				'Ingeniero químico de procesos',
				'Ingeniero químico administrador',
				'Ingeniero químico industrial',
				'Ingeniero químico metalurgista',
				'Químico metalúrgico',
				'Ingeniero geoquímico'
			],
			organicobioquimicasalimentos:[
				'Ingeniero bioquímico administrador en servicios alimentarios',
				'Ingeniero en procesos químicos alimentarios',
				'Ingeniero químico en alimentos',
				'Químico farmacéutico biólogo en alimentos',
				'Bioquímico en procesado de alimentos',
				'Químico biólogo en alimentos',
				'Licenciado en química de los alimentos',
				'Ingeniero en industrias alimentarias',
				'Ingeniero en procesos químicos de los alimentos',
				'Ingeniero bioquímico en productos naturales',
				'Ingeniero bioquímico',
				'Ingeniero en química orgánica'
			],
			organicobioquimicoclinico:[
				'Licenciado en ciencias químicas',
				'Químico clínico',
				'Químico bactereólogico parasitólogo',
				'Licenciado químico clínico',
				'Químico biólogo en análisis clínicos',
				'Licenciado en química, en análisis clínicos',
				'Ingeniero bioquímico'
			],
			organicobioquimicofarmocologia:[
				'Químico farmacéutico biólogo en ciencias nucleares',
				'Químico farmacéutico biólogo en farmacia',
				'Químico farmacéutico industrial',
				'Químico farmacobiólogo',
				'Químico farmacobiólogo en farmacia clínica',
				'Químico farmacobiólogo en farmacia industrial'
			],
			quimicasagricolas:[
				'Química agrícola',
				'Ingeniero químico agroindustrial',
				'Ingeniero químico en agroindustrias'
			],
			organicopetroquimicoindustrial:[
				'Ingeniero químico petrolero',
				'Ingeniero químico industrial',
				'Ingeniero químico en procesos',
				'Ingeniero químico en procesos petroquímicos',
				'Ingeniero químico en petroquímica'
			]
		},
		humanidades:{
			hombremismo:[
				'Licenciado en filosofía',
				'Licenciado en ciencias humanas',
				'Licenciado en teología',
				'Licenciado en humanidades y filosofía',
				'Licenciado en religión',
				'Licenciado en ciencias teológicas'
			],
			suexpresionoral:[
				'Licenciado en teatro',
				'Dramaturgo',
				'Dirección teatral',
				'Licenciado en literatura dramática y teatro',
				'Licenciado en actuación'
			],
			suexpresionescrita:[
				'Licenciado en letras españolas',
				'Licenciado en literatura iberoamericana',
				'Licenciado en letras inglesas',
				'Lingüística',
				'Licenciado en periodismo',
				'Licenciado en lengua y literatura',
				'Licenciado en letras iberoamericanas',
				'Licenciado en letras y periodismo',
				'Licenciado en letras, lengua y literatura hispánicas',
				'Licenciado en humanidades, en lingüística',
				'Licenciado en lingüística',
				'Licenciado en lingüística aplicada',
				'Licenciado en antropología, en lingüística',
				'Licenciado en etnolingüística'
			],
			suexpresionplastica:[
				'Licenciado en artes visuales',
				'Licenciado en escritura y grabado',
				'Licenciado en dibujo publicitario',
				'Licenciado en pintura',
				'Licenciado en artesanías',
				'Licenciado en diseño gráfico',
				'Licenciado en grabado',
				'Restauración y mantenimiento de bienes inmuebles',
				'Arquitectura (tendiente al diseño)',
				'Licenciado en diseño gráfico y publicitario',
				'Licenciado en decoración de interiores',
				'Licenciado en diseño de modas',
				'Licenciado artes visuales camarográficas',
				'Escenográfo',
				'Licenciado en artes, en fotografía'
			],
			suexpresioncorporal:[
				'Licenciado en danza',
				'Licenciado en artes de danza contemporánea',
				'Folklorista'
			],
			suexpresionauditiva:[
				'Licenciado en composición',
				'Instrumentista',
				'Licenciado en piano',
				'Licenciado en canto',
				'Licenciado en musicología',
				'Licenciado en etnomúsica',
				'Licenciado en producción y programación musical',
				'Licenciado en música y director de coros',
				'Licenciado en música y cantante',
				'Licenciado en artes, en canto',
				'Licenciado en artes, en clarinete',
				'Licenciado en artes, en corno',
				'Licenciado en artes, en oboe',
				'Licenciado en laudería',
				'Licenciado en ejecución musical',
				'Licenciado en música sacra y dirección coral',
				'Licenciado en viola',
				'Licenciado en violín',
				'Licenciado en flauta',
				'Licenciado en guitarra',
				'Licenciado en tuba'
			],
			sucomplementacion:[
				'Licenciado en ciencias de la comunicación',
				'Licenciado en ciencias de la comunicación en televisión',
				'Licenciado en ciencias de la comunicación en cine',
				'Licenciado en ciencias de la comunicación en radio',
				'Licenciado en ciencias de la comunicación en publicidad',
				'Licenciado en ciencias de la información'
			],
			idiomas:[
				'Licenciado en interpretación y traducción',
				'Licenciado en traducción simultanea',
				'Licenciado en traducción',
				'Licenciado en lenguas y literatura inglesa',
				'Licenciado en lenguas y literatura modernas, en letras italianas',
				'Licenciado en lenguas extranjeras',
				'Licenciado en lenguas modernas',
				'Licenciado en idiomas, en inglés',
				'Licenciado en lenguas y literatura modernas, en letras alemanas'
			],
			sucombinacion:[
				'Arqueología',
				'Licenciado en historia',
				'Licenciado en etnolingüística',
				'Licenciado en antropología social, en sociolingüística',
				'Licenciado en ciencias antropológicas en historia',
				'Licenciado en etnohistoria',
				'Licenciado en ciencias antropológicas, en arqueología',
				'Licenciado en etnología',
				'Licenciado en antropología física',
				'Licenciado en antropología cultural',
				'Licenciado en antropología de la educación',
				'Licenciado en antropología política'
			],
			cuidadocultural:[
				'Licenciado en biblioteconomía',
				'Licenciado bibliotecónomo',
				'Archivonomía'
			]
		},
		sociales:{
			leyesrelacionhumana: [
				'Licenciado en sociología',
				'Licenciado en antropología social',
				'Licenciado en ciencias sociales',
				'Licenciado en sociología rural',
				'Licenciado en antropología social de la educación',
				'Licenciado en sociología del trabajo'
			],
			relacionasistencial: [
				'Licenciado en trabajo social',
				'Licenciado en ciencias de la comunidad',
				'Licenciado en trabajo social escolar',
				'Licenciado en trabajo social penitenciario',
				'Licenciado en trabajo social médico'
			],
			relacionexistencial:[
				'Licenciado en psicología',
				'Licenciado en psicología organizacional',
				'Licenciado en relaciones familiares',
				'Licenciado en psicología criminal',
				'Psicólogo orientador',
				'Licenciado en psicología infantil',
				'Licenciado en psicología clínica',
				'Licenciado en psicología experimental'
			],
			relacionlegal: [
				'Licenciado en derecho',
				'Licenciado en ciencias políticas y administración pública',
				'Licenciado en relaciones internacionales',
				'Abogado y notario público',
				'Licenciado en derecho público',
				'Licenciado en derecho laboral',
				'Licenciado en derecho financiero',
				'Licenciado en derecho mercantil',
				'Licenciado en derecho y ciencias sociales',
				'Licenciado en derecho y ciencias jurídicas',
				'Licenciado en ciencias políticas'
			],
			relacioneducacional: [
				'Licenciado en educación preescolar',
				'Licenciado normalista',
				'Licenciado en pedagogía',
				'Licenciado en ciencias de la educación',
				'Licenciado en tecnología educativa',
				'Licenciado en educación especial por ceguera y debilidad visual',
				'Licenciado en educación especial y deficiencia mental',
				'Licenciado en educación especial en audición y lenguaje',
				'Licenciado en educación de menores infractores',
				'Licenciado en docencia',
				'Licenciado en educación de transtornos del aprendizaje',
				'Carreras pedagógicas en general'
			],
			relacioninterhumana: [
				'Licenciado en relaciones públicas',
				'Licenciado en relaciones humanas',
				'Licenciado en administración del tiempo libre',
				'Licenciado en comunicación humana',
				'Licenciado en comunicación organizacional',
				'Licenciado en comunicación turística'
			]
		}
	}
	
   
   // window.onload = function(){
	//	const res = window.location.search.substring(5).split('_');
	//	carrerasResultantes = carreras[res[0]][res[1]];
	//	for(i = 0; i < carrerasResultantes.length; i++) {
	//		const newP = document.createElement("p"); 
	//		const textNode = document.createTextNode(carrerasResultantes[i]); 
	//		newP.appendChild(textNode);
	//		document.getElementById("resultados").appendChild(newP);
	//	}
	//}

	links = {

	'Licenciado en matemáticas':[
		'http://www.pregrado.udg.mx/Centros/Tem%C3%A1ticos/CUCEI/matematicas'
	],
	'Licenciado en física':[
		'http://www.pregrado.udg.mx/Centros/Tem%C3%A1ticos/CUCEI/fisica'
	],
	'Ingeniero físico industrial':[
		'https://tec.mx/es/ciencias-aplicadas/ingeniero-fisico-industrial'
	],
	'Licenciado en fisicomatemáticas':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-fisica'
	],
	'Ingeniero militar artillero':[
		'https://www.gob.mx/sedena/acciones-y-programas/informacion-general-de-la-escuela-militar-de-ingenieros'
	],
	'Ingeniero en transmisiones':[
		'https://www.gob.mx/sedena/acciones-y-programas/escuela-militar-de-transmisiones'
	],
	'Ingeniero mecánico':[
		'http://www.pregrado.udg.mx/Centros/Tem%C3%A1ticos/CUCEI/ingenieria-mecanica-electrica-cucei'
	],
	'Ingeniero electricista':[
		'http://www.pregrado.udg.mx/Centros/Tem%C3%A1ticos/CUCEI/ingenieria-mecanica-electrica-cucei'
	],
	'Ingeniero físico industrial':[
		'https://tec.mx/es/ciencias-aplicadas/ingeniero-fisico-industrial'
	],
	'Ingeniero en sistemas computacionales':[
		'http://www.pregrado.udg.mx/Centros/Regionales/CUALTOS/ingenieria-en-computacion-cualtos'
	],
	'Ingeniero en electrónica y comunicaciones':[
		'http://www.pregrado.udg.mx/Centros/Tem%C3%A1ticos/CUCEI/ingenieria-en-comunicaciones-y-electronica-cucei'
	],
	'Ingeniero en construcción de barcos':[
		'https://www.uv.mx/veracruz/fimcn/licenciatura/inaval/'
	],
	'Ingeniero en sistemas electrónicos':[
		'https://www.une.edu.mx/es/licenciatura/isce/'
	],
	'Jefe de máquinas':[
		'https://www.maritimeinfo.org/es/Gu%C3%ADa%20de%20carrera/chief-engineer'
	],
	'Ingeniero mecánico electricista':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-mecanica-electrica'
	],
	'Ingeniero en aeronáutica':[
		'https://www.uanl.mx/oferta/ingeniero-en-aeronautica/'
	],
	'Ingeniero biomédico':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-biomedica'
	],
	'Ingeniero geólogo':[
		'https://www.ugto.mx/licenciaturas/por-orden-alfabetico-i/ingeniero-geologo'
	],
	'Ingeniero geólogo marino':[
		'http://www.oferta.unam.mx/ingenieria-geologica.html'
	],
	'Ingeniero petrolero':[
		'http://oferta.unam.mx/ingenieria-petrolera.html'
	],
	'Ingeniero minero':[
		'https://www.ugto.mx/licenciaturas/por-area-del-conocimiento/ingenierias/ingenieria-en-minas'
	],
	'Ingeniero en energía':[
		'http://www.cutonala.udg.mx/oferta-academica/ingenieria-energia'
	],
	'Licenciado en ciencias atmosféricas':[
		'https://www.atmosfera.unam.mx/licenciatura/'
	],
	'Ingeniero industrial y de sistemas':[
		'https://uvm.mx/oferta-academica/licenciaturas-ingenierias/ingenierias-uvm/ingenieria-industrial-y-de-sistemas'
	],
	'Ingeniero industrial y de procesos':[
		'https://www.utcj.edu.mx/Paginas/Carreras/Ingenieria-en-Procesos-y-Operaciones-Industriales.aspx'
	],
	'Ingeniero textil en tejidos de punto':[
		'https://sic.cultura.gob.mx/ficha.php?table=educacion_artistica&table_id=1300'
	],
	'Ingeniero textil en acabados':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=26&nombre=Ingenier%C3%ADa-Textil'
	],
	'Ingeniero industrial militar':[
		'https://universidadesdemexico.mx/universidades/universidad-del-ejercito-y-fuerza-aerea/ingenieria-industrial'
	],
	'Ingeniero industrial administrador':[
		'http://www.fcq.uanl.mx/oferta-educativa/licenciatura/ingeniero-industrial-administrador-2/'
	],
	'Licenciado en administración de operaciones':[
		'https://www.educaedu.com.mx/licenciatura-en-administracion-de-operaciones-comerciales-carreras-universitarias-23428.html'
	],
	'Licenciado en administración y organización de la producción':[
		'http://guiadecarreras.udg.mx/licenciatura-en-administracion-de-las-organizaciones/'
	],
	'Ingeniero civil':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-civil'
	],
	'Ingeniero constructor militar':[
		'https://www.gob.mx/sedena/acciones-y-programas/informacion-general-de-la-escuela-militar-de-ingenieros'
	],
	'Ingeniero municipal':[
		'http://escueladeingenieriamunicipal.edu.mx/'
	],
	'Ingeniero civil portuario':[
		'https://www.techtitute.com/mx/ingenieria/experto-universitario/experto-construccion-infraestructuras-portuarias'
	],
	'Arquitectura':[
		'http://www.pregrado.udg.mx/Centros/Tem%C3%A1ticos/CUAAD/arquitectura-cuaad'
	],
	'Ingeniero urbanista':[
		'http://www.cuaad.udg.mx/?q=oferta/licenciaturas/luma'
	],
	'Ingeniero civil arquitecto':[
		'http://www.pregrado.udg.mx/Centros/Tem%C3%A1ticos/CUCEI/ingenieria-civil-cucei'
	],
	'Licenciado arquitecto en planeación':[
		'http://www.cuaad.udg.mx/?q=oferta/licenciaturas/la'
	],
	'Ingeniero en planeación y diseño':[
		'http://cuaad.udg.mx/?q=oferta/licenciaturas/ldi'
	],
	'Licenciado en diseño de los asentamientos humanos':[
		'http://denms.uaemex.mx/exporientavirtual/?courses=licenciado-en-planeacion-territorial/'
	],
	'Arquitectura y urbanismo':[
		'https://ueauniversidad.mx/arquitectura-y-urbanismo/'
	],
	'Ingeniero civil en sistemas':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-civil'
	],
	'Ingeniero civil en hidráulica':[
		'http://fic.uanl.mx/hidraulica/'
	],
	'Ingeniero civil en construcción y estructura':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-civil'
	],
	'Licenciado en administración y actuaria':[
		'https://www.uanl.mx/oferta/licenciatura-en-actuaria/'
	],
	'Licenciado en actuaria':[
		'https://www.uanl.mx/oferta/licenciatura-en-actuaria/'
	],
	'Licenciado en estadística':[
		'https://www.secacad.unach.mx/index.php/desarrollo-academico/29-educacion-a-distancia/141-licenciatura-en-estadistica-y-sistemas-de-informacion'
	],
	'Licenciado en matemáticas aplicadas':[
		'https://www.uaeh.edu.mx/campus/icbi/oferta/licenciaturas/lic_matematicasaplicadas.html'
	],
	'Licenciado en estadística y matemática':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-matematicas'
	],
	'Licenciado en matemática':[
		'http://www.pregrado.udg.mx/Centros/Tem%C3%A1ticos/CUCEI/matematicas'
	],
	'Ingeniero topógrafo y geodésta':[
		'http://dictyg.fi-c.unam.mx/html/programas/ingtopgeo/perfil/descripcion.html'
	],
	'Ingeniero topógrafo hidromensor':[
		'http://dictyg.fi-c.unam.mx/html/programas/ingtopgeo/perfil/descripcion.html'
	],
	'Ingeniero topógrafo':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-topografica'
	],
	'Ingeniero geógrafo y teniente de corbeta':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-topografica'
	],
	'Ingeniero geodésta':[
		'https://carreras.uas.edu.mx/Ingenieria_Geodesica.html'
	],
	'Ingeniero geógrafo':[
		'http://geografia.cucsh.udg.mx/?q=licenciatura-en-geografia'
	],
	'Licenciado en diseño industrial':[
		'http://www.cuaad.udg.mx/?q=oferta/licenciaturas/ldi'
	],
	'Ingeniero en diseño industrial':[
		'http://www.cuaad.udg.mx/?q=oferta/licenciaturas/ldi'
	],
	'Licenciado en informática':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-informatica'
	],
	'Licenciado en computación':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-ingenieria-computacion'
	],
	'Licenciado en computación administrativa':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-ingenieria-computacion'
	],
	'Licenciado analista programador':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-ingenieria-computacion'
	],
	'Licenciado en ciencias de la información':[
		'https://www.lagos.udg.mx/oferta/ltin'
	],
	'Licenciado en ciencias de computación':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-ingenieria-computacion'
	],
	'Licenciado en informática y contaduría pública':[
		'https://www.cucea.udg.mx/es/oferta-academica/licenciaturas/contaduria-publica'
	],
	'Contador público':[
		'http://www.pregrado.udg.mx/Centros/Regionales/CUALTOS/contaduria-publica'
	],
	'Licenciado en administración financiera':[
		'https://www.cucea.udg.mx/es/oferta-academica/licenciaturas/administracion-financiera-y-sistemas'
	],
	'Licenciado en economía':[
		'https://cucea.udg.mx/es/oferta-academica/licenciaturas/economia'
	],
	'Licenciado en banca y finanzas':[
		'https://www.cucea.udg.mx/es/oferta-academica/licenciaturas/administracion-financiera-y-sistemas'
	],
	'Licenciado en administración bancaria y finanzas':[
		'http://www.pregrado.udg.mx/Centros/Regionales/CUALTOS/administracion-cualtos'
	],
	'Licenciado en informática y contaduría pública':[
		'https://www.cucea.udg.mx/es/oferta-academica/licenciaturas/contaduria-publica'
	],
	'Licenciado en administración de empresas':[
		'http://www.pregrado.udg.mx/Centros/Regionales/CUALTOS/administracion-cualtos'
	],
	'Licenciado en relaciones industriales':[
		'https://ugto.mx/licenciaturas/por-entidad-academica/campus-guanajuato/relaciones-industriales'
	],
	'Licenciado en administración de personal':[
		'https://cucea.udg.mx/es/oferta-academica/licenciaturas/recursos-humanos'
	],
	'Licenciado en recursos humanos':[
		'https://cucea.udg.mx/es/oferta-academica/licenciaturas/recursos-humanos'
	],
	'Licenciado en psicología organizacional':[
		'https://www.cetys.mx/oferta-educativa/profesional/licenciatura-en-psicologia-organizacional/'
	],
	'Licenciado en comercio':[
		'https://uvm.mx/oferta-academica/licenciaturas-ingenierias/negocios/licenciatura-en-comercio-y-logistica-internacionales'
	],
	'Licenciado en comercio exterior':[
		'http://pregrado.udg.mx/Centros/Regionales/CUALTOS/negocios-internacionales'
	],
	'Licenciado en mercadotecnia':[
		'https://cucea.udg.mx/es/oferta-academica/licenciaturas/mercadotecnia'
	],
	'Licenciado en aduana':[
		'https://unideal.edu.mx/licenciado-en-gestion-aduanera/'
	],
	'Licenciado en administración de empresas':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en publicidad':[
		'https://www.icest.edu.mx/academico/superior/universidad/negocios/lprp/'
	],
	'Licenciado en relaciones comerciales':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=56'
	],
	'Licenciado en turismo':[
		'https://cucea.udg.mx/es/oferta-academica/licenciaturas/turismo'
	],
	'Licenciado en administración de empresas turísticas':[
		'https://cucea.udg.mx/es/oferta-academica/licenciaturas/turismo'
	],
	'Licenciado en hotelería y turismo':[
		'https://cucea.udg.mx/es/oferta-academica/licenciaturas/turismo'
	],
	'Licenciado en administración de empresas':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en administración pública':[
		'https://cucea.udg.mx/es/oferta-academica/licenciaturas/administracion-gubernamental-y-politicas-publicas'
	],
	'Licenciado en administración de planeación y desarrollo':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en administración fiscal':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en administración de empresas':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en administración de empresas públicas':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en administración pública y ciencias políticas':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en administración educativa':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en administración de empresas':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en planeación y administración de la educación':[
		'https://www.gob.mx/upn/acciones-y-programas/licenciatura-en-administracion-educativa'
	],
	'Licenciado en administración agrícola':[
		'http://www.cualtos.udg.mx/programas/administracion/AD103_administracion_de_empresas_agricolas.pdf'
	],
	'Licenciado en administración de empresas agrícolas':[
		'http://www.cualtos.udg.mx/programas/administracion/AD103_administracion_de_empresas_agricolas.pdf'
	],
	'Licenciado en administración de empresas':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en administración de agroindustrias':[
		'http://guiadecarreras.udg.mx/licenciatura-en-agronegocios/'
	],
	'Licenciado en administración de empresas mineras':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en administración de empresas':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en biología':[
		'http://www.cucba.udg.mx/oferta-academica/licenciaturas/licenciatura-en-biologia'
	],
	'Licenciado en biología marína':[
		'https://www.icmyl.unam.mx/mazatlan/es/investigacion/biologia-marina'
	],
	'Licenciado biólogo ecólogo':[
		'http://www.cucba.udg.mx/oferta-academica/licenciaturas/licenciatura-en-biologia'
	],
	'Biólogo científico en botánica':[
		'http://www.cucba.udg.mx/oferta-academica/licenciaturas/licenciatura-en-biologia'
	],
	'Biólogo científico en microbiología':[
		'http://www.cucei.udg.mx/es/investigacion/cuerpos-academicos/microbiologia'
	],
	'Biólogo científico en biofísica':[
		'http://www.cucei.udg.mx/es/investigacion/cuerpos-academicos/microbiologia'
	],
	'Licenciado en enfermería':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-enfermeria'
	],
	'Medico cirujano':[
		'http://cualtos.udg.mx/oferta-academica/carrera-medico-cirujano-partero'
	],
	'Medicina homeopática':[
		'https://universidadesdemexico.mx/universidades/instituto-politecnico-nacional/licenciatura-en-medico-cirujano-homeopata'
	],
	'Odontología':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-cirujano-dentista'
	],
	'Audiometrísta':[
		'https://www.altillo.com/universidades/mexico/de/distritofederal/Instituto_Mexicano_de_la_Audicion_y_el_Lenguaje_IMAL.asp'
	],
	'Licenciado en nutrición':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-nutricion'
	],
	'Licenciado en nutrición':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-nutricion'
	],
	'Rehabilitación física':[
		'http://guiadecarreras.udg.mx/licenciatura-en-terapia-fisica-cutlajomulco/'
	],
	'Licenciado en investigación biomédica básica':[
		'http://guiadecarreras.udg.mx/licenciatura-en-ingenieria-biomedica/'
	],
	'Médico veterinario':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-medicina-veterinaria-zootecnia'
	],
	'Ingeniero zootecnísta':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-medicina-veterinaria-zootecnia'
	],
	'Medico veterinario y zootecnista':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-medicina-veterinaria-zootecnia'
	],
	'Ingeniero fitotecnista':[
		'http://www.cucba.udg.mx/oferta-academica/licenciaturas/ingeniero-agronomo'
	],
	'Ingeniero agrónomo en zonas áridas':[
		'http://www.cucba.udg.mx/oferta-academica/licenciaturas/ingeniero-agronomo'
	],
	'Ingeniero agrónomo en agroindustrias':[
		'http://www.cucba.udg.mx/oferta-academica/licenciaturas/ingeniero-agronomo'
	],
	'Ingeniero agroindustrial':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-ingenieria-agroindustrial/presentacion'
	],
	'Licenciado en horticultura':[
		'https://www.uaq.mx/index.php/carreras/licenciaturas/fcn/licenciatura-en-horticultura-ambiental'
	],
	'Ingeniero hortícola':[
		'https://www.uaq.mx/index.php/carreras/licenciaturas/fcn/licenciatura-en-horticultura-ambiental'
	],
	'Ingeniero agrónomo fruticultor':[
		'http://www.cucba.udg.mx/oferta-academica/licenciaturas/ingeniero-agronomo'
	],
	'Ingeniero en plantación':[
		'https://www.ciateq.mx/index.php/oferta-tecnologica/ingenieria-de-plantas.html'
	],
	'Ingeniero forestal':[
		'https://www.uaaan.edu.mx/ingeniero-forestal/'
	],
	'Guardia forestal':[
		'https://www.uaaan.edu.mx/ingeniero-forestal/'
	],
	'Ingeniero agrónomo en recursos forestales':[
		'http://www.cucba.udg.mx/oferta-academica/licenciaturas/ingeniero-agronomo'
	],
	'Ingeniero agrónomo en bosques':[
		'http://www.cucba.udg.mx/oferta-academica/licenciaturas/ingeniero-agronomo'
	],
	'Ingeniero agrónomo fruticultor':[
		'http://www.cucba.udg.mx/oferta-academica/licenciaturas/ingeniero-agronomo'
	],
	'Ingeniero silvícola':[
		'https://www.uaaan.edu.mx/ingeniero-forestal/'
	],
	'Ingeniero ambiental':[
		'https://www.uaaan.edu.mx/ingeniero-forestal/'
	],
	'Ingeniero civil ambiental':[
		'https://www.uaaan.edu.mx/ingeniero-forestal/'
	],
	'Ingeniero civil en agua':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-civil'
	],
	'Ingeniero civil en aire':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-civil'
	],
	'Licenciado en ecología e ingeniería social':[
		'http://www.oferta.unam.mx/ecologia.html'
	],
	'Biólogo pesquero marino':[
		'http://guiadecarreras.udg.mx/licenciatura-en-biologia-marina/'
	],
	'Biólogo pesquero':[
		'http://guiadecarreras.udg.mx/licenciatura-en-biologia-marina/'
	],
	'Ingeniero bioquímico (tecnología de alimentos del mar)':[
		'http://guiadecarreras.udg.mx/ingenieria-bioquimica/'
	],
	'Ingeniero pesquero':[
		'http://guiadecarreras.udg.mx/licenciatura-en-biologia-marina/'
	],
	'Ingeniero en pesquerías':[
		'http://guiadecarreras.udg.mx/licenciatura-en-biologia-marina/'
	],
	'Ingeniero acuacultor':[
		'http://guiadecarreras.udg.mx/licenciatura-en-biologia-marina/'
	],
	'Ingeniero en sistemas acuícolas':[
		'https://unpa.edu.mx/ing_acuicultura.html'
	],
	'Ingeniero en pesca industrial':[
		'https://universidadesdemexico.mx/universidades/universidad-del-mar/ingenieria-en-pesca'
	],
	'Oceanólogo':[
		'https://www.educaedu.com.mx/carrera-de-oceanologia-carreras-universitarias-15995.html'
	],
	'Ingeniero acuicultor':[
		'https://www.itstl.edu.mx/acuicultura'
	],
	'Licenciado en ciencias químicas':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-quimica'
	],
	'Ingeniero químico de procesos':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-quimica'
	],
	'Ingeniero químico administrador':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-quimica'
	],
	'Ingeniero químico industrial':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-quimica'
	],
	'Ingeniero químico metalurgista':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-quimica'
	],
	'Químico metalúrgico':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-quimica'
	],
	'Ingeniero geoquímico':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-ingenieria-quimica'
	],
	'Ingeniero bioquímico administrador en servicios alimentarios':[
		'http://guiadecarreras.udg.mx/ingenieria-bioquimica/'
	],
	'Ingeniero en procesos químicos alimentarios':[
		'https://www.uaq.mx/index.php/oferta-educativa/programas-educativos/fq/315-ingenieria-en-quimico-de-alimentos'
	],
	'Ingeniero químico en alimentos':[
		'https://www.uaq.mx/index.php/oferta-educativa/programas-educativos/fq/315-ingenieria-en-quimico-de-alimentos'
	],
	'Químico farmacéutico biólogo en alimentos':[
		'https://www.uaq.mx/index.php/oferta-educativa/programas-educativos/fq/315-ingenieria-en-quimico-de-alimentos'
	],
	'Bioquímico en procesado de alimentos':[
		'https://www.uaq.mx/index.php/oferta-educativa/programas-educativos/fq/315-ingenieria-en-quimico-de-alimentos'
	],
	'Químico biólogo en alimentos':[
		'https://www.uaq.mx/index.php/oferta-educativa/programas-educativos/fq/315-ingenieria-en-quimico-de-alimentos'
	],
	'Licenciado en química de los alimentos':[
		'https://www.uaq.mx/index.php/oferta-educativa/programas-educativos/fq/315-ingenieria-en-quimico-de-alimentos'
	],
	'Ingeniero en industrias alimentarias':[
		'https://www.uaq.mx/index.php/oferta-educativa/programas-educativos/fq/315-ingenieria-en-quimico-de-alimentos'
	],
	'Ingeniero en procesos químicos de los alimentos':[
		'https://www.uaq.mx/index.php/oferta-educativa/programas-educativos/fq/315-ingenieria-en-quimico-de-alimentos'
	],
	'Ingeniero bioquímico en productos naturales':[
		'https://www.encb.ipn.mx/oferta-educativa/ibq/'
	],
	'Ingeniero bioquímico':[
		'http://guiadecarreras.udg.mx/ingenieria-bioquimica/'
	],
	'Ingeniero en química orgánica':[
		'https://www.quimicaorganica.org/universidades/854-universidad-nacional-autonoma-mexico-unam.html'
	],
	'Licenciado en ciencias químicas':[
		'https://uach.mx/ingenieria-y-ciencias/licenciado-en-quimica/'
	],
	'Químico clínico':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-quimico-farmaceutico-biologo'
	],
	'Químico bactereólogico parasitólogo':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=46'
	],
	'Licenciado químico clínico':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-quimico-farmaceutico-biologo'
	],
	'Químico biólogo en análisis clínicos':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-quimico-farmaceutico-biologo'
	],
	'Licenciado en química, en análisis clínicos':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-quimico-farmaceutico-biologo'
	],
	'Ingeniero bioquímico':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-quimico-farmaceutico-biologo'
	],
	'Químico farmacéutico biólogo en ciencias nucleares':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-quimico-farmaceutico-biologo'
	],
	'Químico farmacéutico biólogo en farmacia':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-quimico-farmaceutico-biologo'
	],
	'Químico farmacéutico industrial':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=47'
	],
	'Químico farmacobiólogo en farmacia clínica':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-quimico-farmaceutico-biologo'
	],
	'Químico farmacobiólogo en farmacia industrial':[
		'http://www.cucei.udg.mx/es/oferta-academica/licenciaturas/licenciatura-en-quimico-farmaceutico-biologo'
	],
	'Química agrícola':[
		'https://www.uaq.mx/index.php/carreras/licenciaturas/fq/ingeniero-agroquimico'
	],
	'Ingeniero químico agroindustrial':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=20'
	],
	'Ingeniero químico en agroindustrias':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=20'
	],
	'Ingeniero químico petrolero':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=21'
	],
	'Ingeniero químico industrial':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=20'
	],
	'Ingeniero químico en procesos':[
		'https://utem.edu.mx/oferta-educativa/ingenierias-y-licenciaturas/ingenieria-en-procesos-quimicos/'
	],
	'Ingeniero químico en procesos petroquímicos':[
		'https://utem.edu.mx/oferta-educativa/ingenierias-y-licenciaturas/ingenieria-en-procesos-quimicos/'
	],
	'Ingeniero químico en petroquímica':[
		'https://utem.edu.mx/oferta-educativa/ingenierias-y-licenciaturas/ingenieria-en-procesos-quimicos/'
	],
	'Licenciado en filosofía':[
		'http://guiadecarreras.udg.mx/licenciatura-en-filosofia/'
	],
	'Licenciado en ciencias humanas':[
		'https://cuih.edu.mx/licenciatura-en-ciencias-humanas/'
	],
	'Licenciado en teología':[
		'https://universidadesdemexico.mx/carreras/licenciatura-en-teologia'
	],
	'Licenciado en humanidades y filosofía':[
		'http://guiadecarreras.udg.mx/licenciatura-en-filosofia/'
	],
	'Licenciado en religión':[
		'https://universidadesdemexico.mx/carreras/licenciatura-en-teologia'
	],
	'Licenciado en ciencias teológicas':[
		'https://universidadesdemexico.mx/carreras/licenciatura-en-teologia'
	],
	'Licenciado en teatro':[
		'http://guiadecarreras.udg.mx/licenciatura-en-artes-escenicas-para-la-expresion-teatral/'
	],
	'Dramaturgo':[
		'http://oferta.unam.mx/literatura-dramatica-y-teatro.html'
	],
	'Dirección teatral':[
		'http://guiadecarreras.udg.mx/licenciatura-en-artes-escenicas-para-la-expresion-teatral/'
	],
	'Licenciado en literatura dramática y teatro':[
		'http://guiadecarreras.udg.mx/licenciatura-en-artes-escenicas-para-la-expresion-teatral/'
	],
	'Licenciado en letras españolas':[
		'https://www.ugto.mx/licenciaturas/por-orden-alfabetico-l/letras-espanolas'
	],
	'Licenciado en literatura iberoamericana':[
		'https://www.ugto.mx/licenciaturas/por-orden-alfabetico-l/letras-espanolas'
	],
	'Licenciado en letras inglesas':[
		'https://universidadesdemexico.mx/universidades/centro-de-idiomas-extranjeros-ignacio-manuel-altamirano/licenciatura-en-letras-inglesas'
	],
	'Lingüística':[
		'http://www.cucsh.udg.mx/maestrias/maestria_en_linguistica_aplicada'
	],
	'Licenciado en periodismo':[
		'https://www.uanl.mx/oferta/licenciatura-en-periodismo-multimedia/'
	],
	'Licenciado en lengua y literatura':[
		'http://www.cucsh.udg.mx/maestrias/maestria_en_linguistica_aplicada'
	],
	'Licenciado en letras iberoamericanas':[
		'https://www.ugto.mx/licenciaturas/por-orden-alfabetico-l/letras-espanolas'
	],
	'Licenciado en letras y periodismo':[
		'https://www.uanl.mx/oferta/licenciatura-en-periodismo-multimedia/'
	],
	'Licenciado en letras, lengua y literatura hispánicas':[
		'http://guiadecarreras.udg.mx/licenciatura-en-filosofia/'
	],
	'Licenciado en humanidades, en lingüística':[
		'http://guiadecarreras.udg.mx/licenciatura-en-humanidades/'
	],
	'Licenciado en lingüística':[
		'http://guiadecarreras.udg.mx/lenguas-y-culturas-extranjeras/'
	],
	'Licenciado en lingüística aplicada':[
		'http://guiadecarreras.udg.mx/lenguas-y-culturas-extranjeras/'
	],
	'Licenciado en antropología, en lingüística':[
		'http://guiadecarreras.udg.mx/lenguas-y-culturas-extranjeras/'
	],
	'Licenciado en etnolingüística':[
		'http://guiadecarreras.udg.mx/lenguas-y-culturas-extranjeras/'
	],
	'Licenciado en artes visuales':[
		'http://guiadecarreras.udg.mx/licenciatura-en-artes-visuales-para-la-expresion-plastica/'
	],
	'Licenciado en escritura y grabado':[
		'http://guiadecarreras.udg.mx/licenciatura-en-artes-visuales-para-la-expresion-plastica/'
	],
	'Licenciado en dibujo publicitario':[
		'http://guiadecarreras.udg.mx/licenciatura-en-artes-visuales-para-la-expresion-plastica/'
	],
	'Licenciado en pintura':[
		'http://guiadecarreras.udg.mx/licenciatura-en-artes-visuales-para-la-expresion-plastica/'
	],
	'Licenciado en artesanías':[
		'http://guiadecarreras.udg.mx/licenciatura-en-artes-visuales-para-la-expresion-plastica/'
	],
	'Licenciado en diseño gráfico':[
		'http://guiadecarreras.udg.mx/licenciatura-en-diseno-para-la-comunicacion-grafica/'
	],
	'Licenciado en grabado':[
		'http://guiadecarreras.udg.mx/licenciatura-en-diseno-para-la-comunicacion-grafica/'
	],
	'Restauración y mantenimiento de bienes inmuebles':[
		'http://guiadecarreras.udg.mx/licenciatura-en-diseno-para-la-comunicacion-grafica/'
	],
	'Arquitectura (tendiente al diseño)':[
		'http://guiadecarreras.udg.mx/licenciatura-en-arquitectura/'
	],
	'Licenciado en diseño gráfico y publicitario':[
		'http://guiadecarreras.udg.mx/licenciatura-en-diseno-para-la-comunicacion-grafica/'
	],
	'Licenciado en decoración de interiores':[
		'http://guiadecarreras.udg.mx/licenciatura-en-diseno-de-interiores-y-ambientacion/'
	],
	'Licenciado en diseño de modas':[
		'https://uvp.mx/diseno-de-modas'
	],
	'Licenciado artes visuales camarográficas':[
		'http://guiadecarreras.udg.mx/licenciatura-en-artes-visuales-para-la-expresion-plastica/'
	],
	'Escenográfo':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en danza':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en artes de danza contemporánea':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Folklorista':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en composición':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Instrumentista':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en piano':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en canto':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en musicología':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en etnomúsica':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en producción y programación musical':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en música y director de coros':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en música y cantante':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en artes, en canto':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en artes, en clarinete':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en artes, en corno':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en artes, en oboe':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en laudería':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en ejecución musical':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en música sacra y dirección coral':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en viola':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en violín':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en flauta':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en guitarra':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en tuba':[
		'http://oferta.unam.mx/artes-visuales.html'
	],
	'Licenciado en ciencias de la comunicación':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en ciencias de la comunicación en televisión':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en ciencias de la comunicación en cine':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en ciencias de la comunicación en radio':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en ciencias de la comunicación en publicidad':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en ciencias de la información':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en interpretación y traducción':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en traducción simultanea':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en traducción':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en lenguas y literatura inglesa':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en lenguas y literatura modernas, en letras italianas':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en lenguas extranjeras':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en lenguas modernas':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en idiomas, en inglés':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Licenciado en lenguas y literatura modernas, en letras alemanas':[
		'http://guiadecarreras.udg.mx/licenciatura-en-comunicacion-publica/'
	],
	'Arqueología':[
		'https://www.enah.edu.mx/index.php/pres-arq-lic'
	],
	'Licenciado en historia':[
		'http://guiadecarreras.udg.mx/licenciatura-en-historia/'
	],
	'Licenciado en etnolingüística':[
		'http://guiadecarreras.udg.mx/licenciatura-en-historia/'
	],
	'Licenciado en antropología social, en sociolingüística':[
		'http://guiadecarreras.udg.mx/licenciatura-en-antropologia/'
	],
	'Licenciado en ciencias antropológicas en historia':[
		'http://guiadecarreras.udg.mx/licenciatura-en-antropologia/'
	],
	'Licenciado en etnohistoria':[
		'http://guiadecarreras.udg.mx/licenciatura-en-historia/'
	],
	'Licenciado en ciencias antropológicas, en arqueología':[
		'http://guiadecarreras.udg.mx/licenciatura-en-antropologia/'
	],
	'Licenciado en etnología':[
		'http://guiadecarreras.udg.mx/licenciatura-en-historia/'
	],
	'Licenciado en antropología física':[
		'http://guiadecarreras.udg.mx/licenciatura-en-antropologia/'
	],
	'Licenciado en antropología cultural':[
		'http://guiadecarreras.udg.mx/licenciatura-en-antropologia/'
	],
	'Licenciado en antropología de la educación':[
		'http://guiadecarreras.udg.mx/licenciatura-en-antropologia/'
	],
	'Licenciado en antropología política':[
		'http://guiadecarreras.udg.mx/licenciatura-en-antropologia/'
	],
	'Licenciado en biblioteconomía':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=65'
	],
	'Licenciado bibliotecónomo':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=65'
	],
	'Archivonomía':[
		'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=es&id=64'
	],
	'Licenciado en sociología':[
		'http://www.cucsh.udg.mx/licenciatura/sociologia'
	],
	'Licenciado en antropología social':[
		'http://www.cucsh.udg.mx/licenciatura/antropologia'
	],
	'Licenciado en ciencias sociales':[
		'http://guiadecarreras.udg.mx/licenciatura-en-sociologia/'
	],
	'Licenciado en sociología rural':[
		'http://guiadecarreras.udg.mx/licenciatura-en-sociologia/'
	],
	'Licenciado en antropología social de la educación':[
		'http://guiadecarreras.udg.mx/licenciatura-en-antropologia/'
	],
	'Licenciado en sociología del trabajo':[
		'http://guiadecarreras.udg.mx/licenciatura-en-sociologia/'
	],
	'Licenciado en trabajo social':[
		'http://guiadecarreras.udg.mx/licenciatura-en-sociologia/'
	],
	'Licenciado en ciencias de la comunidad':[
		'http://guiadecarreras.udg.mx/licenciatura-en-sociologia/'
	],
	'Licenciado en trabajo social escolar':[
		'http://guiadecarreras.udg.mx/licenciatura-en-sociologia/'
	],
	'Licenciado en trabajo social penitenciario':[
		'http://guiadecarreras.udg.mx/licenciatura-en-sociologia/'
	],
	'Licenciado en trabajo social médico':[
		'http://guiadecarreras.udg.mx/licenciatura-en-sociologia/'
	],
	'Licenciado en psicología':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-psicologia'
	],
	'Licenciado en psicología organizacional':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-psicologia'
	],
	'Licenciado en relaciones familiares':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-psicologia'
	],
	'Licenciado en psicología criminal':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-psicologia'
	],
	'Psicólogo orientador':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-psicologia'
	],
	'Licenciado en psicología infantil':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-psicologia'
	],
	'Licenciado en psicología clínica':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-psicologia'
	],
	'Licenciado en psicología experimental':[
		'http://cualtos.udg.mx/oferta-academica/licenciatura-psicologia'
	],
	'Licenciado en derecho':[
		'http://www.cualtos.udg.mx/oferta-academica/carrera-abogado'
	],
	'Licenciado en ciencias políticas y administración pública':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-administracion'
	],
	'Licenciado en relaciones internacionales':[
		'http://www.cualtos.udg.mx/oferta-academica/licenciatura-negocios-internacionales'
	],
	'Abogado y notario público':[
		'http://www.cualtos.udg.mx/oferta-academica/carrera-abogado'
	],
	'Licenciado en derecho público':[
		'http://www.cualtos.udg.mx/oferta-academica/carrera-abogado'
	],
	'Licenciado en derecho laboral':[
		'http://www.cualtos.udg.mx/oferta-academica/carrera-abogado'
	],
	'Licenciado en derecho financiero':[
		'http://www.cualtos.udg.mx/oferta-academica/carrera-abogado'
	],
	'Licenciado en derecho mercantil':[
		'http://www.cualtos.udg.mx/oferta-academica/carrera-abogado'
	],
	'Licenciado en derecho y ciencias sociales':[
		'http://www.cualtos.udg.mx/oferta-academica/carrera-abogado'
	],
	'Licenciado en derecho y ciencias jurídicas':[
		'http://www.cualtos.udg.mx/oferta-academica/carrera-abogado'
	],
	'Licenciado en ciencias políticas':[
		'http://www.cualtos.udg.mx/oferta-academica/carrera-abogado'
	],
	'Licenciado en educación preescolar':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado normalista':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado en pedagogía':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado en ciencias de la educación':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado en tecnología educativa':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado en educación especial por ceguera y debilidad visual':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado en educación especial y deficiencia mental':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado en educación especial en audición y lenguaje':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado en educación de menores infractores':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado en docencia':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado en educación de transtornos del aprendizaje':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Carreras pedagógicas en general':[
		'http://guiadecarreras.udg.mx/licenciatura-en-educacion/'
	],
	'Licenciado en relaciones públicas':[
		'http://guiadecarreras.udg.mx/relaciones-publicas-y-comunicacion/'
	],
	'Licenciado en relaciones humanas':[
		'http://guiadecarreras.udg.mx/relaciones-publicas-y-comunicacion/'
	],
	'Licenciado en administración del tiempo libre':[
		'http://guiadecarreras.udg.mx/relaciones-publicas-y-comunicacion/'
	],
	'Licenciado en comunicación humana':[
		'http://guiadecarreras.udg.mx/relaciones-publicas-y-comunicacion/'
	],
	'Licenciado en comunicación organizacional':[
		'http://guiadecarreras.udg.mx/relaciones-publicas-y-comunicacion/'
	],
	'Licenciado en comunicación turística':[
		'http://guiadecarreras.udg.mx/relaciones-publicas-y-comunicacion/'
	]
}

  window.onload = function(){
	const res = window.location.search.substring(5).split('_');		
	carrerasResultantes = carreras[res[0]][res[1]];
	console.log(typeof res)
	console.log(JSON.stringify(window.location.search))
	for(i = 0; i < carrerasResultantes.length; i++) {
		var newD = document.createElement("div");			
			for(j = 0; j < links[carrerasResultantes[i]].length; j++) {
				console.log(links[carrerasResultantes[i]][j]);
				let ref = document.createElement("a");
			ref.setAttribute("href", links[carrerasResultantes[i]][j]);
				ref.setAttribute("target", "_blank");
				let text = document.createTextNode(carrerasResultantes[i]);
				ref.appendChild(text);
				newD.appendChild(ref);
			}
			document.getElementById("resultados").appendChild(newD);
		}
}

</script>



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
	
	$codigo=$_SESSION['codigo'];
    $res = $_GET['res'];

	$consulta="UPDATE datos SET Resultados='$res' WHERE Codigo='$codigo'";

	$resultado = mysqli_query($conexion,$consulta);

     mysqli_close($conexion);//cerrar conexion
          
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Resultados</title>
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
</head>

<body>

	<div class="limiter">
		<div class="container-login100" >
			
			<figure id="escudo">
				<img src="../escudo/escudo.png" alt="escudo" id="escudo">
			</figure>
			
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				
				<form class="login100-form validate-form" action="consulta.php" action="../login/insertar.php">

					<span class="login100-form-title p-b-49">
						Resultados
					</span>

					<h3>Las carreras más afines a tu perfil son:</h3>

					<br>		

					<div id="resultados"></div>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
							<a style='color:white' href="../preguntas/preguntas.php">VOLVER A HACER EL TEST</a>
							</button>
						</div>
					</div>

					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
							<a style='color:white' href="../login/cerrarsesion.php">CERRAR SESION</a>
							</button>
						</div>
					</div>

					<figure class="iconos">
						<aside>
							<h3>Redes Sociales UDG</h3><br>
							<span>
								<a href="https://www.facebook.com/udg.mx" class="icon-facebook2" style="cursor:pointer"
									target="_blank"></a>
								<a href="https://www.youtube.com/user/UdeGmx" class="icon-youtube"
									style="cursor:pointer" target="_blank"></a>
								<a href="http://instagram.com/udg_oficial" class="icon-instagram" style="cursor:pointer"
									target="_blank"></a>
								<a href="https://twitter.com/udg_oficial" class="icon-twitter" style="cursor:pointer"
									target="_blank"></a>
							</span>
						</aside>
					</figure>

					<div id="contacto">

						<p>
							Jorge Isaac Parra Torres <br>
							e-mail: isaac.parra@alumnos.udg.mx
						</p>
						<br>
						<p>
							Luis Ángel de la Mora González <br>
							e-mail: delamoragonzalezluisangel@gmail.com
						</p>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

</body>

</html>