<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JB Rashti</title>
<link href="css/compraproductos.css" rel="stylesheet" type="text/css">
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
                <li><a href="carrito.php">Carrito de Compras</a></li>
            </ul>
        </nav>
    </header>

<section class="product-page">
        <div class="product-images">
            <img src="imagenes/cadenadeojopla.jpg" alt="Anillo de compromiso" class="active">
       
        </div>

        <div class="product-details" style=" width: 35%;
            height: 102%">
            <h1>Cadena/Gargantilla de ojo</h1><br>
            <p class="price"><strong>Lps. 380 <span></span></strong></p><br>
            <p class="acerca"><strong>Acerca del producto:</strong></p><br>
            <p><strong>Medidas disponibles para el collar pequeño:</strong> 30cm y 40cm de largo</p><br>
            <p><strong>Medidas disponibles para el collar grande:</strong> 45cm y 50 cm de largo</p><br>
            <h2>Formas de pago:</h2>
            <ul>
                <li>Pago en efectivo 💵</li>
            </ul>
<br>
<button onclick="addToCart('Collar de ojo (plata)', 380, document.getElementById('quantity18').value)" class="wishlist">Añadir al carrito</button> <label for="quantity18">Cantidad: </label>
        <input type="number" id="quantity18" min="1" max="10" value="1"><br>
        <br>
            <a href="collaresf.php" class="wishlist">Volver</a>

            <p class="shipping">*Hacemos envíos a nivel nacional 🚚📦</p>
        </div>
    </section>

    <footer>
        <p>&copy; Joyería y Bisutería Rashti. Todos los derechos reservados.</p>
    </footer>
<script>
        function addToCart(productName, price, quantity) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Verificar si el producto ya está en el carrito
            let productIndex = cart.findIndex(item => item.name === productName);
            if (productIndex > -1) {
                cart[productIndex].quantity = parseInt(cart[productIndex].quantity) + parseInt(quantity);
            } else {
                cart.push({ name: productName, price: price, quantity: quantity });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            alert(`${quantity} x ${productName} añadido(s) al carrito.`);
        }
    </script>
</body>
</html>