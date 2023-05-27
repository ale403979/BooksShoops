<!--    PRODUCTO ESPECIFICO     -->
<?php
session_start();
include("header.php");
include("navbar.php");
include("conexion.php");
?>


<body>

    <main>
        <div class="container-fluid">
            <div class="row">

                <?php
                $id = $_GET['id'];

                $sql = "SELECT * FROM libros WHERE id_libro = '$id'";
                $res = $con->query($sql);

                while ($libro = $res->fetch_assoc()) {
                    echo '<div class="col-lg-4 col-sm-12 mb-3">
                        <img class="mt-3 ms-3" src="img-bd/' . $libro['img'] . '" alt="portada ' . $libro['titulo'] . '" width="340" height="520">
                        <div class="row d-flex justify-content-between">
                            <p class="col-3 fst-italic text-decoration-underline fs-5 m-3">' . $libro['categoria'] . '</p>
                            <button class="btn btn-secondary col-3 m-3 me-4">Leer ahora</button>
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <h1 class="fw-bold mt-3">' . $libro['titulo'] . '</h1>
                        <div class="row row-cols-6">
                            <p class="col-6 text-center fs-5 mt-3 mb-5">' . $libro['autor'] . '</p>
                            <p class="col-6 text-center fs-5 mt-3 mb-5">' . $libro['anho'] . '</p>
                        </div>
                        <p class="fs-4 mt-5 pe-5">' . $libro['descripcion'] . '</p>
                    </div>';
                }

                ?>
            </div>
        </div>
    </main>

    <!--    FOOTER      -->
    <?php
    include("footer.php");
    ?>

    <!--    PHP     -->


    <!--    SCRIPTS     -->

</body>

</html>