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
            
          ));
    }
}
