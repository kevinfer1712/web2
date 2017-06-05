<!---- Validacion de las cajas de texto -------->

<?php
//Definimos la codificación de la cabecera.
header('Content-Type: text/html; charset=utf-8');
//Importamos el archivo con las validaciones.
include( 'validaciones.php');
//Guarda los valores de los campos en variables, siempre y cuando se haya enviado el formulario, sino se guardará null.
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$ap_paterno = isset($_POST['ap_paterno']) ? $_POST['ap_paterno'] : null;
$ap_materno = isset($_POST['ap_materno']) ? $_POST['ap_materno'] : null;
//Este array guardará los errores de validación que surjan.
$errores = array();
$conta=0;
$mensaje="";
//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   //Valida que el campo nombre no esté vacío.
   if (!validaRequerido($nombre)) {
      $errores[] = 'El campo nombre es incorrecto.';
       
   }else{
       $conta=1;
   }
    if (!validaRequerido($ap_paterno)) {
      $errores[] = 'El campo Apellido Paterno es incorrecto.';
   }else{
        $conta=2;
    }
    if (!validaRequerido($ap_materno)) {
      $errores[] = 'El campo Apellido Materno es Incorrecto es incorrecto.';
   }else {
                $conta=3;
    }
 
   //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
   
}
?>
<!---- ***********Fin de la validacion ********************** --->




