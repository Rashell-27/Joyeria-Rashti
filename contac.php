<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Joyería y Bisutería Rashti</title>
<link href="css/sobrenosotros.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div class="logo1">
            <img src="imagenes/Logo de pgian web 1.png" alt="logo" width="82" height="79">
        
        </div>
        <div class="logo2">
        </div>
            
            <nav class="logo">
            
                <ul>
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="Interfaz de ofertas.php">OFERTAS🔥</a></li>
                    <LI><a href="sobrenosotros.php" >SOBRE NOSOTROS</a></LI>
                    <li><a href="contac.php">RESEÑA</a></li>
                    <li><a href="carrito.php">CARRITO DE COMPRAS</a></li>
                </ul>
           
            </nav>
        </header>
    <section class="HOLA">
<form class="form" action="manipulardatos/agregarcontac.php" method="post">
    <p class="title"><strong>Dejanos saber tu opinión acerca de nuestra página</p></strong>
    <p class="message">También puedes contactarnos en nuestras redes sociales que se encuentran en el apartado "Sobre Nosotros". </p>
        <div class="flex">
        <label for="nombre">
            <input required placeholder="" type="text" class="input" name="nombre" id="nombre" required>
            <span>Nombre(s)</span>
        </label>

        <label for="apellido">
            <input required placeholder="" type="text" class="input" name="apellido" id="apellido" required>
            <span>Apellido(s)</span>
        </label>
    </div>  
            
    <label for="email">
        <input required="" placeholder="" type="email" class="input" name="email" id="email">
        <span>Email</span>
    </label> 
        
    <label for="comentario">
        <input required placeholder="" type="text" class="input" name="comentario" id="comentario" required>
        <span>Comentario</span>
    </label>
   <input type="submit" class="submit" value="Enviar Comentario">
   <input type="reset" class="submit" value="Borrar">
</form>
</section>

 </body>
</html>
