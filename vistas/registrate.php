<body>
    <div class="container w-75 my-5 rounded shadow">
        <div class="col bg-white p-2 rounded-end">
                <div class="text-end">
                   <center><img src="imagenes/logo.png" width="80" alt="80"></center>
                </div>
                <form action="registrate.php" method="POST">
                    <div class="mb4">
                        <br>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Completo">
                    </div>
                    <div class="mb4">
                        <br>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo">
                    </div>
                    <div class="mb4">
                        <br>
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                    </div>
                    <div class="mb4">
                        <br>
                        <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" id="contrasena">
                    </div>
                   
                    <div>
                        <br>
                       <center> <button type="submit" class="btn btn-info" name="guardar" value="1">Guardar Datos</button>
                        <a href="index.php"class="btn btn-warning">Cancelar</a></center>
                    </div>
                    
                </form>
            </div>
    </div>
</body>