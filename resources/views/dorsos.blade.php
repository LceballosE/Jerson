
<!DOCTYPE html>
<html>
<head>
<title>Jerson</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div  class="bgded overlay" style="background-image:url('images/demo/cartasdorsos.jpg');">
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

          </ul>
          </li>
        <li>Cartas Héroes
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

        <li>Expansiones
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
       
              <li><a href="crearmaso">Crear Maso</a></li>

          
        <li><a href="">                     </a></li>
        </ul>
    </nav>
  </div>
  <div id="pageintro" class="hoc clear"></div>
   <div class="jumbotron" style="background-color: black; opacity: 0.6;border-radius: 20px;padding: 30px;margin: 20px" >
    <h6 class="heading font-x3" style="text-align: center;">Puedes Competir por más.</h6>
          <p style="text-align: center;" > Cada temporada trae un nuevo dorso.</p>
          <p style="text-align: center"> Compíte, gánale a todos tu enemigos y muestra lo mejor de ti.</p>
</div>

</div>





<div class="wrapper row3">
  <section class="hoc container clear">
   
        <h2 style="text-align: center">Dorsos</h2>   
    @if (count($dorsos)>0)
      <div class="group elements">
    <?php $count=0;?>
    @foreach ($dorsos as $dorso)
          @if ($count>0)
           <article class="one_quarter"><img src="{{asset($dorso->imagen)}}" alt="">
              <div class="txtwrap">
               
              <!--- <h4 class="heading">nombre: {{$dorso->nombre}}</h4>-->
                </div>
            </article>  
            <?php $count=$count+1;?>
            
          @endif
          @if ($count==0)
           <article class="one_quarter first"><img src="{{asset($dorso->imagen)}}" alt="">
              <div class="txtwrap">
                
             <!---    <h4 class="heading">nombre:  {{$dorso->nombre}}</h4>-->
               
                </div>
            </article>  
           <?php $count=$count+1; ?>
        @endif
@if($count>3)
      <?php $count=0;?>

            @endif
      @endforeach 
        </div>
      @endif

   </section>
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



