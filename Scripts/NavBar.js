var MenuResponsive=document.getElementById('MenuResponsive');
var Activar=true;
MenuResponsive.addEventListener('click',function(){
	var Banner=document.getElementById('Banner');
	if(Activar){
	Banner.style.display='block';
	Banner.style.transform="translate(100%)";
	setTimeout(function(){
	Banner.style.transition="0.5s";
	Banner.style.transform="translate(0px)";
	},100);
	}
	if(!Activar){
	Banner.style.transition="0.5s";
	Banner.style.transform="translate(100%)";
	setTimeout(function(){
	Banner.style.display='none';
	Banner.style.transform="translate(0px)";
	},500);
	}
});
MenuResponsive.addEventListener('click',function(){
	switch (Activar){
		case true:
		Activar=false;
		break;
		case false:
		Activar=true;
	}
	
});