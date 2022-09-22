<?php include_once "classes/Employee.class.php"; ?>
<?php include_once "classes/Shape.class.php"; ?>
<?php include_once "classes/Triangle.class.php"; ?>
<?php include_once "classes/Rectangle.class.php"; ?>
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
		<h2>Spring 1 - Tema 4 - Nivell 1</h2>
		<h4>PHP i Objects</h4>
	</header>
	<section>
		<article>

			<h3>Exercici 1</h3>
            <?php
            $employee = new Employee();
            $employee->initialize('Lluís',5000);
            $resposta_1 = $employee->print();
            $employee->initialize('Lluís',7000);
            $resposta_2 = $employee->print(); 
            ?>
            <div class="resposta">
                <table>
                    <tr>
                        <td>Resposta (Lluís, 5000): </td>
                        <td><h4><?php echo $resposta_1; ?></h4></td>
                    </tr>
                    <tr>
                        <td>Resposta (Lluís, 7000): </td>
                        <td><h4><?php echo $resposta_2; ?></h4></td>
                    </tr>
                </table>
            </div>


			<h3>Exercici 2</h3>
            <?php
            $triangle = new Triangle(4,5);
            $rectangle = new Rectangle(4,5);
            $area_triangle = $triangle->area();
            $area_rectangle = $rectangle->area();
            ?>
            <div class="resposta">
            <table>
                    <tr>
                        <td>Resposta Triangle (4, 5): </td>
                        <td><?php echo $area_triangle; ?></td>
                    </tr>
                    <tr>
                        <td>Resposta Rectangle (4, 5): </td>
                        <td><?php echo $area_rectangle; ?></td>
                    </tr>
                </table>
                
            </div>

		</article>
	</section>
	<footer></footer>
	

</main>
</body>

</html>
