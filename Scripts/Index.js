var Muestras=document.getElementById('Muestras');
var Recientes=document.getElementById('Recientes');
//Muestras
fetch('Peticiones/MostrarPublicacionesMuestras.php')
.then(data=>data.json())
.then(data=>{
	for(let item of data){
		var Div=document.createElement('a');
		Div.style.display="inline-block";
		Div.style.background="#"+item.Fondo;
		Div.setAttribute('class',"col-12 col-sm-6 col-md-3 mt-2 ml-1 ArtDiv");
		Div.style.cursor="pointer";
		Div.setAttribute('href','');
		Div.setAttribute('title',item.Autor);
		var Img=document.createElement('img');
		Img.src=item.Portada;
		Img.setAttribute('class','col-12 mt-4');
		var Ptitulo=document.createElement('p');
		Ptitulo.setAttribute('class','text-center mt-2');
		var Titulo=document.createTextNode(item.Titulo);
		var Pautor=document.createElement('p');
		Pautor.setAttribute('class','text-center mt-2 bg-primary');
		var Autor=document.createTextNode("Autor: "+item.Autor);
		Ptitulo.appendChild(Titulo);
		Pautor.appendChild(Autor);
		Div.appendChild(Img);
		Div.appendChild(Ptitulo);
		Div.appendChild(Pautor);
		Muestras.appendChild(Div);
	}
})
//Recientes
	fetch('Peticiones/MostrarPublicacionesRecientes.php')
.then(data=>data.json())
.then(data=>{
	for(let item of data){
		var Div=document.createElement('a');
		Div.style.display="inline-block";
		Div.style.background="#"+item.Fondo;
		Div.setAttribute('class',"col-12 col-sm-6 col-md-3 mt-2 ml-1 ArtDiv");
		Div.style.cursor="pointer";
		Div.setAttribute('href','');
		Div.setAttribute('title',item.Autor);
		var Img=document.createElement('img');
		Img.src=item.Portada;
		Img.setAttribute('class','col-12 mt-4');
		var Ptitulo=document.createElement('p');
		Ptitulo.setAttribute('class','text-center mt-2');
		var Titulo=document.createTextNode(item.Titulo);
		var Pautor=document.createElement('p');
		Pautor.setAttribute('class','text-center mt-2 bg-primary');
		var Autor=document.createTextNode("Autor: "+item.Autor);
		Ptitulo.appendChild(Titulo);
		Pautor.appendChild(Autor);
		Div.appendChild(Img);
		Div.appendChild(Ptitulo);
		Div.appendChild(Pautor);
		Recientes.appendChild(Div);
	}
})