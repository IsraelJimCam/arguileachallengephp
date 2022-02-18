<body>
    <div class="container w-75 my-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-5 rounded-end">
                
                <h2 class="fw-bold text-center py-3">Bienvenido</h2>
            
                <form action="index.php" method="POST">
                    <div class="mb4">
                        <input type="text" class="form-control"  name="usuario" id="usuario" placeholder="Usuario" required="required">
                    </div>
                    <div class="mb4">
                        <br>
                        <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña" required="required">
                    </div>
                   
                    <div class="d-grid">
                        <br>
                        <button type="submit" class="btn btn-primary btn-block" name="boton" value="1">Iniciar Sesión</button>
                    </div>
                    <div class="my-3">
                        <span>¿No tienes cuenta? <a href="registrate.php">Registrate</a></span><br>
                    </div>
                </form>
                <div class="text-end">
                    <img src="imagenes/logo.png" width="80" alt="80">
                    <br>
                    Cel: 55-24982926
                    <br>
                    App: Fonda Godínez
                </div>
            </div>
        </div>
        
    </div>
</body>