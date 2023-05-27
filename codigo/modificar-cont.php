<!--    MODIFICAR CONTRASEÑA    -->
<?php
session_start();
include("header.php");
include("conexion.php");
?>


<body class="body-lg-rg">

    <div class="container">
        <div class="pt-5 mt-5 mr-1">
            <div class="formulario">
                <form class="text-center" action="" method="POST">
                    <div class="text-center">
                        <h1 class="text-light">Cambiar contraseña</h1>




                        <div class="mb-3">
                            <label class="text-center text-light" for="contactual">Contraseña actual</label>
                            <input class="resp" type="password" name="contactual">
                        </div>

                        <div class="mb-3">
                            <label class="text-light me-5" for="contnueva">Nueva contraseña</label>
                            <input class="resp mb-3" type="password" name="contnueva">
                        </div>

                        <div class="mb-3">
                            <input class="crear" type="submit" value="cambiar contraseña" name="modificar">
                        </div>

                        <div class="mb-3">
                            <input clas="login" type="submit" value="regresar" name="regresar">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--    PHP     -->

    <?php
    if (isset($_POST['modificar'])) {
        $actual = $_POST['contactual'];
        $nuevo = $_POST['contnueva'];
        $correo = $_SESSION['usuario'];

        $sql1 = "SELECT * FROM usuarios WHERE correo = '$correo'";
        $res1 = $con->query($sql1);

        while ($usuario = $res1 -> fetch_assoc()) {
            $bdcontrasenha = $usuario['contrasenha'];
            if (($bdcontrasenha == $actual) && ($nuevo != $actual) && (!empty($nuevo))) {
                $sql2 = "UPDATE usuarios SET contrasenha = '$nuevo' WHERE correo = '$correo'";
                $res2 = $con->query($sql2);

                header("Location: index.php");
            } else {
                echo "hubo un error, intente de nuevo.";
            }
        }
    }

    if (isset($_POST['regresar'])) {
        header("Location: index.php");
    }
    ?>

    <!--    SCRIPTS     -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

</body>

</html>