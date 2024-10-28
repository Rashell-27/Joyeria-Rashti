<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dos divs con enlace</title>
    <style>
        .container {
            display: flex;        /* Flexbox para alinear en línea */
            justify-content: space-between; /* Espaciado entre los divs */
            text-decoration: none; /* Sin subrayado en el enlace */
        }
        .container a {
            width: 45%;           /* El ancho de cada div */
            text-decoration: none; /* Sin subrayado para el enlace */
        }
        .box {
            background-color: lightblue;
            padding: 20px;
            margin: 10px;
            border: 1px solid #ccc;
            text-align: center;    /* Centra el texto en el div */
            display: block;        /* Para que el enlace abarque todo el div */
            color: black;          /* Color del texto */
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="https://ejemplo1.com">
            <div class="box">Div 1</div>
        </a>
        <a href="https://ejemplo2.com">
            <div class="box">Div 2</div>
        </a>
    </div>
</body>
</html>
