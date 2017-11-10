
<!DOCTYPE html>
<html>
<head>
<title>Inicio</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="fontawesome.css.css">
   <link href="c3/c3.css" rel="stylesheet">

<!-- Load d3.js and c3.js -->
    <script src="c3/d3.v3.min.js" charset="utf-8"></script>
    <script src="c3/c3.min.js"></script>

</head>
<body id="top">

<div  class="bgded overlay" style="background-image:url('images/demo/cartas.jpg');">
 <div class="wrapper row2">
    <nav id="mainav" class="hoc clear" style="float:right;">
      <ul class="clear">
        <li class="active"><a href="/">Home</a></li>
        
         <li><a href="descripcioninicial">Información</a>
         <ul> 
          <li><a href="/descripcionjuego">Descripción Básica</a></li>
          <li><a href="/tiposmazos">tipos mazos</a></li>
          
             <li><a href="/dorsos">dorsos</a></li>
             <li><a href="/heroes">Héroes</a></li>
                           <li><a href="/expansiones">Expansiones</a></li>
                           <li><a href="/estadisticas">Estadísticas</a></li>

          </ul>
          </li>
        <li><a href="heroes">Cartas Héroes</a>
             <ul>
            <li><a href="/paladin">Paladin</a></li>
            <li><a href="/mago">Mago</a></li>
            <li><a href="/brujo">Brujo</a></li>
            <li><a href="/druida">Druida</a></li>
            <li><a href="/guerrero">Guerrero</a></li>
            <li><a href="/sacerdote">Sacerdote</a></li>
            <li><a href="/chaman">Chaman</a></li>
            <li><a href="/picaro">Pícaro</a></li>
            <li><a href="/cazador">Cazador</a></li>
          </ul>
        </li>

        <li><a href="expansiones">Expansiones</a>
          <ul>
            <li><a href="/naxxramas">NaxxRamas</a></li>
            <li><a href="/blackmountain">Black Mountain</a></li>
            <li><a href="/theoldgods">The Old Gods</a></li>
            <li><a href="/gadjetzan">Gadjetzan</a></li>
            <li><a href="/karazan">Karazan</a></li>
            <li><a href="/ungoro">Ungoro</a></li>
            <li><a href="/kft">KFT</a></li>
          </ul>
        </li>
              <li><a href="crearmazo">Crear Maso</a></li>

       
          
        <li><a href="">                     </a></li>
        </ul>
    </nav>
  </div>
  <div id="pageintro" class="hoc clear"></div>
  <div style="color: white">
        <div class="jumbotron" style="background-color: black; opacity: 0.5; padding: 50px; border-radius: 20px">
          <h6 class="heading font-x3" style="text-align: center;">Evalua opciones </h6>
          <p style="text-align: center">Conoce todas las opciones que tienes para ser el mejor. compara fortalezas y debilidades</p>
        </div>
      </div>
      </div>
</div>





<div class="wrapper bgded" style="background-color: white">


  <main class="hoc container clear">
    
            <h2 style="text-align: center">Tipo de heroes</h2>

  




        <div id="chart"></div>
     

<script>

        var x=[1,2,3,4,5,6,7];
        x.unshift('x');

        var paladin=["paladin",1,34,345,3,45,35,4];
        var mago=["mago",2,34,234,234,23,24];
        var brujo=["brujo",2,253,43,24,232,4];
        var druida=["druida",2,23,43,24,232,4];
        var picaro=["picaro",2,243,43,24,232,4];
        var guerrero=["guerrero",2,23,443,24,232,4];
        var chaman=["chaman",2,23,43,242,232,4];
        var sacerdote=["sacerdote",2,23,43,24,232,4];
        var cazador=["cazador",2,23,43,234,232,4];

        var chart = c3.generate({
            bindto: '#chart',
            data: {
                x: 'x',
              columns: [
                x,
                paladin,
                mago,
                brujo,druida,picaro,guerrero,chaman,sacerdote,cazador
              ]
              ,               type: 'bar'
            }
        });
    </script>

 </main>
  
</div>



<div class="wrapper bgded" style="background-image:url('images/demo/gusanomana.png');">
  <div class="hoc splitl clear">

    <section>
      <div class="sectiontitle">
        <h6 class="heading font-x3">Clase - Vs - Mana: </h6>
      </div>
      
        <article>       
        <p>
Capaz de usar multitud de hechizos para destruir a sus enemigos y con gran capacidad de control,consiguiendo congelar y modificar el ritmo de la partida a su antojo. 
                    <footer><a class="btn" href="/mago">Conocer &raquo;</a></footer>

</p>
</article>
         </section>
    
    </div> 
  </div>

<div class="hoc container clear">
<div id="chart2"></div>
     

