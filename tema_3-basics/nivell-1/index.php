<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Sprint 1 - Tema 3 - Nivell 1</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<main>
	<header>
		<h2>Spring 1 - Tema 3 - Nivell 1</h2>
		<h4>PHP Funcions i Estructures de control</h4>
	</header>
	<section>
		<article>

			<h3>Exercici 1</h3>
            <?php 
            $integer = 12;
            $double = 45.78;
            $string = "Aquesta variable és un string";
            $boolean = true;
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Integer:</td>
                        <td><?php echo $integer; ?></td>
                    </tr>
                    <tr>
                        <td>Double:</td>
                        <td><?php echo $double; ?></td>
                    </tr>
                    <tr>
                        <td>String:</td>
                        <td><?php echo $string; ?></td>
                    </tr>
                    <tr>
                        <td>Boolean:</td>
                        <td><?php echo $boolean; ?></td>
                    </tr>
                </table>
            </div>


			<h3>Exercici 2</h3>
            <?php 
            $string = "Hello, World!";
            $string_nou = "Aquest és el curs de PHP.";
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Majúscules:</td>
                        <td><?php echo strtoupper($string); ?></td>
                    </tr>
                    <tr>
                        <td>Longitut:</td>
                        <td><?php echo strlen($string); ?></td>
                    </tr>
                    <tr>
                        <td>Ordre invers:</td>
                        <td><?php echo strrev($string); ?></td>
                    </tr>
                    <tr>
                        <td>Concatenació:</td>
                        <td><?php echo $string.' '.$string_nou; ?></td>
                    </tr>
                </table>
            </div>


			<h3>Exercici 3</h3>
            <?php
            define("NOM","Lluís Serarols");
            ?>
            <div class="resposta">
                <h2><?php echo NOM; ?></h2> 
            </div>


			<h3>Exercici 4</h3>
            <?php
            $x = 3;
            $y = 5;
            $n = 3.5;
            $m = 6.5;
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Valor de X:</td>
                        <td><?php echo $x; ?></td>
                    </tr>
                    <tr>
                        <td>Valor de Y:</td>
                        <td><?php echo $y; ?></td>
                    </tr>
                    <tr>
                        <td>Suma (X+Y):</td>
                        <td><?php echo $x+$y; ?></td>
                    </tr>
                    <tr>
                        <td>Resta (X-Y):</td>
                        <td><?php echo $x-$y; ?></td>
                    </tr>
                    <tr>
                        <td>Producte (X*Y):</td>
                        <td><?php echo $x*$y; ?></td>
                    </tr>
                    <tr>
                        <td>Mòdul (X%Y):</td>
                        <td><?php echo $x%$y; ?></td>
                    </tr>
                </table>
                <br> 
                <table>
                    <tr>
                        <td>Valor de N:</td>
                        <td><?php echo $n; ?></td>
                    </tr>
                    <tr>
                        <td>Valor de M:</td>
                        <td><?php echo $m; ?></td>
                    </tr>
                    <tr>
                        <td>Suma (N+M):</td>
                        <td><?php echo $n+$m; ?></td>
                    </tr>
                    <tr>
                        <td>Resta (N-M):</td>
                        <td><?php echo $n-$m; ?></td>
                    </tr>
                    <tr>
                        <td>Producte (N*M):</td>
                        <td><?php echo $n*$m; ?></td>
                    </tr>
                    <tr>
                        <td>Mòdul (N%M):</td>
                        <td><?php echo $n%$m; ?></td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <td>Doble (X,Y,N,M):</td>
                        <td><?php echo (2*$x).', '.(2*$y).', '.(2*$n).', '.(2*$m); ?></td>
                    </tr>
                    <tr>
                        <td>Suma (X,Y,N,M):</td>
                        <td><?php echo $x+$y+$n+$m; ?></td>
                    </tr>
                    <tr>
                        <td>Producte (X,Y,N,M):</td>
                        <td><?php echo $x*$y*$n*$m; ?></td>
                    </tr>
                </table>
                
                 
            </div>

			<h3>Exercici 5</h3>
            <?php 
            $array_5_values = array(3, 12, 8, 25, 16);
            $array_3_values = array(8, 17, 7);
            array_push($array_3_values, 46);
            $array_merge = array_merge($array_5_values,$array_3_values);
            ?>

            <div class="resposta">
                <table>   
                    <tr>
                        <td>Array Merge Length: </td>
                        <td><?php echo count($array_merge); ?></td>
                    </tr>
                    <tr>
                        <td>Array Merge Values: </td>
                        <td><?php echo implode(",", $array_merge); ?></td>
                    </tr>
                </table>
            </div>
		</article>
	</section>
	<footer></footer>
	

</main>
</body>

</html>
