<!--    NAVBAR  -->
<header>
	 <nav class=" backNav   navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="" style="width: 10%;"> BooksShop </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="busquedas.php?categoria='literatura'">Literatura</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="busquedas.php?categoria='Ciencia, historia y sociedad'">Ciencia, historia y sociedad</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="busquedas.php?categoria='Salud y bienestar'">Salud y bienestar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="busquedas.php?categoria='Ocio y libro practico'">Ocio y libro practico</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="busquedas.php?categoria='Comic'">Comic</a></li>
                        </ul>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contacto.php">Contacto</a>
                    </li>
                   
                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cuenta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="modificar-cont.php">Cambiar contraseña</a></li>
                            <li><a class="dropdown-item" href="eliminar-cuenta.php">Eliminar cuenta</a></li>
                            
                            <li><hr class="dropdown-divider"></li>

                            <li><a class="dropdown-item" href="cerrar-sesion.php">Cerrar Sesión</a></li>
                        </ul>
                    </li>

                </ul>

                <form class="d-flex" role="search" action="busquedas.php" method="POST">
                    <input class="form-control me-2" type="search" name="txtbuscar" placeholder="" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="btnbuscar"><img src="img/Lupa.png"></button>
                </form>
            </div>
        </div>
    </nav>

    <!--   CODIGO PHP     -->

 	<?php
	if (isset($_POST['btnbuscar'])) {
        $_SESSION['busqueda'] = $_POST['txtbuscar'];
	}
	?>

</header>