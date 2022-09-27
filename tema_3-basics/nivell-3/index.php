<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Sprint 1 - Tema 3 - Nivell 3</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<main>
	<header>
		<h2>Spring 1 - Tema 3 - Nivell 3</h2>
		<h4>PHP Funcions i Estructures de control</h4>
	</header>
	<section>
		<article>

			<h3>Exercici 1</h3>
            <?php 
            $entrada = "Hello world";
            $string = str_replace(" ","",$entrada);
            $result = str_split($string);
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Entrada ("<?php echo $entrada; ?>"):</td>
                        <td><pre><?php echo var_dump($result); ?></pre></td>
                    </tr>
                </table>
            </div>


			<h3>Exercici 2</h3>
            <?php 
            $entrada = "Hello world. My first application";
            $caracter = "a";
            $array = str_split($entrada);
            $count = 0;
            foreach ($array AS $item){
                if ($caracter==$item){
                    $count++;
                }
            }
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Entrada ("<?php echo $entrada; ?>") || Caracter ("<?php echo $caracter; ?>"):</td>
                        <td><?php echo $count; ?></td>
                    </tr>
                </table>
            </div>

            <h3>Exercici 3</h3>
            <?php 
            $array = array (10, 20, 30, 40, 50);
            unset($array[3]);
            $new_array = array_values($array);
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Entrada (10, 20, 30, 40, 50):</td>
                        <td><pre><?php echo var_dump($new_array); ?></pre></td>
                    </tr>
                </table>
            </div>


		</article>
	</section>
	<footer></footer>
	

</main>
</body>

</html>
