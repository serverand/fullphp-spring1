<?php include_once "classes/PokerDice.class.php"; ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Sprint 1 - Tema 4 - Nivell 1</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<main>
	<header>
		<h2>Spring 1 - Tema 4 - Nivell 2</h2>
		<h4>PHP i Objects</h4>
	</header>
	<section>
		<article>

			<h3>Exercici 1</h3>
            <?php
            $pokerDice = new PokerDice(); 
            $valor_numeric = $pokerDice->throw(); 
            $valor_dau = $pokerDice->shapeName($valor_numeric);
            $valor_numeric_5 = $pokerDice->tirada(); 
            $valor_dau_5 = $pokerDice->getTotalThrows(); 
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Resposta (valor numeric): </td>
                        <td><?php echo $valor_numeric; ?></td>
                    </tr>
                    <tr>
                        <td>Resposta (valor dau): </td>
                        <td><?php echo $valor_dau; ?></td>
                    </tr>
                    <tr>
                        <td>Resposta (valor numeric 5 tirades): </td>
                        <td><?php echo $valor_numeric_5; ?></td>
                    </tr>
                    <tr>
                        <td>Resposta (valor dau 5 tirades): </td>
                        <td><?php echo $valor_dau_5; ?></td>
                    </tr>
                </table>
            </div>

		</article>
	</section>
	

</main>
</body>

</html>
