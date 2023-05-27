<!--    PRODUCTOS / BUSQUEDA    -->
<?php
session_start();
include("header.php");
include("navbar.php");
include("conexion.php");

function mostrarBusquedas($sql, $con, $buscar){

    $res = $con->query($sql);
    $numrows = $res->num_rows;

    if ($numrows) {

        echo '<h3 class="text-center">Resultados <bold>"' . $buscar . '"</bold></h3>';
        echo "<div class='row row-cols-2 row-cols-md-3 row-cols-lg-4'>";

        while ($libro = $res->fetch_assoc()) {
            echo '<div><a class="col card text-dark bg-light inner-box m-2 texto" href="libro.php?id=' . $libro['id_libro'] . '">
                <img class="card-img-top p-3 imgcard" src="img-bd/' . $libro['img'] . '" alt="portada ' . $libro['titulo'] . '">
                <div class="card-body d-flex align-items-start flex-column bodycard">
                    <h5 class="card-title mb-auto">' . $libro['titulo'] . '</h5>
                    <p class="card-text">' . $libro['autor'] . '</p>
                </div>
            </a></div>';
        }

        echo "</div>";
    } else {
        echo '<h3>No hay resultados para <bold>"' . $buscar . '"</bold></h3>';
    }
}

if (!empty($_SESSION['busqueda'])) {
    $busqueda = $_SESSION['busqueda'];
} else {
    $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : "";
}
?>


<body>

    <main>
        <div class="container-fluid">

            <form class="row" method="POST" action="">
                <input type="text" name="busqueda" placeholder="Buscar..." value="<?php echo $busqueda; ?>">
                <hr>
                <input type="submit" name="btntitulo" value="Libros" class="btn btn-outline-secondary col-6" hidden>
            </form>


        </div>

    </main>

    <!--    PHP     -->

    <!--    BARRA DE BUSQUEDA   -->
    <?php
    if (!empty($_GET['categoria']) && empty($busqueda)) {
        $categoria = $_GET['categoria'];
        $buscar = $categoria;
        $sql = "SELECT * FROM libros WHERE categoria = $categoria";

        mostrarBusquedas($sql, $con, $categoria);
    }

    if (isset($_POST['btntitulo'])) {
        $_SESSION['busqueda'] = "";
        @$busqueda = $_POST['busqueda'];

        if (!empty($busqueda)) {

            $sql = "SELECT * FROM libros WHERE titulo LIKE '%$busqueda%'";

            mostrarBusquedas($sql, $con, $busqueda);
        }
    }

    if (!empty($_SESSION['busqueda'])) {
        $busqueda = $_SESSION['busqueda'];
        $_SESSION['busqueda'] = "";
        $sql = "SELECT * FROM libros WHERE titulo LIKE '%$busqueda%'";

        mostrarBusquedas($sql, $con, $busqueda);
    }

    ?>

    <!--    FOOTER      -->
    <?php
    include("footer.php");
    ?>

    <!--    SCRIPTS     -->

</body>

</html>