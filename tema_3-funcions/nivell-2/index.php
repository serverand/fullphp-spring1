<?php include_once "functions.php"; ?>
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
		<h2>Spring 1 - Tema 3 - Nivell 2</h2>
		<h4>PHP Funcions i Estructures de control</h4>
	</header>
	<section>
		<article>

			<h3>Exercici 1</h3>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Resposta (Anys olímpics 1960-2016): </td>
                        <td><?php echo AnysOlimpics(1960,2016); ?></td>
                    </tr>
                </table>
            </div>

            <h3>Exercici 2</h3>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Resposta (2 minuts): </td>
                        <td><?php echo ImportTrucada(2); ?> cèntims.</td>
                    </tr>
                    <tr>
                        <td>Resposta (7 minuts): </td>
                        <td><?php echo ImportTrucada(7); ?> cèntims.</td>
                    </tr>
                </table>
            </div>

            <h3>Exercici 3</h3>
            <?php
            $compra_01 = array('xocolata'=>2,'xiclets'=>1,'caramels'=>1);
            $compra_02 = array('xocolata'=>3,'xiclets'=>4,'caramels'=>10);
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Resposta (2 xocolata, 1 xiclets, 1 caramels): </td>
                        <td><?php echo ImportCompra($compra_01); ?> &euro;</td>
                    </tr>
                    <tr>
                        <td>Resposta (3 xocolata, 4 xiclets, 10 caramels): </td>
                        <td><?php echo ImportCompra($compra_02); ?> &euro;</td>
                    </tr>
                </table>
            </div>


		</article>
	</section>
	<footer></footer>
	

</main>
</body>

</html>
