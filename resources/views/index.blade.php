@extends('layouts.template')
@section('content')

<body class="inicio">
  
<div id="carouselExampleIndicators" class="carousel slide d-none d-md-block" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/images/Backgrounds/slide-2.jpg" class="img-slide d-block " alt="...">
        <div class="carousel-caption">
               
               <h5>ON MEDIA GROUP</h5>
               <div  class = "separator-neon" ></div>
                    <p> Es una familia de consultores, creativos y desarrolladores, que generan 
                      ideas creativas diferentes, con mayor efectividad, identiﬁcando los medios 
                      y  contenidos que logran el impacto que tu marca necesita.</p>
                
                 <div class="button">
                    <!--<button type="button" class="btn btn-outline-light" href="onmedia">CONOCE MÁS</button>-->
                    <a href="onmedia" class="btn btn-outline-light " role="button" aria-pressed="true">CONOCE MÁS</a>
                 </div>   
       </div>
       
       
    </div>

    
    <div class="carousel-item">
        <img src="./assets/images/Backgrounds/slide-2.jpg" class=" img-slide d-block " alt="...">
        <div class="carousel-caption">
               <h5>SHOW BUSINESS</h5>
               <div class="separador">
               <div  class = " separator-neon" ></div>
               </div>
               <p> Es una familia de consultores, creativos y desarrolladores, que generan 
                 ideas creativas diferentes, con mayor efectividad, identiﬁcando los medios 
                 y contenidos que logran el impacto que tu marca necesita.</p>
                 <div class="button">
                 <!--<button type="button" class="btn btn-outline-light" href="show_business">CONOCE MÁS</button>-->
                 <a href="show_business" class="btn btn-outline-light " role="button" aria-pressed="true">CONOCE MÁS</a>
                 </div>  
       </div>
          
    </div>
    <div class="carousel-item">
      <img src="./assets/images/Backgrounds/slide-3.jpg" class="img-slide d-block " alt="...">
      <div class="carousel-caption">
               <h5>LENCA SOUND</h5>
               <div class="separador">
               <div  class = " separator-neon" ></div>
               </div>
               <p> Es una familia de consultores, creativos y desarrolladores, que generan 
                 ideas creativas diferentes, con mayor efectividad, identiﬁcando los medios 
                 y contenidos que logran el impacto que tu marca necesita.</p>
                 <div class="button">
                 <!--<button type="button" class="btn btn-outline-light" href="lencasound">CONOCE MÁS</button>-->
                 <a href="lenca_sound" class="btn btn-outline-light " role="button" aria-pressed="true">CONOCE MÁS</a>
                 </div>  
       </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>

<div class="d-md-none d-block">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/images/Backgrounds/slide-2.jpg" class="img-slide d-block " alt="...">
        <div class="carousel-caption" style="left:0%; bottom:80vh">
            
           <div class="container">
             <div class="row">
             <div class="col-12">
             <div class="row justify-content-center">
                  <h5>ON MEDIA GROUP</h5>
                    <div  class = "separator-neon" ></div>
                          <p class="parrafo"> Es una familia de consultores, creativos y desarrolladores, que generan 
                            ideas creativas diferentes, con mayor efectividad, identiﬁcando los medios 
                            y  contenidos que logran el impacto que tu marca necesita.</p>
                      
                      <div class="button">
                      <a href="onmedia" class="btn btn-outline-light " role="button" aria-pressed="true">CONOCE MÁS</a>
                      </div>   
             </div>
           </div>
             </div>
           </div>
               
              
       </div>
       
       
    </div>

    
    <div class="carousel-item">
        <img src="./assets/images/Backgrounds/slide-2.jpg" class=" img-slide d-block" alt="...">
        <div class="carousel-caption" style="left:0%; bottom:80vh">

             <div class="container">
             <div class="row">
             <div class="col-12">
             <div class="row justify-content-center">
                  <h5>SHOW BUSINESS</h5>
                    <div  class = "separator-neon" ></div>
                          <p class="parrafo"> Es una familia de consultores, creativos y desarrolladores, que generan 
                            ideas creativas diferentes, con mayor efectividad, identiﬁcando los medios 
                            y  contenidos que logran el impacto que tu marca necesita.</p>
                      
                      <div class="button">
                      <a href="show_business" class="btn btn-outline-light " role="button" aria-pressed="true">CONOCE MÁS</a>
                      </div>   
             </div>
           </div>
             </div>
           </div>
               
       </div>
          
    </div>
    <div class="carousel-item">
      <img src="./assets/images/Backgrounds/slide-3.jpg" class="img-slide d-block " alt="...">
      <div class="carousel-caption" style="left:0%; bottom:80vh">
              <div class="container"> 
             <div class="row">
             <div class="col-12">
             <div class="row justify-content-center">
                  <h5>LENCA SOUND</h5>
                    <div  class = "separator-neon" ></div>
                          <p class="parrafo"> Es una familia de consultores, creativos y desarrolladores, que generan 
                            ideas creativas diferentes, con mayor efectividad, identiﬁcando los medios 
                            y  contenidos que logran el impacto que tu marca necesita.</p>
                      
                      <div class="button">
                      <a href="lenca_sound" class="btn btn-outline-light " role="button" aria-pressed="true">CONOCE MÁS</a>
                      </div>   
             </div>
           </div>
             </div>
           </div>
       </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>

</div>


</body>
@endsection