<!DOCTYPE html>
<html lang="es">
    <head >
        <title>Mi Página web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="../css/navegacion.css">
        <link rel="stylesheet" href="../css/slider.css">
        <link rel="stylesheet" href="../css/section.css">
        <link rel="stylesheet" href="../css/reloj.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="shortcut icon" href="../img/12400443_150518905321428_1422756487860000121_n.jpg">
        <link rel="stylesheet" href="../css/faldon.css">
        
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align:center;
                padding: 8px;
                
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
                background-color: #4CAF50;
                color: white;
            }
            #contendor2{
                border:1px solid red;
            }
            .myCarousels{
                width: 300px;
                height: 200px;    
                float: left;
                margin: 20px;
            }
            #td{
                float: left;
            }
        </style>
    </head>
    <body>
    <div class="container">
              <!--PRINCIPIO DEL HEADER-->
            <div class="row  header-fondo" id="contenedor1">
                <div class="col-xs-12  col-sm-6 col-md-4" id="caja1"> 
                    <figure class="logo_header">
                        <a href="../index.php"><img src="../img/12400443_150518905321428_1422756487860000121_n.jpg" alt="" id="logosbpp" class="img-responsive" width="100"></a>
                        <a href=""><p>Sociedad de Beneficencia Publica de Pisco</p></a>
                    </figure>
                      
                </div>
                
                <div class="col-xs-12  col-sm-6 visible-sm col-md-4 visible-md col-lg-4 visible-lg ">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="caja2" >
                            <a href="">
                                <img src="../img/cabecera-mimp-lazo.png" alt="" id="logo" class="<img->    </img->responsive" >
                            </a>
                        </div> 

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="caja3">
                            <a href=""><img src="../img/logo.gif" alt="" id="logo" class="img-responsive"></a> 
                        </div> 
                    </div>
                </div>
                    
                <div class="col-xs-12  col-sm-6 col-md-4 visible-md col-lg-4 visible-lg" id="cajon">
                    <figure>
                      <a href=""><img class="redes_sociales" src="../icon/face.png" alt="" id="logos" class="img-responsive"></a> 
                      <figcaption>facebook</figcaption>
                    </figure>

                    <figure>
                         <a href=""><img class="redes_sociales" src="../icon/youtube.png" alt="" id="logos" class="img-responsive"></a>
                         <figcaption>youtube</figcaption>
                    </figure>

                    <figure>
                        <a href=""><img class="redes_sociales" src="../icon/location.png" alt="" id="logos" class="img-responsive"></a>
                            <figcaption>ubicacion</figcaption>
                    </figure>

                    <figure>
                        <a href=""><img class="redes_sociales" src="../icon/webmail.png" alt="" id="logos" class="img-responsive"></a>
                        <figcaption>Webmail</figcaption>
                    </figure>

                    <figure>
                        <a href=""><img class="redes_sociales" src="../icon/actiweb.png" alt="" id="logos" class="img-responsive"></a>
                        <figcaption>Actiweb</figcaption>
                    </figure>

                    <div class="transparencia">
                        <a href=""><img src="../icon/transparencia.png" alt=""></a>
                    </div>
                </div>
            </div>
            <!--FIN DEL HEADER-->
            
       </div>
            <div class="container" id="contenedor2">
                <div id="cont">
                
            <!--PRINCIPIO DE LA BARRA DE NAVEGACION-->
            <div class="row">
                <nav class="navbar navbar-inverse" role="navigation">
                <!-- Botón para resoluciones más pequeñas (móviles) -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Botón de navegación</span>
                        <!-- Líneas del botón para móviles -->
                        <span class="icon-bar"></span>			
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"  style="background:black" href="../index.html">Inicio</a>
                </div>   
   <!-- ****************************************************** -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li><a href="../Historia.html">Historia</a></li>
                               <li><a href="../mision-vision.html">Mision y Vision</a></li>
                               <li><a href="../organigrama.html">Organigrama</a></li>
                            </ul>
                         </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cen Productivos<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li><a href="#">Opción 1</a></li>
                               <li><a href="#">Opción 2</a></li>
                               <li><a href="#">Opción 3</a></li>
                            </ul>
                         </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cen Asistenciales<span class="caret"></span></a>
                           <ul class="dropdown-menu">
                               <li><a href="../Colegio.html">I.E.P. Cuna Jardin "Luisa De La Torre Rojas"</a></li>
                               <li><a href="../HogardeAncianos.html">Hogar de Anciano "Virgen De Guadalupe"</a></li>
                               <li><a href="../Comedor.html">Comedor "San Martin De Porras"</a></li>
                                <li><a href="../Funeraria.html">Agencia Funeraria De La SBPP</a></li>
                            </ul>
                         </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transparencia<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li><a href="#">Opción 1</a></li>
                               <li><a href="#">Opción 2</a></li>
                               <li><a href="#">Opción 3</a></li>
                            </ul>
                         </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contactenos<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../Contacto.html">Contactenos</a></li>
                            </ul>
                         </li>
                    </ul>
                        <!-- ***************************************************** -->
                    <div class="hidden-xs hidden-sm">    
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar..." > 
                            </div>
                            <button type="button" class="btn btn-default">
            	            <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </form>  
                    </ul> 
                    </div>                  
                </div>	<!-- /.navbar-collapse -->
            </nav>
            </div> 
            <!--FIN DE LA BARRA DE NAVEGACION--------->
            </div>            
                <div id="contenedor2">
                 <!--INICIO DEL SLIDER-->
                    <div class="row" id="slider">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
        <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="../img/carrusel/1.jpg" alt="Los Angeles" style="width:100%;">
                            <div class="carousel-caption">
                              <h3>Sociedad De Beneficencia Publica de Pisco</h3>
                            
                            </div>
                        </div>

                        <div class="item">
                            <img src="../img/carrusel/2.jpg" alt="Chicago" style="width:100%;">
                            <div class="carousel-caption">
                              <h3><h3>Sociedad De Beneficencia Publica de Pisco</h3></h3>
                              
                            </div>
                        </div>

                        <div class="item">
                            <img src="../img/carrusel/3.jpg" alt="New York" style="width:100%;">
                            <div class="carousel-caption">
                              <h3><h3>Sociedad De Beneficencia Publica de Pisco</h3></h3>
                            
                            </div>
                        </div>
  
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>    
            </div>
            <!--FIN DEL SLIDER-----> 
            </div>
           
            
        <!--PRINCIPIO DEL SECTION-->
