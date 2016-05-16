    <!-- Services Section
    ==========================================-->
    <div id="Trabajo" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Articulos <strong>Código de Trabajo</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em><strong>Definición de contrato de Trabajo:</strong> denominación, es el vínculo económico-jurídico mediante el que una persona
                (Trabajador), queda obligada a prestar a otra
                (Patrono), sus servicios personales o a ejecutarle
                Una obra, personalmente, bajo la dependencia
                Continuada y dirección inmediata o delegada de
                Esta última, a cambio de una retribución de cualquier
                Clase o forma. Art 18
                </em></small>
            </div>
            <div class="space"></div>
            <div class="row">
                @foreach($data as $article)
                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-institution"></i>
                    <h4><strong>{{$article->number }}</strong></h4>
                    <p>{{ substr($article->description, 0, 100) }}...</p>

                </div>
                @endforeach
                
            </div>
        </div>
    </div>

    <!-- Clients Section
    ==========================================-->
