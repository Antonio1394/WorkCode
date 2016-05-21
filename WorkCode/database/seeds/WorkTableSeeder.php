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
             		'description'=>'Intermediario es toda persona que 
									contrata en nombre propio los servicios de uno o
									más trabajadores para que ejecuten algún trabajo
									en beneficio de un patrono. Este último queda
									obligado solidariamente por la gestión de aquel para
									con el o los trabajadores, en cuanto se refiere a los
									efectos legales qué se deriven de la Constitución,
									del presente Código, de sus reglamentos y demás
									disposiciones aplicables.
									No tiene carácter de intermediario y sí de patrono,
									el que se encargue por contrato, de trabajos que
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
             		'description'=>'Primer Parrafo: Para que el contrato individual de
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



           	array( 'number'=>'Articulo 22',
             		'description'=>'En todo contrato individual de
									trabajo deben entenderse incluidos por lo menos,
									las garantías y derechos que otorguen a los
									trabajadores la Constitución, el presente Código,
									sus reglamentos y las demás leyes de trabajo o de
									previsión social.',
																		
               		'comment'=>'Principios de Derechos mínimos'),


            array( 'number'=>'Articulo 23',
             		'description'=>'La sustitución del patrono no
									afecta los contratos de trabajo existentes, en
									perjuicio del trabajador. El patrono sustituido queda
									solidariamente obligado con el nuevo patrono por
									las obligaciones derivadas de los contratos o de las
									disposiciones legales, nacidas antes de la fecha de
									la sustitución y hasta por el término de seis meses.',
																		
               		'comment'=>'Sustitución total del patrono'),



             array( 'number'=>'Articulo 25',
             		'description'=>'El contrato individual de trabajo
									puede ser:<br>
									a) Por tiempo indefinido, cuando no se especifica
									fecha para su terminación.<br>
									b) A plazo fijo, cuando se especifica fecha para su
									terminación o cuando se ha previsto el acaecimiento
									de algún hecho o circunstancia como la conclusión
									de una obra, que forzosamente ha de poner término
									a la relación de trabajo. En este segundo caso, se
									debe tomar en cuenta la actividad del trabajador en
									sí mismo como objeto del contrato, y no el resultado
									de la obra; y<br>
									c) Para obra determinada, cuando se ajusta
									globalmente o en forma alzada el precio de los
									servicios del trabajador desde que se inician las
									labores hasta que éstas concluyan, tomando
									en cuenta el resultado del trabajo, o sea, la obra
									realizada.<br>
									Aunque el trabajador reciba anticipos a buena
									cuenta de los trabajos ejecutados o por ejecutarse,
									el contrato individual de trabajo debe entenderse
									para obra determinada, siempre que se reúnan las
									condiciones que indica el párrafo anterior.',
																		
               		'comment'=>'Clasificación de contratos de Trabajo'),

             array( 'number'=>'Articulo 26',
             		'description'=>'Todo contrato individual de trabajo
									debe tenerse por celebrado por tiempo indefinido,
									salvo prueba o estipulación lícita y expresa en
									contrario.<br>
									Deben tenerse siempre como contratos a plazo
									indefinido, aunque se hayan ajustado a plazo fijo
									o para obra determinada, los que se celebren en
									una empresa cuyas actividades sean de naturaleza
									permanente o continuada, si al vencimiento de
									dichos contratos subsiste la causa que les dio
									origen.<br>
									En consecuencia, los contratos a plazo fijo y para
									obra determinada tienen carácter de excepción y
									sólo pueden celebrarse en los casos que así lo exija
									la naturaleza accidental o temporal del servicio que
									se va a prestar o de la obra que se va a ejecutar.',
																		
               		'comment'=>'Contrato Tipo'),



             array( 'number'=>'Articulo 27',
             		'description'=>'El contrato individual de trabajo
									puede ser verbal cuando se refiera:<br>
									a) A las labores agrícolas o ganaderas;<br>
									b) Al servicio doméstico;<br>
									c) A los trabajos accidentales o temporales que no
									excedan de sesenta días; y
									d) A la prestación de un trabajo para obra<br>
									determinada, siempre que el valor de ésta no
									exceda de cien quetzales, y si se hubiere señalado
									plazo para la entrega siempre que éste no sea
									mayor de sesenta días.
									En todos estos casos el patrono queda obligado a
									suministrar al trabajador, en el momento en que se
									celebre el contrato, una tarjeta o constancia que
									únicamente debe contener la fecha de iniciación de
									la relación de trabajo y el salario estipulado, y al
									vencimiento de cada período de pago, el número de
									días o jornadas trabajadas, o el de tareas u obras
									realizadas.',
																		
               		'comment'=>'Contrato Tipo'),


             array( 'number'=>'Articulo 28',
             		'description'=>'En los demás casos, el contrato
									individual de trabajo debe extenderse por escrito,
									en tres ejemplares: uno que debe recoger cada
									parte en el acto de celebrarse y otro que el patrono
									queda obligado a hacer llegar al Departamento
									Administrativo de Trabajo15, directamente o por
									medio de la autoridad de trabajo más cercana, dentro
									de los quince días posteriores a su celebración,
									modificación o novación.',
																		
               		'comment'=>'La Plena Prueba'), 


             array( 'number'=>'Articulo 28',
             		'description'=>'l contrato escrito de trabajo debe
									contener:
									a) Los nombres, apellidos, edad, sexo, estado civil,
									nacionalidad, y vecindad de los contratantes;<br>
									b) La fecha de la iniciación de la relación de
									trabajo;<br>
									c) La indicación de los servicios que el trabajador se
									obliga a prestar, o la naturaleza de la obra a ejecutar,
									especificando en lo posible las características y las
									condiciones del trabajo;<br><br>

									Código de Trabajo • Edición Conmemorativa
									d) El lugar o los lugares donde deben prestarse los
									servicios o ejecutarse la obra;<br>
									e) La designación precisa del lugar donde viva el
									trabajador cuando se le contrata para prestar sus
									servicios o ejecutar una obra en lugar distinto de
									aquel donde viva habitualmente;<br>
									f) La duración del contrato o la expresión de ser
									por tiempo indefinido o para la ejecución de obra
									determinada;<br>
									g) El tiempo de la jornada de trabajo y las horas en
									que debe prestarse;<br>
									h) El salario, beneficio, comisión o participación que
									debe recibir el trabajador; si se debe calcular por
									unidad de tiempo, por unidad de obra o de alguna
									otra manera y la forma, período y lugar de pago;17
									En los casos en que se estipule que el salario se ha
									de pagar por unidad de obra, se debe hacer constar
									la cantidad y calidad de material, las herramientas
									y útiles que el patrono convenga en proporcionar y
									el estado de conservación de los mismos, así como
									el tiempo que el trabajador pueda tenerlos a su
									disposición. El patrono no puede exigir del trabajador
									cantidad alguna por concepto de desgaste normal
									o destrucción accidental de las herramientas, como
									consecuencia de su uso en el trabajo;<br>
									i) Las demás estipulaciones legales en que
									convengan las partes;<br>
									j) El lugar y la fecha de celebración del contrato; y<br>
									k) Las firmas de los contratantes o la impresión
									digital de los que no sepan o no puedan firmar, y el
									número de sus cédulas de vecindad.
									El Ministerio de Trabajo y Previsión Social debe
									imprimir modelos de contratos para cada una de las
									categorías de trabajo a fin de facilitar el cumplimiento
									de esta disposición.',
																		
               		'comment'=>'Lo que debe de contener el contrato de trabajo'),    
          ));
    }
}
