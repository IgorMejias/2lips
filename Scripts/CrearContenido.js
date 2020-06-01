var Paso=1;
var Ayuda=document.getElementById('Ayuda');
var Pasos=document.getElementById('Pasos');
var CTitulo=document.getElementById('CTitulo');
var Categoria=document.getElementById('Categoria');
var Portada=document.getElementById('Portada');
var Autor=document.getElementById('Autor');
var Siguiente=document.getElementById('Siguiente');
Ayuda.style.color='green';
Pasos.textContent="Paso #"+Paso;

CTitulo.addEventListener('mouseover',function(){
	Ayuda.textContent="Titulo principal, este se mostrará tanto en la miniatura como en la publicación";
});
Categoria.addEventListener('mouseover',function(){
	Ayuda.textContent="Las categorias ayudan a que sea más facil conseguir tu publicación y así atraer a un público en especifico";
});
Portada.addEventListener('mouseover',function(){
	Ayuda.textContent="Imagen a mostrar en la miniatura";
});
Autor.addEventListener('mouseover',function(){
	Ayuda.textContent="Nombre del creador de la idea principal";
});

Siguiente.addEventListener('click',function(e){
	e.preventDefault();
	if(Paso<4){
	Paso+=1;
	Pasos.textContent="Paso #"+Paso;
	}
});