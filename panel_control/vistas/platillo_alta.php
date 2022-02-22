<body>
    <div id="fonda" class="container w-75 my-5 rounded shadow">
        <div class="col bg-white p-2 rounded-end">
                
                <form action="platillo_alta.php" method="POST">
                    <strong><center>Dar de Alta Nuevo Platillo</center></strong>
                    <br>
                <div class="mb4">
                        <input type="text" class="col-sm-8" name="nombre" id="nombre" placeholder="Nombre del Platillo" required="required">
                    </div>
                    <div class="mb4">
                        <br>
                        
                        <textarea class="col-sm-12" name="descripcion" id="descripcion" placeholder="Descripción" required="required"></textarea>
                        <hr>
                        <textarea class="col-sm-12" name="ingredientes" id="ingredientes" placeholder="ingredientes" required="required"></textarea>
                        <hr>
                        <input type="number" class="col-sm-1" name="costo" id="costo" placeholder="Costo" required="required">
                        <select name="fonda" id="fonda" >
						<option>Selecciona una opción</option>
						<?=$fonda_filas?>
					    </select>    
                    </div>
                    <div>
                        <br>
                       <center> <button type="submit" class="btn btn-info" name="guardar" value="1">Guardar Datos</button>
                        <a href="platillos.php"class="btn btn-warning">Cancelar</a></center>
                    </div>
                    
                </form>
            </div>
            
    </div>
</body>
