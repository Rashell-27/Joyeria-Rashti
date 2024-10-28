<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rashti Store</title>
<link href="css/elecgenero.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
        <h1>¿Qué es lo que buscas?</h1>
        <div class="selection">
            <button id="option1" class="btn">Accesorios Femeninos</button>
            <button id="option2" class="btn">Accesorios Masculinos</button>
        </div>
    </div>

    <form id="form1" action="menumujer.html" method="post" style="display: none;">
        <input type="hidden" name="selectedOption" value="Opción 1">
        <input type="submit" value="Enviar Opción 1">
    </form>

    <form id="form2" action="/ruta_a_formulario2" method="post" style="display: none;">
        <input type="hidden" name="selectedOption" value="Opción 2">
        <input type="submit" value="Enviar Opción 2">
    </form>

    <script>
        document.getElementById('option1').addEventListener('click', function() {
            document.getElementById('form1').submit();
        });

        document.getElementById('option2').addEventListener('click', function() {
            document.getElementById('form2').submit();
        });
    </script>
</body>
</html>
