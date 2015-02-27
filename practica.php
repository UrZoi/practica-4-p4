<!DOCTYPE html>
<html>
    <head>
        <title>Tablas</title>
    </head>
    <body>
        <h1>Alumnos</h1>
        <img src="" />
        <?php
            $alumnos = array(
                'opepe',
                'jocscs',
                'bunny',
                
                1,
                4.5
            );
            $alumnos[5] = 'Nuevo';
            $alumnos[]= 'Otro 1';
            $alumnos[] = 'Otro 2';
            echo '<h2>';
            echo $alumnos[7];
            echo '</h2>';
            $alumnos = array(
                /*0*/array(
                    'id' => '1',
                    'autor' => 'Pepe',
                    'contenido' => 'romantica',
                    'fecha' => '26 de febrero',
                    'ritewts' => '3134'
                ),
                /*1*/array(
                    'id' => '2',
                    'autor' => 'zack',
                    'contenido' => 'Musica',
                    'fecha' => '26 de febrero',
                    'ritewts' => '451'
                ),
                /*2*/array(
                    'id' => '3',
                    'autor' => 'carlos',
                    'contenido' => 'poemas',
                    'fecha' => '13 de mayo',
                    'ritewts' => '4741'
                ),
                /*3*/array(
                    'id' => '4',
                    'autor' => 'King',
                    'contenido' => 'terror',
                    'fecha' => '26 de febrero',
                    'ritewts' => '44552'
                ),
                /*4*/array(
                    'id' => '5',
                    'autor' => 'avantasia',
                    'contenido' => 'rock en español',
                    'fecha' => '26 de febrero',
                    'ritewts' => '5345'

                ),
                /*5*/array(
                    'id' => '6',
                    'autor' => 'Manolo',
                    'contenido' => 'Comedia',
                    'fecha' => '26 de febrero',
                    'ritewts' => '5542'

                ),
                /*6*/array(
                    'id' => '7',
                    'autor' => 'el chepe',
                    'contenido' => 'Misterio',
                    'fecha' => '4 de diciembre',
                    'ritewts' => '43245'
                    
                ),
                /*7*/array(
                    'id' => '8',
                    'autor' => 'Anastacia',
                    'contenido' => 'ranchera',
                    'fecha' => '26 de febrero',
                    'ritewts' => '5254'
                )
            );
            echo '<label>'.$alumnos[7]['autor'].'</label>';
            echo '<br><br>';
        ?>
        <br>
        <br>
	<fieldset>
        <table>
            
            <?php foreach ($alumnos as $alumno) { ?>

                <tr>
                 <div>
                 <div>
		<fieldset>
                 <span>
                    <p><?php echo $alumno['id']; ?></p>
                
		  </span>

                    <span>
			<?php echo $alumno['autor']; ?>
		    </span>
                 

                 <span>
                    <p><?php echo $alumno['contenido']; ?></p>
                 </span>

                 <span>
                    <p><?php echo $alumno['fecha']; ?></p>
                 </span>     

                 <span>
                    <s><?php echo $alumno['ritewts']; ?></s>
                 </span>
		  </fieldset>
                   </div>
                   </div>
                  </tr>


            <?php } ?>
        </table>
</fieldset>
    </body>
</html>
