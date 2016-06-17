<html>
<head>
	<title>Sistema de Planes Globales</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	
	<!--Importacion de Iconos y fuentes-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Importacion de materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Permitir al Navegador que la web es optimizada para moviles-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	 <!--Importacion de jQuery y materialize.js y scripts iniciadores-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      	$(document).ready(function(){
      		$('.slider').slider({full_width: true});
    	});
    	
    	$(document).ready(function(){
    		$('.tooltipped').tooltip({delay: 50});
  		});
        
      </script>

      <nav>
  		  <div class="nav-wrapper #e53935 red darken-1">
      		<a href="" class="brand-logo">SISTEMA DE PLANES GLOBALES Y PROGRAMAS ANALITICOS</a>
      		  <ul class="right hide-on-med-and-down">
        	    <li><a href="ayuda.html"><i class="material-icons right">live_help</i>Ayuda</a></li>
             	<li><a href="contacto.html"><i class="material-icons right">settings_phone</i>Contactanos</a></li>
      		  </ul>
       	  </div>
  	  </nav>
  <hr></hr>
  </header>
	
	<aside id="menu">
    <div id="titulo"><a id="titulo" href="index.php">Inicio</a></div>
    <div id="titulo"><a id="titulo" href="Plan_Global_Publico.php">Planes Globales</a></div>
    <div id="titulo"><a id="titulo" href="Programa_Analitico_Publico.php">Programas Analiticos</a></div>
    <div id="titulo"><a id="titulo" href="Manual_de_Usuario.php">Manual de Usuario</a></div>
    
    <form method="post" action="redireccion.php">
    <table id="tabla">
		<tr > <td id="t">usuario</td>
			   <td id="t"><input type ="text" name="Txt_User" size="30" class="Txt_Input" placeholder="Nombre Usuario"></td></tr>
		<tr > <td id="t">password</td>
			  <td id="t"><input type ="password" name="Password_User" size="30" class="Txt_Input" placeholder="Contrasenia"></td></tr>
			  <tr><td id="t">cargo</td><td id="t">
			  <select class="tipo_usuario" name="select[]">
			  	
			  	<option value=""></option>	
			  	<option value="Docente">Docente</option>
			  	<option value="Administrador">Administrador</option>
			  </select></td></tr>
		<tr > <td id="t"  colspan="2"><center><input type ="submit" name="BtnIngreso" value="Ingresar" size="30" class="Bottom"></center></td></tr>

	</table>
	</form>




	</aside>

<article id="cuerpo">
    <div class="slider">
	    <ul class="slides">
	      <li>
	        <img src="imagenes/slider1.jpg"> <!-- random image -->
	        <div class="caption center-align">
	          <h4>UNIVERSIDAD MAYOR DE SAN SIMON</h4>
	          <h5 class="light white-text text-lighten-3">Facultad de Ciencias y Tecnología</h5>
	        </div>
	      </li>
	      <li>
	        <img src="imagenes/slider2.jpg"> <!-- random image -->
	        <div class="caption left-align">
	          <h3>Construyendo el Futuro</h3>
	          <h5 class="light white-text text-lighten-3">Desde 1832</h5>
	        </div>
	      </li>
	      <li>
	        <img src="imagenes/slider3.jpg"> <!-- random image -->
	        <div class="caption right-align">
	          <h4>Universidad Mayor de San Simón</h4>
	          <h5 class="light grey-text text-lighten-3">Desde 1832</h5>
	        </div>
	      </li>
	      <li>
	        <img src="imagenes/slider4.jpg"> <!-- random image -->
	        <div class="caption left-align">
	          <h3>UMSS</h3>
	          <h5 class="light grey-text text-lighten-3">FCyT</h5>
	        </div>
	      </li>
	    </ul>
  </div>
      

</article>




<footer>
	<article id="footer">
		<h3>
		 <center>

			 <h3 id="titulo_footer ">Paginas Amigas</br>
			 <a id="link_footer" href=""> Fcyt </a>
			 <a id="link_footer" href=""> Umss </a>
			 <a id="link_footer" href=""> Saga </a>
			 <a id="link_footer" href=""> Moodle </a>
			 <a id="link_footer" href=""> Caroline </a>
		 </h3>
	 	</center>
	</article>
</footer>

</body>
</html>