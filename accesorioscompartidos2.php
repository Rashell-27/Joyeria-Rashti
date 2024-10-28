<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Joyeria y Bisuteria Rashti</title>
<link href="css/pulserasmujer.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
        
            <div class="logo">
                <h1 class="hlogo">Accesorios</h1>
            </div>
            <nav class="navbar">
            <ul class="menu">
                <li><a href="menumujer.php">Inicio</a></li>
                <li><a href="collaresf.php">Collares y gargantillas</a></li>
                <li><a href="pulserasmujer.php">Pulseras</a></li>
                <li><a href="anillosf.php">Anillos</a></li>
                <li><a href="relojes.php">Relojes</a></li>
                <li><a href="aritos.php">Aritos y Argollas</a></li>
                <li><a href="accesorioscompartidos.php">Accesorios para compartir</a></li>
                <li><a href="carrito.php">Carrito de Compras</a></li>
                <li><a href="ayudamujer.php">Ayuda</a></li>
            </ul>
        </nav>
    </header>
        <h1>Catálogo de Accesorios compartidos</h1>
        <p><center>¡Descubre nuestras piezas únicas y exclusivas en acessorios compartidos!</center></p>
    
    <h3><center><strong>Pulseras</strong></center></h3>
<section class="catalog">
<div class="product">
            <img src="imagenes/pulserasdemar.jpg" alt="Pulsera de Corazón">
            <h2>Pulseras de mar</h2>
            <p></p>
            <span class="price">Lps.120</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserasdeperlasblancasynegras.jpg" alt="Pulsera de Corazón">
            <h2>Pulseras Blanca y Negra</h2>
            <p></p>
            <span class="price">Lps.110</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserasbrillar.jpg" alt="Pulsera de Corazón">
            <h2>Pulseras Brillantes</h2>
            <p></p>
            <span class="price">Lps.115</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserasamistad4.jpg" alt="Pulsera de Corazón">
            <h2>Pulseras de amistad para 4</h2>
            <p></p>
            <span class="price">Lps.230</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserasstitch.jfif" alt="Pulsera de Corazón">
            <h2>Pulseras de Stitch</h2>
            <p></p>
            <span class="price">Lps.120</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserashellokitty.jpg" alt="Pulsera de Corazón">
            <h2>Pulseras de hello kitty</h2>
            <p></p>
            <span class="price">Lps.125</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserasspiderman.jfif" alt="Pulsera de Corazón">
            <h2>Pulseras de Spiderman</h2>
            <p></p>
            <span class="price">Lps.120</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserasmonsterinc.jpg" alt="Pulsera de Corazón">
            <h2>Pulseras de monster inc</h2>
            <p></p>
            <span class="price">Lps.120</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserasppg.jpg" alt="Pulsera de Corazón">
            <h2>Pulseras de las chicas super poderosas</h2>
            <p></p>
            <span class="price">Lps.170</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserasdehermanas.jpg" alt="Pulsera de Corazón">
            <h2>Pulseras de Hermanas</h2>
            <p></p>
            <span class="price">Lps.120</span>
        </div>
        <div class="product">
            <img src="imagenes/pulseraspikachu.jfif" alt="Pulsera de Corazón">
            <h2>Pulseras pikachu</h2>
            <p></p>
            <span class="price">Lps.130</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserrakingandqueen.jfif" alt="Pulsera de Corazón">
            <h2>Pulseras Queen and King</h2>
            <p></p>
            <span class="price">Lps.135</span>
        </div>
        <div class="product">
            <img src="imagenes/pulseraschicoychica.jfif" alt="Pulsera de Corazón">
            <h2>Pulseras para pareja</h2>
            <p></p>
            <span class="price">Lps.120</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserasositos.jfif" alt="Pulsera de Corazón">
            <h2>Pulseras de Ositos</h2>
            <p></p>
            <span class="price">Lps.130</span>
        </div>
        <div class="product">
            <img src="imagenes/pulserascosa1234.jfif" alt="Pulsera de Corazón">
            <h2>Pulseras de Cosa 1, 2, 3 y 4</h2>
            <p></p>
            <span class="price">Lps.220</span>
        </div>
</section>
<div class="container">
    <div class="selection">
            <button id="option1" class="btn">Página anterior</button>
        </div>
    </div>

    <form id="form1" action="accesorioscompartidos.php" method="post" style="display: none;">
        <input type="hidden" name="selectedOption" value="Opción 1">
        <input type="submit" value="Enviar Opción 1">
    </form>
    <script>
        document.getElementById('option1').addEventListener('click', function() {
            document.getElementById('form1').submit();
        });

            </script>
 <footer> <p>&copy; Joyería y Bisutería Rashti. Todos los derechos reservados.</p></footer>
</body>
</html>
