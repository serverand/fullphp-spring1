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
		<h2>Spring 1 - Tema 3 - Nivell 1</h2>
		<h4>PHP Funcions i Estructures de control</h4>
	</header>
	<section>
		<article>

			<h3>Exercici 1</h3>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Resposta (8): </td>
                        <td><?php echo ParellImparell(8); ?></td>
                    </tr>
                    <tr>
                        <td>Resposta (15): </td>
                        <td><?php echo ParellImparell(15); ?></td>
                    </tr>
                </table>
            </div>


			<h3>Exercici 2</h3>
            <div class="resposta">
                <?php Conta10(); ?>
            </div>


			<h3>Exercici 3</h3>
            <div class="resposta">
            <?php Conta(15); ?>
            </div>


			<h3>Exercici 4</h3>
            <div class="resposta">
            <?php Contador(); ?>
            </div>

			<h3>Exercici 5</h3>
            <div class="resposta">
                <?php echo CalculGrau(60); ?>
            </div>

            <h3>Exercici 6</h3>
            <div class="resposta">
                <?php echo isBitten(); ?>
            </div>


		</article>
	</section>
	<footer></footer>
	

</main>
</body>

</html>
