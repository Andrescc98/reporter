<nav class="navbar navbar-expand navbar-light bg-light py-3">
    <a href="/index" class="navbar-brand">Reporter</a>
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user-friends"></i> Personas
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-search"></i> Buscar
                </a>
            </li>
        </ul>
        <!-- DROPDOWN -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle"
                    id="navDropdown" role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    <i class="fas fa-user-circle fa-2x"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navDropdown">
                    <button class="dropdown-item" id="logout">Salir</button>
                </div>
            </li>
        </ul>
    </div>
</nav>