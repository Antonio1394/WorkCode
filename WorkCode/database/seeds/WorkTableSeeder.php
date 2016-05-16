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
            
          ));
    }
}
