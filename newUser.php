
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="" method="post">
        Nombre de usuario: <input type="text" name="nombre"/><br>
        Password: <input type="password" name="pass"/><br>
        Email: <input type="email" name="mail"/><br>
        <input type="submit" name="enviar" value="enviar"/>
    </form>
    <?php
        require_once 'bbdd_steam.php';
        if(isset($_POST['enviar'])){
            $nusuario = $_POST['nombre'];
            $contra = $_POST['pass'];
            if(existeUsuario($nusuario) == true){
                echo '<p color="red"> EL NOMBRE DE USUARIO YA EXISTE</p>';
            }else {
                $contra = $_POST['pass'];
                $email = $_POST['mail'];
                
                añadirUsuario($nusuario, $contra, $email);
            } 
        }
    ?>
    <a href="index.php">Inicio</a>
</body>
