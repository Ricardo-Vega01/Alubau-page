//comenzamos incluyendo el contenedor de nuestro nav
const contenedor = document.querySelector(".route");
//Definimos un vector, que contiene el nombre de cadad enlace
const rutas = ['Productos','Nosotros','Galeria','Contacto'];
//Rutas de cada pagina segun el nav
const clicks = ["routes/products.php","routes/us.php","routes/projects.php","routes/about.php"];

for(let indicE = 0; indicE < rutas.length && indicE < clicks.length; indicE++){
	//creamos los elementos de lista
	const listas = document.createElement('li');
	contenedor.appendChild(listas);
	listas.classList.add("nav-item");

	//creamos y asignamos los links
	const enlaces = document.createElement('a');
	enlaces.textContent = rutas[indicE];
	listas.appendChild(enlaces);
	enlaces.classList.add("nav-link");
	enlaces.setAttribute('href', clicks[indicE]);
}

/*
	Definicion de parametros para la libreria Typed
*/
const typed = new Typed(".tyDemo",{
	strings:['Canceles','Fachadas', 'Barandales', 'Mamparas', 'Ventanas', 'Accesos', 'Domos', 'Y mas.'],
	typeSpeed: 80,//Velocidad del puntero
	startDelay: 200,//Timpo se espera para iniciar la animacion
	backSpeed:90,//Tiempo para borrar letras
	smartBackspace: true,//Elimina solo palabras nuevas del texto
	shuffle: false,//Altera el orden de la palabras
	backDelay: 1600,//Tiempo de espera despues de cada palabra
	loop: true,//Repetir las instrucciones de escritura
	showCursor: true,//Ver el cursor
	cursorChar:'|',//Tipo de cursor
	contentType:'html'
});