<script>

        var x=[1,2,3,4,5,6,7];
        x.unshift('x');

        var paladin=["paladin",1,34,345,3,45,35,4];
        var mago=["mago",2,34,234,234,23,24];
        var brujo=["brujo",2,253,43,24,232,4];
        var druida=["druida",2,23,43,24,232,4];
        var picaro=["picaro",2,243,43,24,232,4];
        var guerrero=["guerrero",2,23,443,24,232,4];
        var chaman=["chaman",2,23,43,242,232,4];
        var sacerdote=["sacerdote",2,23,43,24,232,4];
        var cazador=["cazador",2,23,43,234,232,4];

        var chart = c3.generate({
            bindto: '#chart2',
            data: {
                x: 'x',
              columns: [
                x,
                paladin,
                mago,
                brujo,druida,picaro,guerrero,chaman,sacerdote,cazador
              ]
             
            }
        });
    </script>
</div>

<div class="wrapper bgded" style="background-image:url('images/demo/golem.jpg');">
  <div class="hoc split clear">
    <section>
      <div class="sectiontitle">
      <h6 class="heading font-x3">Clase - Vs - Ataque: </h6>
      </div>
      <div class="group">
        <article>
          <p>
Puedes comparar entre todos los héroes las bestias más poderosas. 
</p>
                    <footer><a class="btn" href="/brujo">Conocer &raquo;</a></footer>

        </article>
      </div>
    </section>
  </div>
</div>


<div class="hoc container clear">
<div id="chart3"></div>
     

<script>

        var x=[1,2,3,4,5,6,7];
        x.unshift('x');

        var paladin=["paladin",1,34,345,3,45,35,4];
        var mago=["mago",2,34,234,234,23,24];
        var brujo=["brujo",2,253,43,24,232,4];
        var druida=["druida",2,23,43,24,232,4];
        var picaro=["picaro",2,243,43,24,232,4];
        var guerrero=["guerrero",2,23,443,24,232,4];
        var chaman=["chaman",2,23,43,242,232,4];
        var sacerdote=["sacerdote",2,23,43,24,232,4];
        var cazador=["cazador",2,23,43,234,232,4];

        var chart = c3.generate({
            bindto: '#chart3',
            data: {
                x: 'x',
              columns: [
                x,
                paladin,
                mago,
                brujo,druida,picaro,guerrero,chaman,sacerdote,cazador
              ]
              ,               type: 'pie'
            }
        });
    </script>
</div>


<div class="wrapper bgded" style="background-image:url('images/demo/jade.jpg');">
  <div class="hoc splitl clear">
    <section>
      <div class="sectiontitle">
        <h6 class="heading font-x3">Clase - Vs - Defensa: </h6>
      </div>
      <div class="group"  >
      <article>
        <p>
Puedes comparar entre todos los héroes las armaduras más poderosas. 
</p>
                    <footer><a class="btn" href="/druida">Conocer &raquo;</a></footer>

      </article>
      </div>    
    </section>
  </div>
</div>


<div class="hoc container clear">
<div id="chart4"></div>
     

<script>

        var x=[1,2,3,4,5,6,7];
        x.unshift('x');

        var paladin=["paladin",1,34,345,3,45,35,4];
        var mago=["mago",2,34,234,234,23,24];
        var brujo=["brujo",2,253,43,24,232,4];
        var druida=["druida",2,23,43,24,232,4];
        var picaro=["picaro",2,243,43,24,232,4];
        var guerrero=["guerrero",2,23,443,24,232,4];
        var chaman=["chaman",2,23,43,242,232,4];
        var sacerdote=["sacerdote",2,23,43,24,232,4];
        var cazador=["cazador",2,23,43,234,232,4];

        var chart = c3.generate({
            bindto: '#chart4',
            data: {
                x: 'x',
              columns: [
                x,
                paladin,
                mago,
                brujo,druida,picaro,guerrero,chaman,sacerdote,cazador
              ]
              ,               type: 'area-spline'
            }
        });
    </script>
</div>

<div class="wrapper bgded" style="background-image:url('images/demo/legendaria.jpg');">
  <div class="hoc split clear">
    <section>
      <div class="sectiontitle">
      <h6 class="heading font-x3">Clase - Vs - Rareza: :</h6>
      </div>
      <div class="group">
        <article>
          <p> Puedes comparar entre todos los héroes las cartas que tienen en su poder. 
</p>
                    <footer><a class="btn" href="/guerrero">Conocer &raquo;</a></footer>

        </article>
      </div>
    </section>
  </div>
</div>











<div class="bgded overlay">
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <p class="fl_left"> Jerson 2017 </p>
    </div>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.backtotop.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
</body>
</html>



