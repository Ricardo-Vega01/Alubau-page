//Incluimos los elementos del dropdown
const dropcont = document.querySelector('.dropdown-menu');
//Vector de nombre para enlaces
const rutasDrop = ["alutemp.php","alulam.php","alutherm.php","serigrafia.php"];
const contentDrop = ["Templado","Laminado","Duo-Vent","Serigrafiado"];

for(let indiceDrop = 0; indiceDrop < contentDrop.length && indiceDrop < rutasDrop.length; indiceDrop++){
	//Nombre de los elemoentos
	const listaDrop = document.createElement('li');
	//Agregamos la nueva lista al contenedor
	dropcont.appendChild(listaDrop);

	//Creamos los enlaces
	const elemntoDrop = document.createElement('a');
	elemntoDrop.textContent = contentDrop[indiceDrop];

	//Agregamos clase a los enlaces
	elemntoDrop.classList.add("dropdown-item");
	listaDrop.appendChild(elemntoDrop);
	elemntoDrop.setAttribute("href", rutasDrop[indiceDrop]);
}

//Creamos la linea divisora del drop
const secondOption = document.createElement('li');
dropcont.appendChild(secondOption);

const line = document.createElement('hr');
secondOption.appendChild(line);
line.classList.add("dropdown-divider");

//Creamos el ultimo enlace para la lista del dropdown

const ultimoEnlace = document.createElement('li');
dropcont.appendChild(ultimoEnlace);

const tipoVidrio = document.createElement('a');
ultimoEnlace.appendChild(tipoVidrio);
tipoVidrio.textContent = "Tipos de Vidrio";
tipoVidrio.setAttribute("href",'glass.php');
tipoVidrio.classList.add("dropdown-item");

//Creamos los demas elementos posicionados en la barra del menu
const contentMenu = document.querySelector('.listaNav');
const enlaceMenu = ["products.php","us.php","projects.php","about.php"];
//Contenedor de enlaces
const rutasMenu = ["Productos","Nosotros","Galeria","Contacto"];
for(let indiceMenu = 0; indiceMenu < rutasMenu.length && indiceMenu < enlaceMenu.length; indiceMenu++){
	const listaMenu = document.createElement('li');
	contentMenu.appendChild(listaMenu);
	listaMenu.classList.add("nav-item");

	//Creamos los links para ingresar a la lista
	const enlaceBarra = document.createElement('a');
	listaMenu.appendChild(enlaceBarra);
	enlaceBarra.textContent = rutasMenu[indiceMenu];
	enlaceBarra.classList.add("nav-link");
	enlaceBarra.setAttribute("href", enlaceMenu[indiceMenu]);
}