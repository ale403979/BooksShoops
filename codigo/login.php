<!--    INICIAR SESION  -->
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


<body class="inicio">

    <div class="container">
        <h1 class="titulo">INICIAR SESION</h1>
        <form action="" method='POST'>

            <div class="form">
                <div class="datos">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name='correo' placeholder="ingrese su email">
                </div>

                <div class="datos">
                    <label for="contrasenha">Contraseña:</label>
                    <input type="password" id="contrasenha" name='contrasenha' placeholder="ingrese su contraseña">
                </div>

                <div class="btn">
                    <input class="login" type="submit" name='iniciar-sesion' value='Iniciar Sesión'>

                    <input class="crear" type="submit" name='ir-registro' value='Crear Cuenta'>
                </div>
            </div>
        </form>
    </div>

    <!--    SCRIPTS      -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

    <!--    PHP     -->

    <?php

    if (isset($_POST['ir-registro'])) {
        header("Location: registro.php");
    }

    if (isset($_POST['iniciar-sesion'])) {
        @$correo = $_POST['correo'];
        @$contrasenha = $_POST['contrasenha'];

        if (!empty($correo) && !empty($contrasenha)) {
            $sql = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasenha='$contrasenha'";
            $res = $con->query($sql);

            $numfilas = mysqli_num_rows($res);

            if ($numfilas != 0) {
                while ($fila = mysqli_fetch_assoc($res)) {
                    $bdcorreo = $fila['correo'];
                    $bdcontrasenha = $fila['contrasenha'];
                }

                if ($correo == $bdcorreo && $contrasenha == $bdcontrasenha) {
                    session_start();
                    $_SESSION['usuario'] = $correo;
                    header("Location: index.php");
                }
            } else {
                echo "Correo y/o contraseña inválido.";
            }
        } else {
            echo "Todos los campos deben ser llenados.";
        }
    }

    ?>


</body>

</html>