<?php include_once "classes/Account.class.php"; ?>
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
		<h2>Spring 1 - Tema 4 - Nivell 3</h2>
		<h4>PHP i Objects</h4>
	</header>
	<section>
		<article>

			<h3>Exercici 1</h3>
            <?php
            $numCC = 'ES123412312312312';
            $nom = 'Lluís';
            $cognoms = 'Serarols';
            $amount = 1000;
            $account = new Account($numCC,$nom,$cognoms,$amount);
            $error = ''; 
            if (isset($_POST['amount'])){
                if ($_POST['accio']=='ingressar'){
                    $error = $account->deposit($_POST['amount']);
                }
                if ($_POST['accio']=='retirar'){
                    $error = $account->withdraw($_POST['amount']);
                }
                $amount = $account->getAmount();
            }
            ?>
            <div class="resposta">
                    <table>
                        <tr>
                            <td>Num. CC: </td>
                            <td><strong><?php echo $numCC; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Nom: </td>
                            <td><strong><?php echo $nom; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Cognoms: </td>
                            <td><strong><?php echo $cognoms; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Saldo actual: </td>
                            <td><h2><?php echo $amount; ?> &euro;</h2></td>
                        </tr>
                    </table>
                    <?php if ($error!=''){?>
                    <div class="error">
                        <?php echo $error; ?>
                    </div>
                    <?php } ?>
                <form action="index.php" method="POST">
                    <table>
                        <tr>
                            <td>Quantitat: </td>
                            <td><input type="number" min=0 name="amount" value="0"> </td>
                        </tr>
                        <tr>
                            <td>Acció: </td>
                            <td>
                                <select name="accio">
                                    <option value="ingressar">Ingressar</option>
                                    <option value="retirar">Retirar</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Executar"></td>
                        </tr>
                    </table>
                </form>
                   
                
            </div>

		</article>
	</section>
	

</main>
</body>

</html>
