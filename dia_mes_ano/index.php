<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DiaMesAno.css">
    <title>Document</title>
</head>
<body>
    <div id="formulario">
        <div id="title-formulario"> 
            <h1>Dia, Mês e Ano</h1>
        </div>
        <div id="campos">
            <form action="DiaMesAno.php" method="POST">
                <input required="required" type="date" name="date">
                <input type="submit" id="botao" value="Acessar">
            </form>
        </div>
    </div>
</body>
</html>