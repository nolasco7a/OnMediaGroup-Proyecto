@extends('layouts.template')
@section('content')


<body class="onmedia">
    <section style="padding-top: 130px;">
         <div class="container text-white py-4 d-none d-md-block">
            <div class="row justify-content-center">
               <div class="col-lg-10">
                   <div class="row justify-content-center">
                      <h1 style="font-weight: bold">ON MEDIA GROUP</h1><br>
                      <p class="text-1">
                        ONMEDIA GROUP es una familia (conjunto) de consultores, creativos y desarrolladores 
                        que generan ideas creativas completamente diferentes, con altas dosis de efectividad, identificamos 
                        los medios que logran el impacto que tu marca necesita a partir de:
                      </p><br>
                      <p class="text-1">
                        <strong>La conceptualización, diseño y musicalización</strong> de tu idea en nuestro estudio desarrollador de 
                        conceptos creativos  <strong> ONMUSIC</strong>.
                      </p>

                   </div>
               </div>
            </div>
         </div>
         <div class="d-md-none d-block">
         <div class="container text-white py-4">
            <div class="row justify-content-center">
               <div class="col-12">
                   <div class="row justify-content-center">
                      <h2 style="font-weight: bold">ON MEDIA GROUP</h2>
                      <div  class = "separator-neon-1" style="margin-top:45px" ></div><br>
                      <br>
                      <p class="text-2">
                        ONMEDIA GROUP es una familia (conjunto) de consultores, creativos y desarrolladores 
                        que generan ideas creativas completamente diferentes, con altas dosis de efectividad, identificamos 
                        los medios que logran el impacto que tu marca necesita a partir de:
                      </p><br>
                      <p class="text-2">
                        <strong>La conceptualización, diseño y musicalización </strong>de tu idea en nuestro estudio desarrollador de 
                        conceptos creativos  <strong>ONMUSIC</strong>.
                      </p>

                   </div>
               </div>
            </div>
         </div>
         </div>
    </section>
    <section>
        <div class="containerCarousel d-none d-lg-block" id="container2">
            <ul>
                
                    <li>
                       <a data-fslightbox href="{{asset('./assets/videos/video1_1.mp4')}}">
                        
                            <video loop muted autoplay class="video-fluid">
                                <source src="{{asset('./assets/videos/video1_1.mp4')}}" type="video/mp4">

                            </video>
                        </a>
                     
                    </li>
                    <li>
                    <a data-fslightbox href="{{asset('./assets/videos/video2_1.mp4')}}">
                        <video src="{{asset('./assets/videos/video2_1.mp4')}}"   loop muted autoplay class="video-fluid"></video>
                        </a>
                    </li>
                    <li>
                    <a data-fslightbox href="{{asset('./assets/videos/video3_1.mp4')}}">
                        <video src="{{asset('./assets/videos/video3_1.mp4')}}"   loop muted autoplay class="video-fluid"></video>
                        </a>
                    </li>
              
                
                
            <img src="./assets/images/previ.png" class="left">
            <img src="./assets/images/next.png" class="right">
                
            </ul>
        </div>

        <div class="d-lg-none d-block" style="padding-top: 90px; padding-bottom: 150px;">

           <div class="container">
               <div class="row">
                   <div class="col-12">
                     <div class="containerCarousel " id="container3" style="transform: rotate(90deg);">
                            <ul>
                                <li style="transform: rotate(-90deg);">
                                                <a data-fslightbox href="{{asset('./assets/videos/video1_1.mp4')}}">
                                        
                                        <video loop muted autoplay class="video-fluid">
                                            <source src="{{asset('./assets/videos/video1_1.mp4')}}" type="video/mp4">

                                        </video>
                                    </a>
                                </li>
                                <li style="transform: rotate(-90deg);">
                                <a data-fslightbox href="{{asset('./assets/videos/video2_1.mp4')}}">
                        
                        <video loop muted autoplay class="video-fluid">
                            <source src="{{asset('./assets/videos/video2_1.mp4')}}" type="video/mp4">

                        </video>
                    </a>
                                </li>
                                <li style="transform: rotate(-90deg);">
                                <a data-fslightbox href="{{asset('./assets/videos/video3_1.mp4')}}">
                        
                            <video loop muted autoplay class="video-fluid">
                                <source src="{{asset('./assets/videos/video3_1.mp4')}}" type="video/mp4">

                            </video>
                        </a>
                                </li>
                                
                                <img src="./assets/images/previ.png" class="left">
                                <img src="./assets/images/next.png" class="right">
                            </ul>
                        </div>
                   </div>
               </div>
           </div>

        </div>
  </section>

  <section class="marca" style="padding-top: 30px">
      <div class="container text-white">
        <h5 style="text-align:center">Tu marca o empresa necesita una imagen que impacte y te diferencie de los demás</h5>
      </div>
  </section>
  <section style="padding-top: 60px">
    <div class="container ">
      <div class="row justify-content-center">
         <div class="col-md-3 col-6 text-white text-center ">
              <div class="row justify-content-center">
                <img src="./assets/images/Iconos/microphone.png" alt="" class="img-icono">
                <p class="text-icono mt-4">
                PRODUCCIÓN, ORGANIZACIÓN Y REALIZACIÓN DE EVENTOS, CONCIERTOS Y ESPECTACULOS 
                </p>
              </div>
         </div>
         <div class="col-md-3 col-6 text-white text-center ">
            <div class="row justify-content-center">
                <img src="./assets/images/Iconos/film.png" alt="" class="img-icono">
                <p class="text-icono mt-4">
                PRODUCCIÓN DE VIDEO, GRÁFICA, AUDIO Y TELEVISIÓN
                </p>
            </div>
         </div>
         <div class="col-md-3 col-6 text-white text-center ">
            <div class="row justify-content-center">
                <img src="./assets/images/Iconos/settings.png" alt="" class="img-icono">
                <p class="text-icono mt-4">
                DISEÑO Y FORMULACION DE ESTRATEGIAS PUBLICITARIAS
                </p>
            </div>
         </div>
         <div class="col-md-2 col-6 text-white text-center ">
            <div class="row justify-content-center">
                <img src="./assets/images/Iconos/hashtag.png" alt="" class="img-icono">
                <p class="text-icono mt-4">
                CREACIÓN DE CONTENIDOS DIGITALES
                </p>
            </div>
         </div>
      </div>
    </div>
  </section>

  <section class="logos">
        <div class="container">
            <div class="row">
                 <div class="col-6" style="text-align: center">
                     <div class="">
                         <img src="./assets/images/Logos/lencasound.png" alt="" class="img-logos">
                     </div>
                 </div>
                 <div class="col-6" style="text-align: center">
                     <div class="">
                         <img src="./assets/images/Logos/show-business-png.png" alt="" class="img-logos">
                     </div>
                 </div>
            </div>
        </div>

  </section>
   
</body>
 
   




        
@endsection

