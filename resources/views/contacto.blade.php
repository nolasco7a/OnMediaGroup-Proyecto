
@extends('layouts.template')
@section('content')
<body class="contactanos">

<section class="pb-5" style="padding-top:135px">

	<div class="container text-white d-none d-lg-block">
			<div class="row justify-content-center">
				<div class="col-10 col-md-12">
					<div class="row justify-content-center">
						<h1 style="font-weight: bold">CONTACTO</h1><br>
					</div>
				</div>
			</div>
		</div>

		<div class="d-lg-none d-block">

			<div class="container text-white pt-5">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="row justify-content-center">
							<h1 style="font-weight: bold;" class="tituloShow">CONTACTO</h1><br>
							<div  class = " separator-neon-1" style="margin-top:60px" ></div><br>
							
						</div>
					</div>
				</div>
			</div>
     </div>
</section>
  
<section class="" >
  <div class="container" style="position: relative">
	<div class="row justify-content-center text-white">
		<div class="col-sm-12 col-lg-10">
			<div class="form">
					<div class="">
							<div class="form-top">
								<div class="form-top-left">
									<h3></h3>
								</div>
							</div>
							<div class="form-bottom" >
							<div class="row">
								<div class="col-sm-12 col-lg-6"> 
								<form method="POST" action="{{route('contacto')}}">
									@csrf
		
									<div class="form-group">
	
												<label class="sr-only" for="contact-subject">*NOMBRE</label>
												<input type="texSSt" name="nombre" placeholder="*NOMBRE" class="contact-subject form-control" id="contact-subject" value="{{old('nombre')}}">
												{!! $errors->first('nombre', '<small class="red">:message</small>') !!}
												
									</div>
								</div>
								<div class="col-sm-12 col-lg-6"> 
								<div class="form-group">
										<label class="sr-only" for="contact-email">*EMAIL</label>
										<input type="email" name="email" placeholder="*EMAIL" class="contact-email form-control" id="contact-email" value="{{old('email')}}">
										{!! $errors->first('email', '<small class="red">:message</small>') !!}
									</div>
								</div>
							</div>
							<div class="form-group">
										<label class="sr-only" for="contact-subject">ASUNTO</label>
										<input type="text" name="asunto" placeholder="ASUNTO" class="contact-asunto form-control" id="contact-asunto" value="{{old('asunto')}}">
										{!! $errors->first('asunto', '<small class="red">:message</small>') !!}
							</div>
									<div class="form-group">
										<label class="sr-only" for="contact-message">MENSAJE</label>
										<textarea name="mensaje" placeholder="MENSAJE" class="contact-message form-control" id="contact-message" rows="1">{{old('mensaje')}}</textarea>
										{!! $errors->first('mensaje', '<small class="red">:message</small>') !!}
									</div>
									<div class="button" style="text-align: center; margin-top: -27px;" >
									<button type="submit" class="btn btn-outline-light mb-4" >ENVIAR</button>
									</div>
							</div>
						</form>
						</div>
						
					
			</div>
		</div>
  </div>
</section>

</body>



@endsection
