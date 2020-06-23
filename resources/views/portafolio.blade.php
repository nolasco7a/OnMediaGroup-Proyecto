@extends('layouts.template')
@section('content')

<body class="portafolio">
    
    <section style="padding-top: 135px;">
    <div class="containerCarousel  d-none d-lg-block" id="container6" style="margin-top: 5px;">
            <ul>
                  
                  @foreach($portafolios as $item)
                     <li>
                          <img src="{{Storage::url($item->imagen)}}" alt="">
                     </li>
                  @endforeach
                
                
                  <img src="./assets/images/previ.png" class="left">
                  <img src="./assets/images/next.png" class="right">
                
            </ul>
        </div>

        <div class="d-lg-none d-block" style="padding-top: 90px; padding-bottom: 96px;">
            <div class="containerCarousel" id="container7" style="transform: rotate(90deg);">
                <ul>
                    
                    @foreach($portafolios as $item)
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
</body>

@endsection