<br>
<div class="row  well"> 
                 
    <div class="col-xs-12">
        <div class="contendor1" id="caja1">
            <form method="post" action="index.php" name="form1" id="cdr">
                <table>
                      <tr>
                        <th><h4>BUSQUEDA DE DIFUNTOS</h4></th>
                      </tr>
                      
                      <tr>
                        <td id="td">&emsp;&emsp;&emsp;&emsp;&emsp; NOMBRE : </td>
                        <td id="td"><input type="text" name="nombre" id="busqueda" ></td>
                        <td id="td"><input type="submit" values="Buscar" name="submit" ></td>
                      </tr>
                      <tr>
                        <td id="td">APELLIDO PATERNO : </td>
                        <td id="td"><input type="text" name="ap_paterno" id="ap_p"></td>
                      </tr>
                      <tr>
                        <td id="td">APELLIDO MATERNO : </td>
                        <td id="td"><input type="text" name="ap_materno" id="ap_m"></td>
                      </tr>
                </table>
            </form>
        </div>
        <br>
        <br>    
    </div>       
<?php
        
if($conta==0){
    echo "";
    
}else{
                    
$nombre="";
$ap_paterno="";
$ap_materno="";
$nombre=$_POST['nombre'];
$ap_paterno=$_POST['ap_paterno'];
$ap_materno=$_POST['ap_materno'];
$conta=0;

        
                           
mysql_connect("localhost","root","") or die ("No se pudo realizar la conexion");
mysql_select_db("prueba") or die ("ERROR con la base de datos");
                           
                         
  
if($nombre!=""){
$busqueda=mysql_query("SELECT d.dni,d.nombres,d.ap_paterno,d.ap_materno,d.fecha_difusion,c.desc_cementerio,D.columna,d.fila,e.desc_estado,d.vencimiento 
from difunto d,cementerio c,estado e
where 
d.nombres like '".$nombre."%' and
d.id_cementerio=c.id_cementerio and
d.id_estado=e.id_estado");
  $conta=1;  

} else if($ap_paterno!=""){
$busqueda=mysql_query("SELECT d.dni,d.nombres,d.ap_paterno,d.ap_materno,d.fecha_difusion,c.desc_cementerio,D.columna,d.fila,e.desc_estado,d.vencimiento 
from difunto d,cementerio c,estado e
where 
d.ap_paterno like '".$ap_paterno."%' and 
d.id_cementerio=c.id_cementerio and
d.id_estado=e.id_estado");
$conta=2;
        
} else if($ap_materno!=""){
$busqueda=mysql_query("SELECT d.dni,d.nombres,d.ap_paterno,d.ap_materno,d.fecha_difusion,c.desc_cementerio,D.columna,d.fila,e.desc_estado,d.vencimiento 
from difunto d,cementerio c,estado e
where 
d.ap_materno like '".$ap_materno."%' and
d.id_cementerio=c.id_cementerio and
d.id_estado=e.id_estado");
$conta=3;
                    }   
                }
?>
 <div class="contendor2">
   <div>
         <table id="tabla" style="border:1px solid rgba(0,0,0,.2); border-radius:0px 0px 8px 8px;">
            <tr id="">
                <th>Dni</th>
                <th>Nombres</th>
                <th>Ap Paternos</th>
                <th>Ap Materno</th>
                <th>Fecha Difucion</th>
                <th>Cementerio</th>
                <th>Columna</th>
                <th>Fila</th>
                <th>Estado</th>
                <th>Vence</th>
            </tr>
        <?php
            if($conta>0){
                while ($muestra= mysql_fetch_array($busqueda)){
                    echo '<tr>';
                    echo '<td>'.$muestra['dni'].'</td>';        
                    echo '<td>'.$muestra['nombres'].'</td>';
                    echo '<td>'.$muestra['ap_paterno'].'</td>';
                    echo '<td>'.$muestra['ap_materno'].'</td>' ;
                    echo '<td>'.$muestra['fecha_difusion'].'</td>' ;
                    echo '<td>'.$muestra['desc_cementerio'].'</td>' ;
                    echo '<td>'.$muestra['columna'].'</td>' ;
                    echo '<td>'.$muestra['fila'].'</td>' ;
                    echo '<td>'.$muestra['desc_estado'].'</td>' ;
                    echo '<td>'.$muestra['vencimiento'].'</td>';
                    echo '</tr>';
                } 
                 
            }else if($conta==0){
                    $mensaje="POR FAVOR INGRESAR POR LO MENOS UN DATO";
            }
        ?>
    </table>
   </div>
      
            
            <!--INICIO DEL FALDON-->
           <!--<div class="row well" id="cont_faldon">
                <div class="col-xs-12" id="faldon">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                           <div id="myCarousels" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!--<ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>-->

                        <!-- Wrapper for slides -->
                       <!-- <div class="carousel-inner">
                            <div class="item active">
                                <img src="../slider/opsitel.png" alt="" style="width:100%;" class="img-responsive">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../slider/sunat.png" alt="" style="width:100%;" class="img-responsive">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../slider/peruano.png" alt="" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                        </div>
                    </div>
                       </div>
                        <div class="col-xs-12 hidden-xs col-sm-6 col-md-6 col-lg-4">
                            <div id="myCarousels" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!--<ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>-->

                        <!-- Wrapper for slides -->
                       <!-- <div class="carousel-inner">
                            <div class="item active">
                                <img src="../slider/inei.png" alt="Los Angeles" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../slider/transparencia.png" alt="" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../slider/reniec.png" alt="" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                        </div>
                    </div>
                        </div>
                        <div class="col-xs-12  hidden-xs col-sm-6 hidden-sm col-md-6 hidden-md col-lg-4 hiiden-lg">
                           <div id="myCarousels" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!--<ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>-->

                        <!-- Wrapper for slides -->
                       <!-- <div class="carousel-inner">
                            <div class="item active">
                                <img src="../slider/snip.png" alt="Los Angeles" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../slider/edu_ica.png" alt="Chicago" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../slider/mimp.png" alt="New York" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                        </div>
                    </div>
                        </div>
                </div>
                <div class="col-xs-12 hidden-xs" id="faldon">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                           <div id="myCarousels" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!--<ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>-->

                        <!-- Wrapper for slides -->
                       <!-- <div class="carousel-inner">
                            <div class="item active">
                                <img src="../slider/hospital.png" alt="Los Angeles" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../slider/sce.png" alt="Chicago" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../slider/portal.png" alt="New York" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                        </div>
                    </div>
                       </div>
                        <div class="col-xs-12 hidden-xs col-sm-6 col-md-6 col-lg-4">
                            <div id="myCarousels" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!--<ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>-->

                        <!-- Wrapper for slides -->
                       <!-- <div class="carousel-inner">
                            <div class="item active">
                                <img src="../img/descarga.jpg" alt="" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/descarga.jpg" alt="" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/descarga.jpg" alt="" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                        </div>
                    </div>
                        </div>
                        <div class="col-xs-12  hidden-xs col-sm-6 hidden-sm col-md-6 hidden-md col-lg-4 hiiden-lg">
                           <div id="myCarousels" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!--<ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>-->

                        <!-- Wrapper for slides -->
                       <!-- <div class="carousel-inner">
                            <div class="item active">
                                <img src="../img/descarga.jpg" alt="Los Angeles" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/descarga.jpg" alt="Chicago" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../slider/snip.png" alt="New York" style="width:100%;">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                            </div>

                        </div>
                    </div>
                        </div>
                </div>
            </div>
                
            
            <!--FIN DEL FALDON------>
            
            <!--INICIO DEL FOOTER-->
            <div class="row well" id="pie_pagina" style="margin-top:10px;padding-botton:0px;">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    
              </div>
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="foot"> 
                <p id="parrafo">SOCIEDAD DE BENEFICENCIA PUBLICA DE PISCO</p>
                <p id="parrafo">2017 © Todos los derechos reservados</p>
                <p id="parrafo">Pisco Calle Concordia s/n</p>
                <p id="parrafo">Central Telefónica: 056-532659</p>
                <p id="parrafo">Email: webmaster@sbpp.gob.pe</p>
               </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                   
                </div>
                
            </div>
            <!--FIN DEL FOOTER-->
</div>
</div>
    </div>

        <!---------------------------------------------------------->
        
        <!---------------------------------------------------------->
            

        <!---------------------------------------------------------->

    <script src="../js/jquery.js"></script> 
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
    <script src="../js/script.js"></script>
    </body>
</html>