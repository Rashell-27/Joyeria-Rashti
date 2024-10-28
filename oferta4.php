<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="css/compraproductos.css" rel="stylesheet" type="text/css">
</head>
<body>
<header class="header1">
</div>
<div class="logo2" style="position: absolute;left :0px;">
    <h1 style="color:#b38b50;">JOYERIA Y BISUTERÍA RASHTI</h1>
</div>
         
            <nav class="logo1">
        
                <ul>
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="Interfaz de ofertas.php">OFERTAS🔥</a></li>
                    <li><a href="sobrenosotros.php">SOBRE NOSOTROS</a></li>
                    <li><a href="politicasdeprivacidad.php">POLITICAS DE PRIVACIDAD</a></li>
                    <li><a href="ayuda.php">AYUDA</a></li>
                    <li><a href="contac.php">RESEÑA</a></li>
                 
                </ul>
           
            </nav>
            </ul>
        </nav>
    </header>

<section class="product-page">
        <div class="product-images"  style="width: 650px; height: 500px;">
            <img src="imagenes/ofertas/WhatsApp Image 2024-10-21 at 2.17.10 PM (2).jpeg" alt="Anillo de compromiso" width="707" height="523" class="active">
       
        </div>

        <div class="product-details" style="width: 30%; height: auto;">
            <h1>Oferta del 15%</h1><br>
            <p class="price"><strong>Lps. 1,200 - 15% =<br>Lps. 1020 <span></span></strong></p><br>
            
          <p class="acerca"><strong>Acerca del producto:</strong></p><br>
            <p><strong>Tallas disponibles:</strong> 4, 6</p><br>
           
           <br>
          <h2>Formas de pago:</h2>
            <ul>
                <li>Pago en efectivo 💵</li>
            </ul>
<button onclick="addToCart('Anillo de infinito (plata)', 1200, document.getElementById('quantity95').value)" class="wishlist">Añadir al carrito</button> <label for="quantity95">Cantidad: </label>
        <input type="number" id="quantity95" min="1" max="3" value="1"><br>
        <br>
        <button > <a href="https://wa.me/message/CK64WY2BYBR6L1" class="wishlist">Compra Ahora </a>
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