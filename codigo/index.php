<!--    INDEX / PRINCIPAL   -->

<?php
session_start();
include("header.php");
include("navbar.php");
include("conexion.php");

// echo $_SESSION['usuario'];

?>


<body>

    <main>

        <!--  CAROUSEL -->
        <br>
    <div class="container-fluid fond p-5">
        <div id="carous" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carous" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carous" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carous" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carous" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carous" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"><img src="img/C1.png" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="img/C2.png" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="img/C3.png" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="img/C4.png" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src="img/C5.png" class="d-block w-100" alt="..."></div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carous" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carous" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <br>



        <!--    GALERIA     -->
        <?php
        echo "<div class='container-fluid fond p-3'><h4 class='text-center my-3'>Un vistazo a nuestros libros</h4><div class='row row-cols-2 row-cols-md-3 row-cols-lg-4 d-flex justify-content-center'>";

        for ($i = 1; $i <= 6; $i++) {
            $sql = "SELECT * FROM libros WHERE id_libro = '$i'";
            $res = $con->query($sql);

            while ($libro = $res->fetch_assoc()) {
                echo '<div class="col m-1">
                    <img onclick="displayImg(this)" class="img-gal" src="img-bd/' . $libro['img'] . '" alt=" ' . $libro['titulo'] . '" width="240" height="370">
                </div>';
            }
        }

        echo "</div></div><br>";
        ?>



        <!--    TARJETAS / LO MAS VENDIDO     -->
        <div id="pre" class="container-fluid p-5 fond">
            <div class="row text-center">
                <br>
                <h4> Lo más vendido </h4>
                <div class="col-sm-12 col-md-4">
                    <div class="card mt-2 tarjet">
                        <br>
                        <div class="card-body tarjet">
                            <h5 class="card-title text-center fs-5 fw-bold"> Si, si es contigo</h5>
                            <br>
                            <img src="img/cp.jpg" width="250px" height="250px">
                            <p class="py-3 text"> Edición especial que incluye textos inéditos para mayores de 18 años. Es una novela sobre el primer amor, y todo lo doloroso y maravilloso que eso implica. </p>

                            <a href="#" class="btn btn-primary" id="paq1"> Ver más </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="card mt-2 tarjet">
                        <div class="card-body">
                            <br>
                            <h5 class="card-title text-center fs-5 fw-bold"> Once Minutos </h5>
                            <br>
                            <img src="img/om.jpg" width="250px" height="250px">
                            <p class="py-1 text">Narra la historia de María, quien desde muy pequeña soñaba con viajar, salir de su pueblo y encontrar a su príncipe azul, quien la llevaría a conocer el mundo entero y con quien compartiría sus mejores experiencias. </p>
                            <a href="#" class="btn btn-primary" id="ver2"> Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="card mt-2 tarjet">
                        <div class="card-body">
                            <br>
                            <h5 class="card-title">Diario de Greg </h5>
                            <br>
                            <img src="img/dg.jfif" width="250px" height="250px">
                            <p class="py-1 text"> Greg es el mediano de una familia de tres hermanos, va al instituto y su mayor aspiración es pasar desapercibido frente a profesores y padres y ser el payaso para los compañeros de su curso. </p>
                            <a href="#" class="btn btn-primary" id="ver3"> Comprar </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <!--    TARJETAS / AUDIOLIBROS  -->
        <div id="au" class="container-fluid p-5 fond">
            <div class="row text-center ">
                <br>
                <h4 id="audio-ss"> Audiolibros Recomendados </h4>
                <div class="col-sm-12 col-md-4">
                    <div class="card mt-2 tarjet">
                        <br>
                        <div class="card-body tarjet">
                            <h5 class="card-title text-center fs-5 fw-bold"> Si, si es contigo</h5>
                            <br>
                            <img src="img/cp.jpg" width="250px" height="250px">
                            <p class="py-3 text"> Edición especial que incluye textos inéditos para mayores de 18 años. Es una novela sobre el primer amor, y todo lo doloroso y maravilloso que eso implica. </p>

                            <button class="p-2 btn btn-primary">Ver más</button>
                            <audio id="audio" src="audio/Diablo.mp3"></audio>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="card mt-2 tarjet">
                        <div class="card-body">
                            <br>
                            <h5 class="card-title text-center fs-5 fw-bold"> Once Minutos </h5>
                            <br>
                            <img src="img/om.jpg" width="250px" height="250px">
                            <p class="py-1 text">Narra la historia de María, quien desde muy pequeña soñaba con viajar, salir de su pueblo y encontrar a su príncipe azul, quien la llevaría a conocer el mundo entero y con quien compartiría sus mejores experiencias. </p>
                            <a href="#Registro-ss" class="btn btn-primary"> Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="card mt-2 tarjet">
                        <div class="card-body">
                            <br>
                            <h5 class="card-title">Diario de Greg </h5>
                            <br>
                            <img src="img/dg.jfif" width="250px" height="250px">
                            <p class="py-1 text"> Greg es el mediano de una familia de tres hermanos, va al instituto y su mayor aspiración es pasar desapercibido frente a profesores y padres y ser el payaso para los compañeros de su curso. </p>
                            <a href="#Registro-ss" class="btn btn-primary"> Comprar </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>


        <!--    TARJETAS / AUTORES  -->
        <div id="auto" class="container-fluid p-5 fond">
            <div class="row text-center backNav">
                <div class="col-12">
                    <h4 id="autores-ss"> AUTORES MAS POPULARES </h4>
                </div>
                <div class="col-sm-6 col-md-3 ">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h5 class="card-title"> Diego Bernardini </h5>
                            <div id="estrellas">
                                <img src="img/db.jpg">
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                </svg>
                            </div>

                            <p class="card-text mt-2 text1">Diego Bernardini es un academico, investigador, consultor estrategico, conferencista internacional y divulgador en salud y el bienestar de los adultos y personas mayores.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h5 class="card-title"> Charles Burns </h5>
                            <div id="estrellas">
                                <img src="img/cb.jpg" width="200px" height="200px">
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </div>
                            <p class="card-text mt-2 text1"> Charles Burns (27 de septiembre de 1955, Washington DC) es un autor de cómics norteamericano.Burns es uno de los principales nombres del cómic independiente norteamericano.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h5 class="card-title"> Elena Bazan </h5>
                            <div id="estrellas">
                                <img src="img/eb.jpg">
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                </svg>
                            </div>
                            <p class="card-text mt-2 text1"> Gestora de proyectos editoriales, editora y correctora de estilo mexicana. Licenciada en Letras Iberoamericanas por la Universidad del Claustro de Sor Juana ucsj. </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h5 class="card-title">Pilar Lozano</h5>
                            <div id="estrellas">
                                <img src="img/pl.jpg" width="200px" height="200px">
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                </svg>
                            </div>
                            <p class="card-text mt-2 text1"> es una escritora española de literatura infantil y periodista. Sus libros han sido traducidos a varios idiomas y ha sido galardonada con el Premio Barco de Vapor. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--    MODAL GALERIA   -->
        <div id="modal-gal" class="modal md-gal">
            <span class="close">&times;</span>
            <img class="modal-content md-cont" id="img01">
            <div id="caption"></div>
        </div>

    </main>

    <!--    FOOTER      -->
    <?php
    include("footer.php");
    ?>

    <!--    PHP     -->

    <!--    PHP: MODIFICAR CONTRASENHA -> MODAL  -->
    <?php
    if (isset($_POST['modificar'])) {
        $actual = $_POST['contactual'];
        $nuevo = $_POST['contnueva'];
        $correo = $_SESSION['usuario'];

        $sql1 = "SELECT * FROM usuarios WHERE correo = '$correo'";
        $res1 = $con->query($sql1);

        while ($usuario = $res->fetch_assoc()) {
            $bdcontrasenha = $usuario['contrasenha'];
            if (($bdcontrasenha == $actual) && ($nuevo != $actual) && (!empty($nuevo))) {
                $sql2 = "UPDATE usuarios SET contrasenha = '$nuevo' WHERE correo = '$correo'";
                $res2 = $con->query($sql2);

                
            } else {
                echo "no se pudo";
            }
        }
    }

    ?>



    <!--    SCRIPTS     -->

    <!--    SCRIPT: GALERIA -> MODAL  -->
    <script>
        var modal = document.getElementById("modal-gal");
        var modalimg = document.getElementById("img01");
        var captiontext = document.getElementById("caption");

        function displayImg(elem){       
            modal.style.display = "block";
            modalimg.src = elem.src;
            captiontext.innerHTML = elem.alt;
        }

        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>


</body>

</html>