<!--    CREAR CUENTA    -->
<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link rel="stylesheet" href="style2.css">

    <title>BookShop</title>
</head>


<body class="cuenta">

    <div class="container">
        <h1 class="titulo">CREAR CUENTA</h1>
        <form action="" method="POST">

            <div class="form">
                <div class="datos">
                    <label for="nombre">Nombre(s)</label>
                    <input type="text" name="nombre" placeholder="Nombre(s)">
                </div>

                <div class="datos">
                    <label for="apellido">Apellidos</label>
                    <input type="text" name="apellido" placeholder="Apellidos">
                </div>

                <div class="datos">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" name="correo" placeholder="Correo electrónico">
                </div>

                <div class="datos">
                    <label for="contrasenha">Contraseña</label>
                    <input type="password" name="contrasenha" placeholder="Contraseña">
                </div>

                <div class="btn">
                    <input class="login" type="submit" value="Crear cuenta" name="crear-cuenta">

                    <input class="crear" type="submit" value="Ya tengo una cuenta" name="ir-login">
                </div>

            </div>
        </form>
    </div>


    <!--    PHP     -->

    <?php
    if (isset($_POST['ir-login'])){
        header("Location: login.php");
    }

    if (isset($_POST['crear-cuenta'])) {
        @$nombre = $_POST['nombre'];
        @$apellido = $_POST['apellido'];
        @$correo = $_POST['correo'];
        @$contrasenha = $_POST['contrasenha'];

        if (!empty($nombre) && !empty($apellido) && !empty($correo) && !empty($contrasenha)) {
            $sql = "INSERT INTO usuarios(nombre, apellido, correo, contrasenha) VALUES ('$nombre', '$apellido', '$correo', '$contrasenha')";
            $res = $con->query($sql);

            header("Location: login.php");
        } else {
            echo "Todos los campos deben ser llenados.";
        }
    } else {
        // echo "Todos los campos deben ser llenados.";
    }
    ?>

    <!--    SCRIPTS     -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

</body>

</html>