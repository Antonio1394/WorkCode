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
             		'begin'=>'Intermediario es toda persona que 
									contrata en nombre propio los servicios de uno o
									más trabajadores para que ejecuten algún trabajo
									en beneficio de un patrono. Este último queda',
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
             		'begin'=>'Se prohíbe en las zonas de trabajo
									la venta o introducción de bebidas o drogas
									embriagantes o estupefacientes, las lides de gallos,
									los juegos de azar y el ejercicio de la prostitución',
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
             		'begin'=>'Son nulos ipso jure y no obligan a los
									contratantes, todos los actos o estipulaciones que
									impliquen renuncia, disminución o tergiversación de
									los derechos que la Constitución de la República',
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
			 		'begin'=>'Los casos no previstos por este
									Código, por sus reglamentos o por las demás leyes
									relativas al trabajo, se deben resolver, en primer
									término, de acuerdo con los principios del derecho
									de trabajo; en segundo lugar, de acuerdo con la',
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
             		'begin'=>'Contrato individual de trabajo,
									sea cual fuere su denominación, es el vínculo
									económico-jurídico mediante el que una persona
									(trabajador), queda obligada a prestar a otra
									(patrono), sus servicios personales o a ejecutarle',
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
             		'begin'=>'Primer Parrafo: Para que el contrato individual de
									trabajo exista y se perfeccione, basta con que se
									inicie la relación de trabajo, que es el hecho mismo
									de la prestación de los servicios o de la ejecución',
             		'description'=>'Primer Parrafo: Para que el contrato individual de
									trabajo exista y se perfeccione, basta con que se
									inicie la relación de trabajo, que es el hecho mismo
									de la prestación de los servicios o de la ejecución
									de la obra en las condiciones que determina el
									Artículo precedente.',
               		'comment'=>'Relacion de Trabajo.'),  

             array( 'number'=>'Articulo 20',
             		'begin'=>'El contrato individual de trabajo
									obliga, no sólo a lo que se establece en él, sino:
									a) A la observancia de las obligaciones y derechos
									que este Código o los convenios internacionales
									ratificados por Guatemala14, determinen para las',
             		'description'=>'El contrato individual de trabajo
									obliga, no sólo a lo que se establece en él, sino:<br>
									a) A la observancia de las obligaciones y derechos
									que este Código o los convenios internacionales
									ratificados por Guatemala14, determinen para las
									partes de la relación laboral, siempre, respecto
									a estos últimos, cuando consignen beneficios
									superiores para los trabajadores que los que este
									Código crea; y<br>
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
           	 		'begin'=>'En todo contrato individual de
									trabajo deben entenderse incluidos por lo menos,
									las garantías y derechos que otorguen a los
									trabajadores la Constitución, el presente Código,
									sus reglamentos y las demás leyes de trabajo o de',
             		'description'=>'En todo contrato individual de
									trabajo deben entenderse incluidos por lo menos,
									las garantías y derechos que otorguen a los
									trabajadores la Constitución, el presente Código,
									sus reglamentos y las demás leyes de trabajo o de
									previsión social.',
																		
               		'comment'=>'Principios de Derechos mínimos'),

             array( 'number'=>'Articulo 23',
             		'begin'=>'La sustitución del patrono no
									afecta los contratos de trabajo existentes, en
									perjuicio del trabajador. El patrono sustituido queda',
             		'description'=>'La sustitución del patrono no
									afecta los contratos de trabajo existentes, en
									perjuicio del trabajador. El patrono sustituido queda
									solidariamente obligado con el nuevo patrono por
									las obligaciones derivadas de los contratos o de las
									disposiciones legales, nacidas antes de la fecha de
									la sustitución y hasta por el término de seis meses.',
																		
               		'comment'=>'Sustitución total del patrono'),

             array( 'number'=>'Articulo 25',
             		'begin'=>'El contrato individual de trabajo
									puede ser:a) Por tiempo indefinido, cuando no se especifica
									fecha para su terminación.
									b) A plazo fijo, cuando se especifica fecha para su
									terminación o cuando se ha previsto el acaecimiento',
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
             		'begin'=>'Todo contrato individual de trabajo
									debe tenerse por celebrado por tiempo indefinido,
									salvo prueba o estipulación lícita y expresa en
									contrario.',
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
             		'begin'=>'El contrato individual de trabajo
									puede ser verbal cuando se refiera:
									a) A las labores agrícolas o ganaderas;
									b) Al servicio doméstico;
									c) A los trabajos accidentales o temporales que no
									excedan de sesenta días; y',
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
             		'begin'=>'En los demás casos, el contrato
									individual de trabajo debe extenderse por escrito,
									en tres ejemplares: uno que debe recoger cada
									parte en el acto de celebrarse y otro que el patrono',
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

             array( 'number'=>'Articulo 29',
             		'begin'=>'El contrato escrito de trabajo debe
									contener:
									a) Los nombres, apellidos, edad, sexo, estado civil,
									nacionalidad, y vecindad de los contratantes;
									b) La fecha de la iniciación de la relación de
									trabajo;
									c) La indicación de los ',
             		'description'=>'El contrato escrito de trabajo debe
									contener:<br>
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

             array( 'number'=>'Articulo 30',
             		'begin'=>'La prueba plena del contrato escrito
									sólo puede hacerse con el documento respectivo.
									La falta de éste o la omisión de alguno de sus
									requisitos se debe imputar siempre al patrono y
									si a requerimiento de las autoridades de trabajo
									no lo exhibe, deben presumirse, salvo prueba en',
             		'description'=>'La prueba plena del contrato escrito
									sólo puede hacerse con el documento respectivo.
									La falta de éste o la omisión de alguno de sus
									requisitos se debe imputar siempre al patrono y
									si a requerimiento de las autoridades de trabajo
									no lo exhibe, deben presumirse, salvo prueba en
									contrario, ciertas las estipulaciones de trabajo
									afirmadas por el trabajador.
									El contrato verbal se puede probar por los medios
									generales de prueba y, al efecto, pueden ser testigos
									los trabajadores al servicio de un mismo patrono.',
																		
               		'comment'=>'Principio de Tutelaridad'),  

             array( 'number'=>'Articulo 31',
             		'begin'=>'Tienen también capacidad para
									contratar su trabajo, para percibir y disponer de la
									retribución convenida y, en general, para ejercer los
									derechos y acciones que se deriven del presente
									Código, de sus reglamentos y de las leyes de',
             		'description'=>'Tienen también capacidad para
									contratar su trabajo, para percibir y disponer de la
									retribución convenida y, en general, para ejercer los
									derechos y acciones que se deriven del presente
									Código, de sus reglamentos y de las leyes de
									previsión social, los menores de edad, de uno u
									otro sexo, que tengan catorce años o más y los
									insolventes y fallidos.19
									Las capacidades específicas a que alude el párrafo
									anterior, lo son sólo para los efectos de trabajo, y
									en consecuencia, no afectan en lo demás el estado
									de minoridad o, en su caso, el de incapacidad por
									insolvencia o quiebra.
									La interdicción judicial declarada del patrono no
									invalida los actos o contratos que haya celebrado
									el ejecutado con sus trabajadores anteriormente a
									dicha declaratoria.',
																		
               		'comment'=>''),

			 array( 'number'=>'Articulo 32',
			 		'begin'=>'Los contratos relativos al trabajo
									de los jóvenes que tengan menos de catorce años,
									deben celebrarse con los representantes legales de
									éstos y, en su defecto, se necesita la autorización',
             		'description'=>'Los contratos relativos al trabajo
									de los jóvenes que tengan menos de catorce años,
									deben celebrarse con los representantes legales de
									éstos y, en su defecto, se necesita la autorización
									de la Inspección General de Trabajo.20
									El producto del trabajo de los menores a que se
									refiere el párrafo anterior lo deben percibir sus
									representantes legales o la persona que tenga a su
									cargo el cuidado de ellos, según la determinación
									que debe hacer la Inspección General de Trabajo
									en las autorizaciones a que alude este Artículo.',
																		
               		'comment'=>''),

			 array( 'number'=>'Articulo 57',
			 		'begin'=>'Reglamento interior de trabajo es
									el conjunto de normas elaborado por el patrono
									de acuerdo con las leyes, reglamentos, pactos
									colectivos y contratos vigentes que lo afecten, con',
             		'description'=>'Reglamento interior de trabajo es
									el conjunto de normas elaborado por el patrono
									de acuerdo con las leyes, reglamentos, pactos
									colectivos y contratos vigentes que lo afecten, con
									el objeto de precisar y regular las normas a que
									obligadamente se deben sujetar él y sus trabajadores
									con motivo de la ejecución o prestación concreta
									del trabajo.',
																		
               		'comment'=>'Reglamento interior de trabajo'),

		     array( 'number'=>'Articulo 58',
		     		'begin'=>'Todo patrono que ocupe en su
									empresa permanentemente diez o más trabajadores,
									queda obligado a elaborar y poner en vigor su
									respectivo reglamento interior de trabajo.',
             		'description'=>'Todo patrono que ocupe en su
									empresa permanentemente diez o más trabajadores,
									queda obligado a elaborar y poner en vigor su
									respectivo reglamento interior de trabajo.',
																		
               		'comment'=>''),

			 array( 'number'=>'Articulo 60',
			 		'begin'=>'El reglamento interior de Trabajo
									debe comprender las reglas de orden técnico y
									administrativo necesarias para la buena marcha de
									la empresa; las relativas a higiene y seguridad en
									las labores, como indicaciones para evi',
             		'description'=>'El reglamento interior de Trabajo
									debe comprender las reglas de orden técnico y
									administrativo necesarias para la buena marcha de
									la empresa; las relativas a higiene y seguridad en
									las labores, como indicaciones para evitar que se
									realicen los riesgos profesionales e instrucciones
									para prestar los primeros auxilios en caso de
									accidente y, en general, todas aquellas otras que
									se estimen necesarias para la conservación de
									la disciplina y el buen cuido de los bienes de la
									empresa. Además, debe contener:<br>
									<strong>a)</strong> Las horas de entrada y salida de los trabajadores,
									el tiempo destinado para las comidas y el período
									de descanso durante la jornada;<br>
									b) El lugar y el momento en que deben comenzar y
									terminar las jornadas de trabajo;<br>
									c) Los diversos tipos de salarios y las categorías de
									trabajo a que correspondan;<br>
									d) El lugar, día y hora de pago;<br>
									e) Las disposiciones disciplinarias y procedimientos
									para aplicarlas. Se prohíbe descontar suma alguna
									del salario de los trabajadores en concepto de multa.
									La suspensión del trabajo, sin goce de salario, no
									debe decretarse por más de ocho días, ni antes de
									haber oído al interesado y a los compañeros de
									trabajo que éste indique. Tampoco podrá imponerse
									esta sanción, sino en los casos expresamente
									previstos en el respectivo reglamento;<br>
									f) La designación de las personas del establecimiento
									ante quienes deben presentarse las peticiones de
									mejoramiento o reclamos en general y la manera de
									formular unas y otros; y<br>
									g) Las normas especiales pertinentes a las diversas
									clases de labores de acuerdo con la edad y sexo
									de los trabajadores y las normas de conducta,
									presentación y compostura personal que éstos
									deben guardar, según lo requiera la índole del
									trabajo.',
																		
               		'comment'=>''),

			 array( 'number'=>'Articulo 62',
			 		'begin'=>'Se prohíbe a los patronos:
									a) Inducir o exigir a sus trabajadores que compren
									sus artículos de consumo a determinados
									establecimientos o personas;',
             		'description'=>'Se prohíbe a los patronos:<br>
									a) Inducir o exigir a sus trabajadores que compren
									sus artículos de consumo a determinados
									establecimientos o personas;<br>
									b) Exigir o aceptar dinero u otra compensación de
									los trabajadores como gratificación para que se les
									admita en el trabajo o por cualquiera otra concesión
									o privilegio que se relacione con las condiciones de
									trabajo en general.<br>
									c) Obligar o intentar obligar a los trabajadores,
									cualquiera que sea el medio que se adopte, a
									retirarse de los sindicatos o grupos legales a que
									pertenezcan o a ingresar a unos o a otros;
									d) Influir en sus decisiones políticas o convicciones
									religiosas;<br>
									e) Retener por su sola voluntad las herramientas u
									objetos del trabajador sea como garantía o a título
									de indemnización o de cualquier otro no traslativo
									de propiedad;<br>
									f) Hacer o autorizar colectas o suscripciones
									obligatorias entre sus trabajadores, salvo que se
									trate de las impuestas por la ley;
									g) Dirigir o permitir que se dirijan los trabajos en
									estado de embriaguez o bajo la influencia de drogas
									estupefacientes o en cualquier otra condición
									anormal análoga; y<br>
									h) Ejecutar cualquier otro acto que restrinja los
									derechos que el trabajador tiene conforme la ley.',
																		
               		'comment'=>''),

			 array( 'number'=>'Articulo 65',

			 		'begin'=>'Hay suspensión de los contratos
								de trabajo cuando una o las dos partes que
								forman la relación laboral deja o dejan de cumplir
								parcial o totalmente, durante un tiempo, alguna
								de sus respectivas obligaciones fundamentales
								(prestación del trabajo y pago del salario), ',
             		'description'=>'Hay suspensión de los contratos
								de trabajo cuando una o las dos partes que
								forman la relación laboral deja o dejan de cumplir
								parcial o totalmente, durante un tiempo, alguna
								de sus respectivas obligaciones fundamentales
								(prestación del trabajo y pago del salario), sin que
								por ello terminen dichos contratos ni se extingan
								los derechos y obligaciones que emanen de los
								mismos.
								La suspensión puede ser:<br>
								a) Individual parcial, cuando afecta a una relación
								de trabajo y una de las partes deja de cumplir sus
								obligaciones fundamentales;<br>
								b) Individual total, cuando afecta a una relación
								de trabajo y las dos partes dejan de cumplir sus
								obligaciones fundamentales;<br>
								c) Colectiva parcial, cuando por una misma causa
								se afecta la mayoría o la totalidad de las relaciones
								de trabajo vigentes en una empresa o lugar de
								trabajo, y el patrono o sus trabajadores dejan de
								cumplir sus obligaciones fundamentales; y<br>
								d) Colectiva total, cuando por una misma causa se
								afectan la mayoría o la totalidad de las relaciones de
								trabajo vigentes en una empresa o lugar de trabajo,
								y el patrono y sus trabajadores dejan de cumplir sus
								obligaciones fundamentales.',
																		
               		'comment'=>'Variante a: Las Causas, articulo 66<br>
               					Variante b: Causas Articulo 68<br>
               					Variante c: Causas Articulo 70<br>
               					Variante d: Causas Articulo 71'),

			 array( 'number'=>'Articulo 68',
			 		'begin'=>'Son causas de suspensión individual
									total de los contratos de trabajo:
									a) Las licencias o descansos sin goce de salario
									que acuerden patronos y trabajadores;
									b) Los casos previstos en el Artículo 66, inciso b),
									una vez transcurridos los términos en los que el
									patrono está obligado a pagar medio salari',
             		'description'=>'Son causas de suspensión individual
									total de los contratos de trabajo:<br>
									a) Las licencias o descansos sin goce de salario
									que acuerden patronos y trabajadores;
									b) Los casos previstos en el Artículo 66, inciso b),
									una vez transcurridos los términos en los que el
									patrono está obligado a pagar medio salario, como
									se alude en dicho Artículo; y<br>
									c) La prisión provisional, la prisión simple y el arresto
									menor que en contra del trabajador se decreten.
									Esta regla rige en el caso de la prisión provisional,
									siempre que la misma sea seguida de auto que la
									reforme, de sentencia absolutoria o si el trabajador
									obtuviere su excarcelación bajo fianza, únicamente
									cuando el delito por el que se le procesa no se
									suponga cometido contra el patrono, sus parientes,
									sus representantes o los intereses de uno u otros.
									Sin embargo, en este último supuesto, el trabajador
									que obtuviere reforma del auto de prisión provisional
									o sentencia absolutoria, tendrá derecho a que el
									patrono le cubra los salarios correspondientes
									al tiempo que de conformidad con las normas
									procesales respectivas deba durar el proceso,
									salvo el lapso que el trabajador haya prestado sus
									servicios a otro patrono, mientras estuvo en libertad
									durante la tramitación del proceso.
									Es obligación del trabajador dar aviso al patrono de
									la causa que le impide asistir al trabajo, dentro de
									los cinco días siguientes a aquél en que empezó
									su prisión provisional, prisión simple o arresto
									menor y reanudar su trabajo dentro de los dos
									días siguientes a aquél en que obtuvo su libertad.
									Si no lo hace, el patrono puede dar por terminado
									el contrato, sin que ninguna de las partes incurra
									en responsabilidad, salvo que la suspensión deba
									continuar conforme al inciso b) del Artículo 66.
									En estos casos rige la regla del último párrafo del
									Artículo 67.
									A solicitud del trabajador, el alcaide o jefe de la cárcel
									bajo pena de multa de diez a quinientos quetzales,
									que impondrá el respectivo Juez de Trabajo, debe
									extenderle las constancias necesarias para la
									prueba de los extremos a que se refiere el párrafo
									segundo de este Artículo.',										
               		'comment'=>'Causas de suspension de individual total'),

			 array( 'number'=>'Articulo 70',
			 		'begin'=>'Son causas de suspensión colectiva
									parcial de los contratos de trabajo:
									a) La huelga legalmente declarada, cuyas causas
									hayan sido estimadas imputables al patrono por los
									Tribunales de Trabajo y Previsión Social;
									b) Los casos previstos por los Artículos 251 y 252,
									párrafo segundo;',
             		'description'=>'Son causas de suspensión colectiva
									parcial de los contratos de trabajo:
									a) La huelga legalmente declarada, cuyas causas
									hayan sido estimadas imputables al patrono por los
									Tribunales de Trabajo y Previsión Social;
									b) Los casos previstos por los Artículos 251 y 252,
									párrafo segundo;<br>
									c) La falta de materia prima para llevar adelante
									los trabajos, siempre que sea imputable al patrono,
									según declaración de los mismos tribunales; y<br>
									d) Las causas que enumera el Artículo siguiente,
									siempre que los patronos hayan accedido de previo
									o accedan después a pagar a sus trabajadores,
									durante la vigencia de la suspensión, sus salarios
									en parte o en todo.
									En el caso del inciso a) rige la regla del Artículo
									242, párrafo segundo, y en el caso del inciso c)
									los tribunales deben graduar discrecionalmente,
									según el mérito de los autos, la cuantía de los
									salarios caídos que el patrono debe pagar a sus
									trabajadores.',										
               		'comment'=>'Suspensión colectiva Parcial<br>
               					Primer Parrafo: Huelga Legal justa. debe ser declarada por un juez.'),

			 array( 'number'=>'Articulo 71',
			 		'begin'=>'Son causas de suspensión colectiva
							  total de los contratos de trabajo, en que ambas
							  partes quedan relevadas de sus obligaciones
							  fundamentales, sin responsabilidad para ellas:
							  a) La huelga legalmente declarada, cuyas causas
							  no hayan sido estimadas imputables al patrono por
							  los Tribunales de Trabajo y Previsión Social;
							  b) El paro legalmente declarado;
							  c) La falta de materia prima para llevar adelante los
							  trabajos, siempre que no sea imputable al patrono;
							  d) La muerte o la incapacidad del patrono, cuando
							  tenga como consecuencia necesaria, inmediata y
							  directa la suspensión del trabajo; y',
             		'description'=>'Son causas de suspensión colectiva
							  total de los contratos de trabajo, en que ambas
							  partes quedan relevadas de sus obligaciones
							  fundamentales, sin responsabilidad para ellas:<br>
							  a) La huelga legalmente declarada, cuyas causas
							  no hayan sido estimadas imputables al patrono por
							  los Tribunales de Trabajo y Previsión Social;
							  b) El paro legalmente declarado;<br>
						      c) La falta de materia prima para llevar adelante los
							  trabajos, siempre que no sea imputable al patrono;
						      d) La muerte o la incapacidad del patrono, cuando
							  tenga como consecuencia necesaria, inmediata y<br>
						      directa la suspensión del trabajo; y<br>
						      e) Los demás casos constitutivos de fuerza mayor
							  o caso fortuito cuando traigan como consecuencia
							  necesaria, inmediata y directa la suspensión del
							  trabajo.',
																		
               		'comment'=>'Causa de suspensión colectiva total'),

			 array( 'number'=>'Articulo 76',
			 		'begin'	=>'	Hay terminación de los contratos
								de trabajo cuando una o las dos partes que forman
								la relación laboral le ponen fin a ésta, cesándola
								efectivamente, ya sea por voluntad de una de ellas,
								por mutuo consentimiento o por causa imputable a
								la otra, o en que ocurra lo mismo, por disposición
								de la ley, en cuyas circunstancias se extinguen los
								derechos y obligaciones que emanan de dichos
								contratos.',
             		'description'=>'Hay terminación de los contratos
									de trabajo cuando una o las dos partes que forman
									la relación laboral le ponen fin a ésta, cesándola
									efectivamente, ya sea por voluntad de una de ellas,
									por mutuo consentimiento o por causa imputable a
									la otra, o en que ocurra lo mismo, por disposición
									de la ley, en cuyas circunstancias se extinguen los
									derechos y obligaciones que emanan de dichos
									contratos.',
																		
               		'comment'=>'Despido y renuncia'),

			 array( 'number'=>'Articulo 77',
			 		'begin'	=>'	Son causas justas que facultan
								al patrono para dar por terminado el contrato de
								trabajo, sin responsabilidad de su parte:
								a) Cuando el trabajador se conduzca durante sus
								labores en forma abiertamente inmoral o acuda a la
								injuria, a la calumnia o a las vías de hecho contra su
								patrono o los representantes de éste en la dirección
								de las labores;
								b) Cuando el trabajador cometa alguno de los
								actos enumerados en el inciso anterior contra
								algún compañero de trabajo, durante el tiempo
								que se ejecuten las labores, siempre que como
								consecuencia de ello se altere gravemente la
								disciplina o se interrumpan las labores;
								c) Cuando el trabajador, fuera del lugar donde se
								ejecutan las labores y en horas que sean de trabajo,',
             		'description'=>'Son causas justas que facultan
								al patrono para dar por terminado el contrato de
								trabajo, sin responsabilidad de su parte:<br>
								a) Cuando el trabajador se conduzca durante sus
								labores en forma abiertamente inmoral o acuda a la
								injuria, a la calumnia o a las vías de hecho contra su
								patrono o los representantes de éste en la dirección
								de las labores;<br>
								b) Cuando el trabajador cometa alguno de los
								actos enumerados en el inciso anterior contra
								algún compañero de trabajo, durante el tiempo
								que se ejecuten las labores, siempre que como
								consecuencia de ello se altere gravemente la
								disciplina o se interrumpan las labores;<br>
								c) Cuando el trabajador, fuera del lugar donde se
								ejecutan las labores y en horas que sean de trabajo,
								acuda a la injuria, a la calumnia o a las vías de
								hecho contra su patrono o contra los representantes
								de éste en la dirección de las labores, siempre que
								dichos actos no hayan sido provocados y que,
								como consecuencia de ellos, se haga imposible
								la convivencia y armonía para la realización del
								trabajo;<br>
								d) Cuando el trabajador cometa algún delito o falta
								contra la propiedad en perjuicio del patrono, de
								alguno de sus compañeros de trabajo o en perjuicio
								de un tercero en el interior del establecimiento;
								asimismo, cuando cause intencionalmente,
								por descuido o negligencia, daño material en
								las máquinas, herramientas, materias primas,
								productos y demás objetos relacionados, en forma
								inmediata o indudable con el trabajo;<br><br>
								e) Cuando el trabajador revele los secretos a que
								alude el inciso g) del Artículo 63;<br>
								f) Cuando el trabajador deje de asistir al trabajo sin
								permiso del patrono o sin causa justificada, durante
								dos días laborales completos y consecutivos o
								durante seis medios días laborales en un mismo
								mes calendario.
								La justificación de la inasistencia se debe hacer
								al momento de reanudarse las labores, si no se
								hubiere hecho antes;<br>
								g) Cuando el trabajador se niegue de manera
								manifiesta a adoptar las medidas preventivas o a
								seguir los procedimientos indicados para evitar
								accidentes o enfermedades; o cuando el trabajador
								se niegue en igual forma a acatar las normas o
								instrucciones que el patrono o sus representantes en
								la dirección de los trabajos, le indiquen con claridad
								para obtener la mayor eficacia y rendimiento en las
								labores;<br>
								h) Cuando infrinja cualquiera de las prohibiciones
								del Artículo 64, o del Reglamento Interior de Trabajo
								debidamente aprobado, después de que el patrono
								lo aperciba una vez por escrito. No será necesario
								el apercibimiento en el caso de embriaguez cuando,
								como consecuencia de ella, se ponga en peligro la
								vida o la seguridad de las personas o de los bienes
								del patrono;<br>
								i) Cuando el trabajador, al celebrar el contrato
								haya inducido en error al patrono, pretendiendo
								tener cualidades, condiciones o conocimientos
								que evidentemente no posee, o presentándole
								referencias o atestados personales cuya falsedad
								éste luego compruebe, o ejecutando su trabajo en
								forma que demuestre claramente su incapacidad en
								la realización de las labores para las cuales haya
								sido contratado;<br>
								j) Cuando el trabajador sufra la pena de arresto
								mayor o se le imponga prisión correccional por
								sentencia ejecutoriada; y<br>
								k) Cuando el trabajador incurra en cualquier otra
								falta grave a las obligaciones que le imponga el
								contrato.
								Es entendido que siempre que el despido se funde
								en un hecho sancionado también por las leyes
								penales, queda a salvo el derecho del patrono para
								entablar las acciones correspondientes ante las
								autoridades penales comunes.',
																		
               		'comment'=>'Despido directo Justificado'),

			 array( 'number'=>'Articulo 78',
			 		'begin'=>'La terminación del contrato de
								trabajo conforme a una o varías de las causas
								enumeradas que el Artículo anterior, surte efectos
								desde que el patrono lo comunique por escrito al
								trabajador indicándole la causa del despido y éste
								cese efectivamente sus labores, pero el trabajador',
             		'description'=>'La terminación del contrato de
									trabajo conforme a una o varías de las causas
									enumeradas que el Artículo anterior, surte efectos
									desde que el patrono lo comunique por escrito al
									trabajador indicándole la causa del despido y éste
									cese efectivamente sus labores, pero el trabajador
									goza del derecho de emplazar al patrono ante los
									Tribunales de Trabajo y Previsión Social, antes de
									que transcurra el término de prescripción39, con el
									objeto de que pruebe la justa causa en que se fundó
									el despido. Si el patrono no prueba dicha causa,
									debe pagar al trabajador:<br>
									a) Las indemnizaciones que según este Código le
									pueda corresponder; y<br>
									b) A título de daños y perjuicios, los salarios que el
									trabajador ha dejado de percibir desde el momento
									del despido hasta el pago de su indemnización,
									hasta un máximo de doce (12) meses de salario y
									las costas judiciales.',										
               		'comment'=>'Inciso a:indemnización por tiempo servido.'),

			 array( 'number'=>'Articulo 79',
			 		'begin'=>'Son causas justas que facultan al
								trabajador para dar por terminado su contrato de
								trabajo, sin responsabilidad de su parte:
								a) Cuando el patrono no le pague el salario completo
								que le corresponda, en la fecha y lugar convenidos
								o acostumbrados. Quedan a salvo las deducciones
								autorizadas por la ley;
								b) Cuando el patrono incurra durante el trabajo en
								falta de probidad u honradez, o se conduzca en
								forma abiertamente inmoral o acuda a la injuria,',
             		'description'=>'Son causas justas que facultan al
									trabajador para dar por terminado su contrato de
									trabajo, sin responsabilidad de su parte:<br>
									a) Cuando el patrono no le pague el salario completo
									que le corresponda, en la fecha y lugar convenidos
									o acostumbrados. Quedan a salvo las deducciones
									autorizadas por la ley;<br>
									b) Cuando el patrono incurra durante el trabajo en
									falta de probidad u honradez, o se conduzca en
									forma abiertamente inmoral o acuda a la injuria,
									a la calumnia o a las vías de hecho contra el
									trabajador;<br>
									c) Cuando el patrono directamente, uno de sus
									parientes, un dependiente suyo o una de las
									personas que viven en la41 casa del primero,
									cometa con su autorización o tolerancia, alguno de
									los actos enumerados en él inciso anterior contra el
									trabajador;<br>
									d) Cuando el patrono directamente o por medio de
									sus familiares o dependientes, cause maliciosamente
									un perjuicio material en las herramientas o útiles del
									trabajador;<br>
									e) Cuando el patrono o su representante en la
									dirección de las labores acuda a la injuria, a la
									calumnia o a las vías de hecho contra el trabajador
									fuera del lugar donde se ejecutan las labores
									y en horas que no sean de trabajo, siempre que
									dichos actos no hayan sido provocados y que
									como consecuencia de ellos se hagan imposibles
									la convivencia y armonía para el cumplimiento del
									contrato;<br>
									f) Cuando el patrono, un miembro de su familia o su
									representante en la dirección de las labores u otro
									trabajador esté atacado por alguna enfermedad
									contagiosa, siempre que el trabajador deba
									permanecer en contacto inmediato con la persona
									de que se trate;<br>
									g) Cuando exista peligro grave para la seguridad
									o salud del trabajador o de su familia, ya sea por
									carecer de condiciones higiénicas el lugar de
									trabajo, por excesiva insalubridad de la región
									o porque el patrono no cumpla con las medidas
									de prevención y seguridad que las disposiciones
									legales establezcan;<br>
									h) Cuando el patrono comprometa con su
									imprudencia o descuido inexcusable, la seguridad
									del lugar donde se realizan las labores o la de las
									personas que allí se encuentren;
									i) Cuando el patrono viole alguna de las prohibiciones
									contenidas en el Artículo 62;<br>
									j) Cuando el patrono o su representante en la
									dirección de las labores traslade al trabajador a un
									puesto de menor categoría o con menos sueldo o le
									altere fundamental o permanentemente cualquiera
									otra de sus condiciones de trabajo. Sin embargo,
									en el caso de que el trabajador hubiere ascendido
									a un cargo que comprenda funciones diferentes a
									las desempeñadas por el interesado en el cargo
									anterior, el patrono dentro del período de prueba
									puede volverlo a su cargo original, si establece la
									manifiesta incompetencia de éste en el desempeño
									del puesto al que fue promovido. Cuando el ascenso
									o aumento de salario se hiciere en forma temporal,
									en virtud de circunstancias calificadas, el patrono
									tampoco incurre en responsabilidad al volver al
									trabajador a sus condiciones originales; y<br>
									k) Cuando el patrono incurra en cualquiera otra
									falta grave a las obligaciones que le imponga el
									contrato.
									La regla que contiene el párrafo final del Artículo 77
									rige también a favor de los trabajadores.',										
               		'comment'=>'Despido indirecto.'),

			 array( 'number'=>'Articulo 82',
			 		'begin'=>'Si el contrato de trabajo por tiempo
								indeterminado concluye una vez transcurrido el
								período de prueba, por razón de despido injustificado
								del trabajador, o por alguna de las causas previstas
								en el Artículo 79, el patrono debe pagar a éste una
								indemnización por tiempo servido equivalente a un
								mes de salario por cada año de servicio continuos47
								y si los servicios no alcanzan a un año, en forma
								proporcional al plazo trabajado. Para los efectos del
								cómputo de servicios continuos, se debe tomar en
								cuenta la fecha en que se haya iniciado la relación',
             		'description'=>'Si el contrato de trabajo por tiempo
									indeterminado concluye una vez transcurrido el
									período de prueba, por razón de despido injustificado
									del trabajador, o por alguna de las causas previstas
									en el Artículo 79, el patrono debe pagar a éste una
									indemnización por tiempo servido equivalente a un
									mes de salario por cada año de servicio continuos47
									y si los servicios no alcanzan a un año, en forma
									proporcional al plazo trabajado. Para los efectos del
									cómputo de servicios continuos, se debe tomar en
									cuenta la fecha en que se haya iniciado la relación
									de trabajo, cualquiera que ésta sea.
									La indemnización por tiempo servido se rige,
									además, por estas reglas:<br>
									a) Su importe no puede ser objeto de compensación,
									venta o cesión, ni puede ser embargado, salvo en
									los términos del Artículo 97;<br>
									b) Su importe debe calcularse tomando como
									base el promedio de los salarios devengados por
									el trabajador durante los últimos seis meses que
									tengan de vigencia el contrato o el tiempo que haya
									trabajado, si no se ha ajustado dicho término;
									c) La continuidad del trabajo no se interrumpe por
									enfermedad, vacaciones, licencias, huelga legal
									u otras causas análogas que según este Código
									suspenden y no terminan el contrato de trabajo;<br>
									d) Es nula ipso jure la cláusula del contrato que
									tienda a interrumpir la continuidad de los servicios
									prestados o por prestarse;<br>
									e) El patrono que despida a un trabajador por causa
									de enfermedad o invalidez permanente o vejez, no
									está obligado a satisfacer dicha indemnización,
									siempre que el asalariado de que se trate esté
									protegido por los beneficios correlativos del
									Instituto Guatemalteco de Seguridad Social y
									quede devengando, desde el momento mismo de
									la cesación del contrato, una pensión de invalidez,
									enfermedad o vejez, cuyo valor actuarial sea
									equivalente o mayor a la expresada indemnización
									por tiempo servido.
									Si la pensión que cubra el Instituto Guatemalteco
									de Seguridad Social fuere menor, según su valor
									actuarial que conforme la expectativa de vida del
									trabajador, determine dicho Instituto, el patrono
									queda obligado únicamente a cubrirle la diferencia.
									Si no gozare de dicha protección, el patrono queda
									obligado a pagar al trabajador la indemnización por
									tiempo servido que le corresponda.
									El trabajador que por enfermedad o invalidez,
									permanentes o por vejez, se vea imposibilitado de
									continuar en el desempeño de las atribuciones de
									su cargo y por cualquiera de esas circunstancias,
									que debe justificar previamente, se retire, tiene
									derecho a que el patrono le cubra el cincuenta
									por ciento de la indemnización prevista en este
									Artículo, siempre que no goce de los beneficios
									correlativos del Instituto Guatemalteco de Seguridad
									Social, pero si disfrutándolos, éste únicamente
									le reconoce una pensión cuyo valor actuarial sea
									menor que la que le correspondería conforme a la
									regla inmediatamente anterior, de acuerdo con la
									expectativa de vida que para dicho trabajador fije
									el indicado Instituto, el patrono sólo está obligado
									a cubrirle en el acto del retiro, la diferencia que
									resulte para completar tal indemnización. En el caso
									de que la pensión que fije, al trabajador el Instituto
									Guatemalteco de Seguridad Social, sea superior o
									igual a la indemnización indicada en este párrafo,
									según las normas expresadas, el patrono no tiene
									obligación alguna.',										
               		'comment'=>'Indemnización por tiempo servido es equivalente a un mes de salario por cada año trabajado, si el tiempo no alcanza un año sera proporcional al tiempo trabajado.<br>
               			Inciso e:Despido por IVS invalidez, vejez, '),

			 array( 'number'=>'Articulo 83',
			 		'begin'=>'El trabajador que desee dar por
								concluido su contrato por tiempo indeterminado sin
								justa causa o atendiendo únicamente a su propia
								voluntad y una vez que haya transcurrido el período
								de prueba debe dar aviso previo al patrono de
								acuerdo con lo que expresamente se estipule en
								dicho contrato, o en su defecto de conformidad con
								las siguientes reglas:
								a) Antes de ajustar seis meses de servicios',
             		'description'=>'El trabajador que desee dar por
									concluido su contrato por tiempo indeterminado sin
									justa causa o atendiendo únicamente a su propia
									voluntad y una vez que haya transcurrido el período
									de prueba debe dar aviso previo al patrono de
									acuerdo con lo que expresamente se estipule en
									dicho contrato, o en su defecto de conformidad con
									las siguientes reglas:<br>
									a) Antes de ajustar seis meses de servicios
									continuos, con una semana de anticipación por lo
									menos;<br>
									b) Después de seis meses de servicios continuos
									pero menos de un año, con diez, días de anticipación
									por lo menos;<br>
									c) Después de un año de servicios continuos
									pero menos de cinco años, con dos semanas de
									anticipación por lo menos; y<br>
									d) Después de cinco años de servicios continuos,
									con un mes de anticipación por lo menos.
									Dichos avisos se deben dar siempre por escrito,
									pero si el contrato es verbal, el trabajador puede
									darlo en igual forma en caso de que lo haga ante
									dos testigos; no pueden ser compensados pagando
									el trabajador al patrono una cantidad igual al salario
									actual correspondiente a las expresadas plazas,
									salvo que este último lo consienta; y el patrono,
									una vez que el trabajador le haya dado el aviso
									respectivo, puede ordenar a éste que cese en
									su trabajo, sea por haber encontrado sustituto o
									por cualquier otro motivo, sin incurrir por ello en
									responsabilidad.<br>
									Son aplicables al preaviso las reglas de los incisos
									c) y d) del Artículo 82. Igualmente lo es la del inciso
									b) del mismo texto legal, en todos aquellos casos
									en que proceda calcular el importe en dinero del
									plazo respectivo.',										
               		'comment'=>'Renuncia igual a pre-aviso'),

			 array( 'number'=>'Articulo 87',
			 		'begin'=>'A la expiración de todo contrato de
								trabajo, por cualquier causa que éste termine, el
								patrono debe dar al trabajador un documento que
								exprese únicamente:
								a) La fecha de su entrada y de su salida;
								b) La clase de trabajo ejecutado; y
								c) El salario ordinario y extraordinario devengado
								durante el último período del pago.
								Si el trabajador lo desea, el certificado debe
								determinar también:
								a) La manera como trabajó; y
								b) La causa o causas de la terminación del
								contrato.',
             		'description'=>'A la expiración de todo contrato de
									trabajo, por cualquier causa que éste termine, el
									patrono debe dar al trabajador un documento que
									exprese únicamente:<br>
									a) La fecha de su entrada y de su salida;
									b) La clase de trabajo ejecutado; y<br><br>
									c) El salario ordinario y extraordinario devengado
									durante el último período del pago.<br>
									Si el trabajador lo desea, el certificado debe
									determinar también:
									a) La manera como trabajó; y
									b) La causa o causas de la terminación del
									contrato.',										
               		'comment'=>''),

			 array( 'number'=>'Articulo 88',
			 		'begin'=>'Salario o sueldo es la retribución
								que el patrono debe pagar al trabajador en virtud
								del cumplimiento del contrato de trabajo o de la
								relación de trabajo vigente entre ambos.50
								Salvo las excepciones legales, todo servicio
								prestado por un trabajador a su respectivo patrono,
								debe ser remunerado por éste.',
             		'description'=>'Salario o sueldo es la retribución
									que el patrono debe pagar al trabajador en virtud
									del cumplimiento del contrato de trabajo o de la
									relación de trabajo vigente entre ambos.50
									Salvo las excepciones legales, todo servicio
									prestado por un trabajador a su respectivo patrono,
									debe ser remunerado por éste.
									El cálculo de esta remuneración, para el efecto de
									su pago, puede pactarse:<br>
									a) Por unidad de tiempo (por mes, quincena,
									semana, día u hora);<br>
									b) Por unidad de obra (por pieza, tarea, precio
									alzado o a destajo), y<br>
									c) Por participación en las utilidades, ventas o
									cobros que haga el patrono; pero en ningún caso
									el trabajador deberá asumir los riesgos de pérdidas
									que tenga el patrono.',										
               		'comment'=>'Definicion del salario<br>
               					<strong>Tercer Parrafo</strong>Sistema de calculo de salario. el mas utilizado es por unidad de tiempo.'),

			 array( 'number'=>'Articulo 89',
			 		'begin'=>'Para fijar el importe del salario en
									cada clase de trabajo, se deben tomar en cuenta la
									intensidad y calidad del mismo, clima y condiciones
									de vida.
									A trabajo igual, desempeñado en puesto y
									condiciones de eficiencia y antigüedad dentro de
									la misma empresa, también iguales, corresponderá
									salario igual, el que debe comprender los pagos
									que se hagan al trabajador a cambio de su labor',
             		'description'=>'Para fijar el importe del salario en
									cada clase de trabajo, se deben tomar en cuenta la
									intensidad y calidad del mismo, clima y condiciones
									de vida.
									A trabajo igual, desempeñado en puesto y
									condiciones de eficiencia y antigüedad dentro de
									la misma empresa, también iguales, corresponderá
									salario igual, el que debe comprender los pagos
									que se hagan al trabajador a cambio de su labor
									ordinaria.
									En las demandas que entablen las trabajadoras
									relativas a la discriminación salarial por razón de
									sexo, queda el patrono obligado a demostrar que
									el trabajo que realiza la demandante es de inferior
									calidad y valor.',										
               		'comment'=>'D)El otro sistema es el del precio alsado al destajo<br>
               					E) salario en especie articulo 90 del código de trabajo.<br>
               					<strong>Segundo Parrafo:</strong>Principio de igualdad salarial'),

			 array( 'number'=>'Articulo 90',
			 		'begin'=>'El salario debe pagarse
									exclusivamente en moneda de curso legal.
									Se prohíbe pagar el salario, total o parcialmente, en
									mercadería, vales, fichas, cupones o cualquier otro',
             		'description'=>'El salario debe pagarse
									exclusivamente en moneda de curso legal.
									Se prohíbe pagar el salario, total o parcialmente, en
									mercadería, vales, fichas, cupones o cualquier otro
									signo representativo con que se pretenda sustituir
									la moneda. Las sanciones legales se deben aplicar
									en su máximum cuando las órdenes de pago sólo
									sean canjeables por mercaderías en determinados
									establecimientos.<br>
									Es entendido que la prohibición que precede no
									comprende la entrega de vales, fichas u otro medio
									análogo de cómputo del salario, siempre que al
									vencimiento de cada período de pago el patrono
									cambie el equivalente exacto de unos u otras en
									moneda de curso legal.<br><br>
									No obstante las disposiciones anteriores,
									los trabajadores campesinos que laboren en
									explotaciones agrícolas o ganaderas pueden
									percibir el pago de su salario, hasta en un treinta por
									ciento del importe total de éste como máximum, en
									alimentos y demás artículos análogos destinados
									a su consumo personal inmediato o al de sus
									familiares que vivan y dependan económicamente
									de él, siempre que el patrono haga el suministro a
									precio de costo o menos.<br>
									Asimismo, las ventajas económicas, de cualquier
									naturaleza que sean, que se otorguen a los
									trabajadores en general por la prestación de sus
									servicios, salvo pacto en contrario, debe entenderse
									que constituyen el treinta por ciento del importe total
									del salario devengado.',										
               		'comment'=>'Ventajas económicas.'),

			 array( 'number'=>'Articulo 91',
			 		'begin'=>'El monto del salario debe ser
								determinado por patronos y trabajadores, pero no
								puede ser inferior al que se fije como mínimo de
								acuerdo con el capítulo siguiente.',
             		'description'=>'El monto del salario debe ser
								determinado por patronos y trabajadores, pero no
								puede ser inferior al que se fije como mínimo de
								acuerdo con el capítulo siguiente.',										
               		'comment'=>'Obligación del patrono a pagar salario mínimo.'),

			 array( 'number'=>'Articulo 92',
			 		'begin'=>'Patronos y trabajadores deben
									fijar el plazo para el pago del salario, sin que
									dicho plazo pueda ser mayor de una quincena
									para los trabajadores manuales, ni de un mes
									para los trabajadores intelectuales y los servicios
									domésticos.',
             		'description'=>'Patronos y trabajadores deben
									fijar el plazo para el pago del salario, sin que
									dicho plazo pueda ser mayor de una quincena
									para los trabajadores manuales, ni de un mes
									para los trabajadores intelectuales y los servicios
									domésticos.
									Si el salario consiste en participación en las
									utilidades, ventas o cobros que haga el patrono,
									se debe señalar una suma quincenal o mensual
									que ha de recibir el trabajador, la cual debe ser
									proporcionada a las necesidades de éste y el
									monto probable de la participación que le llegue
									a corresponder. La liquidación definitiva se debe
									hacer por lo menos cada año.',										
               		'comment'=>'Periodo de Pago'),

			 array( 'number'=>'Articulo 94',
			 		'begin'=>'El salario debe pagarse directamente
									al trabajador o a la persona de su familia que él
									indique por escrito o en acta levantada por una
									autoridad de trabajo.',
             		'description'=>'El salario debe pagarse directamente
									al trabajador o a la persona de su familia que él
									indique por escrito o en acta levantada por una
									autoridad de trabajo.',										
               		'comment'=>'Obligación de pagar directamente el salario al trabajador o familiar.'),












			
			              	



          ));
    }
}
