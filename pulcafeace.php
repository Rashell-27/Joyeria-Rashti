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
            <img src="imagenes/pulcafeace1.jpg" alt="Anillo de compromiso" width="707" height="523" class="active">
       
        </div>

        <div class="product-details">
            <h1>Par de pulseras</h1><br>
            <p class="price"><strong>Lps. 245 <span></span></strong></p><br>
           
          <p class="acerca"><strong>Acerca del producto:</strong></p><br>
            <p><strong>Medidas disponibles:</strong> 16.5cm, 18cm, 19cm, 20cm y 21cm</p><br>
            
            <p><strong>Colores de perlas disponibles:</strong> Rojo, Azul, Café, Negro, Naranja, Rosa, Verde, Morado, Amarillo y Blanco.</p><br>
          <br>
          <h2>Formas de pago:</h2>
            <ul>
                
                <li>Pago en efectivo 💵</li>
            </ul>
            <button onclick="addToCart('Par de pulseras (oro)', 245, document.getElementById('quantity41').value)" class="wishlist">Añadir al carrito</button> <label for="quantity41">Cantidad: </label>
            <input type="number" id="quantity41" min="1" max="10" value="1"><br>
            <br>
                    <a href="pulserasmujer.php" class="wishlist">Volver</a></button>
    
              
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
