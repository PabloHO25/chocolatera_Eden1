<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="CSS/estilo.css">


	<title>Document</title>
</head>
<body>
<div class="container-fluid fondoconocenos">

		<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">"EL EDÉN"</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link hidden-lg-up" href="index.html">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hidden-lg-up" href="productos.html">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hidden-lg-up" href="carrito.html">Carrito</a>
      </li>
      
     
   
    </ul>  
     
    
  </div>
</nav>

<h4 class="conoce">Conócenos</h4>
<p class="textoconocenos">
	Bienvenido a cacao del Edén somos una empresa tabasqueña dedicada a la producción de productos derivados del cacao. 
Fundada en el año 2015 con sede en el municipio de Cunduacán, Tabasco.</p>
<h4  class="conoce">Nuestras metas</h4>
<p class="textoconocenos">Deleitar a las personas con nuestros productos elaborados con la más alta calidad e higiene.</p>
<p class="textoconocenos">
	Ofrecer un alto nivel nutrimental.
</p>
<p class="textoconocenos">Producir nuestros con el menor impacto ambiental</p>
<p class="textoconocenos">Apoyar al campo tabasqueño</p>

<div>
	<img src="imagenes/fabrica.jpg" id=fabrica>


</div>
<footer class="pie">
  <h5 class="texto-con">Visita nuestras redes sociales en:</h5>

<div>
 <a href="https://web.facebook.com/Fabrica-De-Chocolates-Cacao-103526178292981/?ref=py_c&_rdc=1&_rdr"> <img src="imagenes/facebook.jpg" class="logo"> </a> 
 <a href="https://www.youtube.com/watch?v=dJHrKuj4Ofk"><img src="imagenes/logo_youtube.jpg" class="logo">

 </a> 
</div>


  <h5 class="text-con">o contáctanos a: eleden@gmail.com</h5>

<form class="form">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentarios</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <button class="enviar">Enviar</button>
  </div>
</form>



</footer>





	</div>


	
</body>
<script type="text/javascript"src="JS/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var oculto=true;


if(oculto)
  $(".form").css("display","none");



  $(".pie").click(function(evento){
oculto=false;
if(oculto==false){
  $(".form").css("display","block");
  
}
  //$(".form").css("display","none");

  });


});

</script>
</html>
