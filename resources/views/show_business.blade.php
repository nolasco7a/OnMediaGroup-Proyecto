@extends('layouts.template')
@section('content')

<body class="show-business">
    
 <section style="padding-top: 100px;">
    <div class="container text-white d-none d-lg-block">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row justify-content-center">
                    <h1 style="font-weight: bold">SHOW BUSINESS</h1><br>
                    <p class="text-1">
                        Es una familia de consultores, creativos y desarrolladores, que generan ideas creativas diferentes, 
                        con mayor efectividad, identiﬁcando los medios y contenidos que logran el impacto que tu marca necesita.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-lg-none d-block">

    <div class="container text-white pt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <h1 style="font-weight: bold;" class="tituloShow">SHOW BUSINESS</h1><br>
                    <div  class = " separator-neon-1" style="margin-top:60px" ></div><br>
                    <p class="text-2 pt-5">
                        Es una familia de consultores, creativos y desarrolladores, que generan ideas creativas diferentes, 
                        con mayor efectividad, identiﬁcando los medios y contenidos que logran el impacto que tu marca necesita.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
 </section>
    
  <section style="margin-top:-20px">
     <div class="containerCarousel  d-none d-lg-block" id="container4">
            <ul>
                  
                  @foreach($showbusiness as $item)
                     <li>
                          <img src="{{Storage::url($item->imagen)}}" alt="">
                     </li>
                  @endforeach
                
                
                  <img src="./assets/images/previ.png" class="left">
                  <img src="./assets/images/next.png" class="right">
                
            </ul>
        </div>

        <div class="d-lg-none d-block" style="padding-top: 90px; padding-bottom: 96px;">
            <div class="containerCarousel" id="container5" style="transform: rotate(90deg);">
                <ul>
                    
                    @foreach($showbusiness as $item)
                        <li style="transform: rotate(-90deg);">
                            <img src="{{Storage::url($item->imagen)}}" alt="">
                        </li>
                    @endforeach
                    
                    
                    <img src="./assets/images/previ.png" class="left">
                    <img src="./assets/images/next.png" class="right">
                    
                </ul>
            </div>
             
        </div>
  </section>

  <section>
      <div class="container text-white">
          <h1 style="text-align:center"> ELECTRÓNICA</h1>
      </div>
  </section>
</body>

@endsection