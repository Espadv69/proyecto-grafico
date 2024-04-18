<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficos</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    include "config.php";

        $sql = "SELECT ciudad,count(id) as totalusers FROM `empleados` GROUP BY ciudad ORDER BY ciudad";

        $records = mysqli_query($conn, $sql);

        $data = array();

        while ($row = mysqli_fetch_assoc($records)) {
            $data[] = $row;
        }
        $jsonData = json_encode($data);

    ?>

    

    <textarea name="" id="chartinfo" cols="30" rows="10"><?= $jsonData?></textarea>

    <div class="pdiv" id="ciudadChart"></div>

    <form action="insertar.php" method="post">

    <h1>FORMULARIO</h1>

        <div class="dinput">
            <label>Nombre:</label>
            <input type="text" name="emp_nombre">
        </div>

        <div class="dinput">
            <label>Salario:</label>
            <input type="text" name="salario">
        </div>

        <div class="dinput">
            <label>Genero:</label>
            <input type="text" name="genero">
        </div>

        <div class="dinput">
            <label>Ciudad:</label>
            <input type="text" name="ciudad">
        </div>

        <div class="dinput">
            <label>Email:</label>
            <input type="email" name="email">
        </div>

        <button type="submit" name="enviar">Enviar</button>

    </form>


    <script type="text/javascript" src="http://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript" src="chart.js"></script>


</body>
</html>