<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JB Rashti</title>

 <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    font-family:  'Lora', serif;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #000;
    border-bottom: 1px solid #ddd;
    padding: 50px;}
.navbar{
    position: absolute; right: 10px;
}

.section{

padding:230px;

    background-size: cover;
    background-position: center;
    flex-grow: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
background-image: url("css/imagenes/carrito.jpg");
display: flex; /* Utiliza flexbox */
flex-direction: column; /* Coloca los divs uno encima del otro */
justify-content: center; /* Centra los divs verticalmente */
 /* Alinea los divs al inicio del contenedor (lado izquierdo) */
height: 100vh; /* Hace que el contenedor ocupe el 100% de la altura de la ventana */
padding-top: 50px;
font-weight: bold;
}
.div1, .div2 {
    padding: 10px;

    margin-bottom: 10px; /* Espacio entre los divs */
  }
  .div1 h1{
    font-size: 1.7em;}

.logo{position: absolute; left: 30px;
}


.hl2 h2{
    font-size: 1.5em;
    
    color: #FFF ;
    margin: 0;
}
.div1 h1{font-size: 4em;}
.menu {
    border: 2px solid #FFF; /* Cambia el grosor y el color del borde */
    padding: 10px; /* Espaciado interno */
    list-style-type: none;
    display: flex;
    gap: 20px;
    
}
.div2 tr{
    font-size: 1.5em;
}

.menu li a {
    text-decoration: none;
    color: #FFF;
    font-weight: 400;
    font-size: 14px
}
.menu a:hover {
    color: #b38b50
}
.hola{
    font-size: 1.8em;
}
        table {
			width:50%;
            border-collapse: collapse;
			font-size:12px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #333;
            color: white;
        }
        button {
            background-color: #FF0080;
            color: white;
            border: none;
            padding: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color:#99004D;
        }
        footer {
    font-family:  'Lora', serif;
    background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
}

    </style>
 
</head>
<body>
 <header>
    <div class="logo">
        <img src="imagenes/Logo de pgian web 1.png" alt="logo" width="82" height="79">
    
    </div >
    <div class="hl2" style="position: absolute;left: 150px;">
        <h2><strong>Accesorios </strong></h2>
    </div>


    <nav class="navbar">
        /<ul class="menu">
            <li><a href="menumujer.php">Inicio</a></li>
            <li><a href="collaresf.php">Collares y gargantillas</a></li>
            <li><a href="pulserasmujer.php">Pulseras</a></li>
            <li><a href="anillosf.php">Anillos</a></li>
            <li><a href="relojes.php">Relojes</a></li>
            <li><a href="aritos.php">Aritos y Argollas</a></li>
            <li><a href="carrito.php">Carrito de compras</a></li>
          
            
        </ul>
    
</nav>
    </header>
    <section class="section">
    
     <br>
  <div class="div2">
       <center><table id="cart-table">
        <thead>
            <tr>
                <th width="36%">Producto</th>
                <th width="22%">Precio</th>
                <th width="19%">Cantidad</th>
                <th width="23%">Acción</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se mostrarán los productos del carrito -->
        </tbody>
    </table><br>

    <h1 class="hola">Total: Lps.<span id="total-price">0</span></h1>
    </center>
    </div>
<center><button id="btnWhatsapp">Realizar Pedido por WhatsApp</button></center>
    <script>
        function loadCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let tableBody = document.querySelector('#cart-table tbody');
            let totalPrice = 0;
            tableBody.innerHTML = ''; // Limpiar la tabla

            cart.forEach((item, index) => {
                let row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.name}</td>
                    <td>Lps.${item.price}</td>
                    <td>${item.quantity}</td>
                    <td><button onclick="removeFromCart(${index})">Eliminar</button></td>
                `;
                tableBody.appendChild(row);

                totalPrice += item.price * item.quantity;
            });

            document.getElementById('total-price').textContent = totalPrice;
        }

        function removeFromCart(index) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.splice(index, 1); // Eliminar el producto del carrito
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart(); // Recargar el carrito
        }

       
    // Enviar el pedido por WhatsApp
        document.getElementById('btnWhatsapp').addEventListener('click', function() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.length === 0) {
                alert("El carrito está vacío.");
                return;
            }
            
            let message = 'Pedido:\n';
            let total = 0;
            cart.forEach(item => {
                message += `${item.quantity} x ${item.name} - Lps.${item.price * item.quantity}\n`;
                total += item.price * item.quantity;
            });
            message += `\nTotal: Lps.${total}`;

            // Número de WhatsApp del vendedor (cambiar este número por el real)
            let phoneNumber = "50488665763";
            let url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(url, '_blank');
        });

        window.onload = loadCart;
    </script>
    </section>
    <footer>
        <p>© 2024 JOYERÍA Y BISUTERÍA RASHTI. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
