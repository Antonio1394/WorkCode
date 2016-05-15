@extends('layouts.layout')

@section('content')

    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Muchas veces las <strong><span class="color">leyes </span></strong></h1>
                <p class="lead">son como las telarañas: <strong>los insectos pequeños quedan prendidos en ellas;<br> </strong>los grandes <strong>la rompen</strong></p>
                <a href="#Trabajo" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>
    
@include('trabajo.list')

@endsection