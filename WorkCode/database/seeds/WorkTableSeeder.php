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

					array( 'number'=>'Articulo 15',
             		'description'=>'Los casos no previstos por este
									Código, por sus reglamentos o por las demás leyes
									relativas al trabajo, se deben resolver, en primer
									término, de acuerdo con los principios del derecho
									de trabajo; en segundo lugar, de acuerdo con la
									equidad, la costumbre o el uso locales, en armonía
									con dichos principios; y por último, de acuerdo con
									los principios y leyes de derecho común.',
               		'comment'=>'Como se integra el sistema de representación de las normas laborales: de acuerdo a los principios.'),             
            

            array( 'number'=>'Articulo 18',
             		'description'=>'Contrato individual de trabajo,
									sea cual fuere su denominación, es el vínculo
									económico-jurídico mediante el que una persona
									(trabajador), queda obligada a prestar a otra
									(patrono), sus servicios personales o a ejecutarle
									una obra, personalmente, bajo la dependencia
									continuada y dirección inmediata o delegada de
									esta última, a cambio de una retribución de cualquier
									clase o forma.',
               		'comment'=>'Contrato de Trabajo.'),  

            array( 'number'=>'Articulo 19',
             		'description'=>'Primer Parrafo:Para que el contrato individual de
									trabajo exista y se perfeccione, basta con que se
									inicie la relación de trabajo, que es el hecho mismo
									de la prestación de los servicios o de la ejecución
									de la obra en las condiciones que determina el
									Artículo precedente.',
               		'comment'=>'Relacion de Trabajo.'),  


            array( 'number'=>'Articulo 20',
             		'description'=>'El contrato individual de trabajo
									obliga, no sólo a lo que se establece en él, sino:
									a) A la observancia de las obligaciones y derechos
									que este Código o los convenios internacionales
									ratificados por Guatemala14, determinen para las
									partes de la relación laboral, siempre, respecto
									a estos últimos, cuando consignen beneficios
									superiores para los trabajadores que los que este
									Código crea; y
									b) A las consecuencias que del propio contrato se
									deriven según la buena fe, la equidad, el uso y
									costumbres locales o la ley.
									Son condiciones o elementos de la prestación de
									los servicios o ejecución de una obra: la materia
									u objeto; la forma o modo de su desempeño; el
									tiempo de su realización; el lugar de ejecución y las
									retribuciones a que esté obligado el patrono.',
																		
               		'comment'=>'<strong>Primer Parrafo: </strong> Efectos Individual del trabajo.
               					<strong>Cuarto Parrafo: </strong>  Elementos de las condiciones del 											trabajo'),  
          ));
    }
}
