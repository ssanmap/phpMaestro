<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css" />
    
    <title>includes</title>

</head>
<body>
    <?php 
    require_once'includes/cabecera.php';
    ?>
    

<!-- contenido-->
<div class="contenido">
    <h2>contenido de la pagina</h2>

    <aside id="sidebar" class="aside">
        <div id="login">
            <h3>identificate</h3>
            <form action="login.php" method ="POST">
            <label for="email"> email</label>
            <input type="email" name="email"/>

            <label for="password">contraseña</label>
            <input type="password" name="password"/>

            <input type="submit" value="entrar" />
            
            
            </form>
        
        
        </div>
        <div id="register" class="block-aside">
        <h3> registrate</h3>
        <form action="registro.php" method="post">
        
            <label for="nombre"> nombre</label>
            <input type="text" name="nombre"/>

            <label for="apellidos"> apellidos</label>
            <input type="text" name="apellidos"/>

            <label for="email"> email</label>
            <input type="email" name="email"/>

            <label for="password">contraseña</label>
            <input type="password" name="password"/>

            <input type="submit" value="entrar" />
        
        
        
        </form>
        
        
        </div>
        </div>
    </aside>
    <!--caja principal -->
    <div id="principal">
    <h1> ultimas entradas</h1>
    <article class="entrada">
    <h2> titulo de mi entrada </h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quas perferendis 
    magnam quae excepturi veniam, consectetur quia voluptatum dolores eaque? Perspiciatis, dolorum.
     Magni ad consequuntur rerum necessitatibus autem modi alias.</p>
    </article>
    
    <article class="entrada">
    <h2>titulo de mi entrada </h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quas perferendis 
    magnam quae excepturi veniam, consectetur quia voluptatum dolores eaque? Perspiciatis, dolorum.
     Magni ad consequuntur rerum necessitatibus autem modi alias.</p>
    </article>
    
    </div>



<!-- pie de pagina -->
<?php 
    include'includes/footer.php';
    ?>