<!DOCTYPE html>
<html>
<head>
<title>Jerson</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="bgded overlay" style="background-image:url('images/mazos/malfurion.jpeg');">
  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear" style="float:right;">
      <ul class="clear">
        <li class="active"><a href="/">Home</a></li>
        <li><a class="drop" href="#">Mazos</a>
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
        <li><a class="drop" href="#">Expanciones</a>
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
        <li><a href="#">Crear Mazo</a></li>
        <li><a href="#">                     </a></li>
        </ul>
    </nav>
  </div>

  <main class="hoc container clear">
 <div class="group">
      <div class="one_half first">

        <h6 class="heading font-x3">La naturaleza es tu aliada</h6>
        <p>Ultricies vel vestibulum quis sodales nec sem aliquam non ligula sed dui purus blandit ut viverra at bibendum id urna duis est elit condimentum ac venenatis sed congue ac ipsum aliquam erat elit commodo non hendrerit id vehicula</p>
      </div>
      <div class="one_half" >
        <img src="../images/mazos/druidahp.png"  align="right" >

      </div>

  </main>



</div>



<div class="wrapper row3">
  <section class="hoc container clear">
   
        <br><h2>Habilidades</h2></br>   
    @if (count($cartas)>0)
      <div class="group elements">
    <?php $count=0;?>
    @foreach ($cartas as $carta)
          @if ($count>0)
           <article class="one_quarter"><a href="#"><img src="{{asset($carta->imagen)}}" alt=""></a>
              <div class="txtwrap">
                <h4 class="heading">{{$carta->nombre}}</h4>
                <p>CLASE: {{$carta->clase}}</p>
                 <p>TIPO: {{$carta->tipo}}</p>
                  <p>ATAQUE: {{$carta->ataque}}</p>
                   <p>VIDA: {{$carta->vida}}</p>
                </div>
            </article>  
            <?php $count=$count+1;?>
            
          @endif
@if ($count==0)
           <article class="one_quarter first"><a href="#"><img src="{{asset($carta->imagen)}}" alt=""></a>
              <div class="txtwrap">
                <h4 class="heading">{{$carta->nombre}}</h4>
                <p>CLASE: {{$carta->clase}}</p>
                 <p>TIPO: {{$carta->tipo}}</p>
                  <p>ATAQUE: {{$carta->ataque}}</p>
                   <p>VIDA: {{$carta->vida}}</p>
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
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear">
      <div class="one_quarter first">
        <h6 class="heading">Jerson</h6>
        <p>Sit amet hendrerit commodo feugiat pharetra lorem praesent vitae magna at metus pulvinar.</p>
        <p>Aliquam suspendisse elit quisque et cursus nulla aenean tincidunt massa condimentum.</p>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Praesent vitae</h6>
        <nav>
          <ul class="nospace">
            <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Disclaimer</a></li>
          </ul>
        </nav>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Suspendisse potenti</h6>
        <article>
          <h2 class="nospace font-x1"><a href="#">Erat volutpat nam</a></h2>
          <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          <p>Massa ac semper nibh sem eu quam sed id nisl sed pulvinar ligula in turpis proin nisl purus iaculis eget et bibendum quis dictum lorem tellus.</p>
        </article>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Sodales aliquam</h6>
        <ul class="nospace linklist">
          <li><a href="#">Ut suscipit vestibulum dolor</a></li>
          <li><a href="#">Nulla sed justo id metus</a></li>
          <li><a href="#">Interdum integer vel ante ut</a></li>
          <li><a href="#">Odio egestas pretium vivamus</a></li>
        </ul>
      </div>
    </footer>
  </div>
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <p class="fl_left"> Jerson 2017 </p>
    </div>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="..\\layout/scripts/jquery.min.js"></script>
<script src="..\\layout/scripts/jquery.backtotop.js"></script>
<script src="..\\layout/scripts/jquery.mobilemenu.js"></script>
<script src="..\\layout/scripts/jquery.flexslider-min.js"></script>

</body>
</html>