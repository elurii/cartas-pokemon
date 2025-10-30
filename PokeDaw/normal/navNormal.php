<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="main_navbar">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="visualizar.php" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-file-earmark-post-fill">Cartas pokemon</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="visualizarNormal.php">Lista de cartas</a></li>
                        <li><a class="dropdown-item" href="modificar.php">Modificacion de cartas</a></li>
                    </ul>
                </li>

            </ul> <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-fill"> <?php echo $_SESSION['name']; ?></a></i>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul> </div>
    </div>
</nav>