<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="imagenes/logo.jpg" width="50" alt="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-5 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Panel</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Fondas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="fondas.php">Lista de Fondas</a></li>
            <li><a class="dropdown-item" href="fonda_alta.php">Dar de Alta Fonda</a></li>
           </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Platillos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="platillos.php">Lista de Platillos</a></li>
            <li><a class="dropdown-item" href="platillo_alta.php">Dar de Alta Platillos</a></li>
            </ul>
        </li>
      </ul>
      <form class="d-flex">
        <a href="../cerrar_sesion.php" class="btn btn-outline-success">Cerrar Sesion</a>
      </form>
    </div>
  </div>
</nav>