@extends('layouts.layout')
@section('content')
    <!-- Testimonials Section
    ==========================================-->
    <div id="tf-testimonials" class="">
        <div class="overlay">
            <div class="container">
                <div class="section-title center text-center">
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
                <div class="section-title center text-center">
                    <h2>Comentarios <strong></strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="item text-center">
                    	@if($data->comment =="")
                        	<p>No existen Comentarios sobre este Articulo</p>
                        @else
                        	<p style="font-size: 150%">{!! $data->comment !!}</p>
                            <a href="javascript:history.back()" class="btn btn-warning">Regresar</a>
                        @endif
                 	</div> 
                </div>

            </div>
        </div>
    </div>

    <!-- Contact Section
    ==========================================-->

@endsection