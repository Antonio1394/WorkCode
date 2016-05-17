<?php

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articlesWork')->delete();
        DB::table('articlesWork')->insert(array(
             array( 'number'=>'Articulo 5',
             		'description'=>'Intermediario es toda persona que <br>
									contrata en nombre propio los servicios de uno o<br><br>
									más trabajadores para que ejecuten algún trabajo<br>
									en beneficio de un patrono. Este último queda<br>
									obligado solidariamente por la gestión de aquel para<br>
									con el o los trabajadores, en cuanto se refiere a los<br>
									efectos legales qué se deriven de la Constitución,<br>
									del presente Código, de sus reglamentos y demás<br>
									disposiciones aplicables.<br>
									No tiene carácter de intermediario y sí de patrono,<br>
									el que se encargue por contrato, de trabajos que<br>
									ejecute con equipos o capitales propios.',
               		'comment'=>''),

             array( 'number'=>'Articulo 7',
             		'description'=>'Se prohíbe en las zonas de trabajo
									la venta o introducción de bebidas o drogas
									embriagantes o estupefacientes, las lides de gallos,
									los juegos de azar y el ejercicio de la prostitución.
									Es entendido que ésta prohibición se limita a un
									radio de tres kilómetros alrededor de cada centro de
									trabajo establecido fuera de las poblaciones, ya que
									en cuanto a éstas ultimas rigen las disposiciones de
									las leyes y reglamentos respectivos.',
               		'comment'=>'Medidas del protección del Salario'),


             array( 'number'=>'Articulo 12',
             		'description'=>'Son nulos ipso jure y no obligan a los
									contratantes, todos los actos o estipulaciones que
									impliquen renuncia, disminución o tergiversación de
									los derechos que la Constitución de la República,
									el presente Código, sus reglamentos y las demás
									leyes y disposiciones de trabajo o de previsión social
									otorguen a los trabajadores, aunque se expresen
									en un reglamento interior de trabajo, un contrato de
									trabajo u otro pacto o convenio cualquiera.',
               		'comment'=>'Nulidad del Contrato Individual del trabajo <br>ipso jure: Nulidad en todo derecho'),
            
          ));
    }
}
