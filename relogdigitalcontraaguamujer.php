<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="css/compraproductos.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    
            <div class="logo">
                <h1 class="hlogo">Accesorios </h1>
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
                <li><a href="ayudamujer.php">Ayuda</a></li>
            </ul>
        </nav>
    </header>

<section class="product-page">
        <div class="product-images">
            <img src="imagenes/relogdigitalcontraaguamujer.jpg" width="400" alt="Anillo de compromiso"  class="active">
       
        </div>

        <div class="product-details" style="width: 30%; height: auto;">
            <h1>Reloj digital contra el agua</h1><br>
            <p class="price"><strong>Lps. 1,300 <span></span></strong></p><br>
            
          <p class="acerca"><strong>Acerca del producto:</strong></p><br>
            <p><strong>Tallas disponibles:</strong> 15cm y 17cm</p><br>
           <p><strong>Colores disponibles:</strong> Negro, Azul, Verde, Rosa, Rojo y Blanco.</p><br>
           <br>
          <h2>Formas de pago:</h2>
            <ul>
                <li>Pago en efectivo 💵</li>
            </ul>
<button onclick="addToCart('Reloj contra el agua de mujer (caucho)', 1300, document.getElementById('quantity122').value)" class="wishlist">Añadir al carrito</button> <label for="quantity122">Cantidad: </label>
        <input type="number" id="quantity122" min="1" max="5" value="1"><br>
        <br>
        <button > <a href="https://wa.me/message/CK64WY2BYBR6L1" class="wishlist">Compra Ahora </a>
            <a href="pulserasmujer.html" class="wishlist">Volver</a></button>

      
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