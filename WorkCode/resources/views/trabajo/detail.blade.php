@extends('layouts.layout')
@section('content')
    <!-- Testimonials Section
    ==========================================-->
    <div id="tf-testimonials" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Detalle del <strong>{{ $data->number}}</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="item">
                        <p style="font-size: 150%">{!! $data->description !!}</p>
                 	</div> 
                </div>
                <div class="section-title center">
                    <h2>Comentarios <strong></strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="item">
                    	@if($data->comment =="")
                        	<p>No existen Comentarios sobre este Articulo</p>
                        @else
                        	<p style="font-size: 150%">{!! $data->comment !!}</p>
                        @endif
                 	</div> 
                </div>

            </div>
        </div>
    </div>

    <!-- Contact Section
    ==========================================-->

@endsection