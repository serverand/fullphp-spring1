<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Sprint 1 - Tema 3 - Nivell 2</title>
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
            <?php 
            $valors = array(array(1,2),array(3,2),array(2,2));
            $results = array();
            foreach ($valors AS $valor){
                $result = $valor[0]+$valor[1]; 
                if ($valor[0]==$valor[1]){
                    $result = $result*2;
                }
                array_push($results,$result);
            }
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Valors (<?php echo implode(",",$valors[0]); ?>):</td>
                        <td><?php echo $results[0]; ?></td>
                    </tr>
                    <tr>
                        <td>Valors (<?php echo implode(",",$valors[1]); ?>):</td>
                        <td><?php echo $results[1]; ?></td>
                    </tr>
                    <tr>
                        <td>Valors (<?php echo implode(",",$valors[2]); ?>):</td>
                        <td><?php echo $results[2]; ?></td>
                    </tr>
                    
                </table>
            </div>


			<h3>Exercici 2</h3>
            <?php 
            $valors = array("wxyz","a","ab");
            $results = array();
            foreach ($valors AS $valor){
                $result = $valor;
                if (strlen($valor)>1){
                    $valor = str_split($valor);
                    $first = array_shift($valor);
                    $last = array_pop($valor);
                    $result = $last.(implode("",$valor)).$first;

                }
                array_push($results,$result);
            }
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Valor (<?php echo $valors[0]; ?>):</td>
                        <td><?php echo $results[0]; ?></td>
                    </tr>
                    <tr>
                        <td>Valor (<?php echo $valors[1]; ?>):</td>
                        <td><?php echo $results[1]; ?></td>
                    </tr>
                    <tr>
                        <td>Valor (<?php echo $valors[2]; ?>):</td>
                        <td><?php echo $results[2]; ?></td>
                    </tr>
                    
                </table>
            </div>


		</article>
	</section>
	<footer></footer>
	

</main>
</body>

</html>
