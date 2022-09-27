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
            $tirada = array();
            for ($x=1; $x<=5; $x++){
                $num = PokerDice::getNum();
                array_push($tirada, PokerDice::shapeName($num));
            }
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Resposta: </td>
                        <td><?php echo implode(",",$tirada); ?></td>
                    </tr>
                </table>
            </div>

		</article>
	</section>
	

</main>
</body>

</html>
