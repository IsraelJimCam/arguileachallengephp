<body>
    <div id="fonda" class="container w-75 my-5 rounded shadow">
        <div class="col bg-white p-2 rounded-end">
                
                <form action="fonda_alta.php" method="POST">
                    <strong><center>Dar de Alta Nueva Fonda</center></strong>
                    <br>
                <div class="mb4">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la Fonda" required="required">
                    </div>
                    <div class="mb4">
                        <br>
                        <label><strong>Datos de Dirección</strong></label>
                        <br>
                        <input type="text" class="col-sm-3" name="calle" id="calle" placeholder="Calle" required="required">
                        <input type="number" class="col-sm-1" name="numero_exterior" id="numero_exterior" placeholder="Núm. Ext." required="required">
                        <input type="number" class="col-sm-1" name="numero_interior" id="numero_interior" placeholder="Núm. Int." required="required">
                        <hr>
                        <input type="text" class="col-sm-4" name="colonia" id="colonia" placeholder="Colonia" required="required">
                        <input type="number" class="col-sm-2" name="codigo_postal" id="codigo_postal" placeholder="Código Postal" required="required">
                        <input type="text" class="col-sm-3" name="municipio" id="municipio" placeholder="Municipio y/o Delegación" required="required">
                        <hr>
                        <input type="text" class="col-sm-4" name="ciudad" id="ciudad" placeholder="Ciudad" required="required">
                        <input type="text" class="col-sm-4" name="estado" id="estado" placeholder="Estado" required="required">
                        <input type="text" class="col-sm-3" name="pais" id="pais" placeholder="País" required="required">
                    </div>
                    <div>
                        <br>
                       <center> <button type="submit" class="btn btn-info" name="guardar" value="1">Guardar Datos</button>
                        <a href="fondas.php"class="btn btn-warning">Cancelar</a></center>
                    </div>
                    
                </form>
            </div>
            
    </div>
</body>
<script>
    $('#codigo_postal').click(function(){
        codigo=$('#codigo_postal').val();
        console.log(codigo);
        $.ajax({
            url:'controlador/api.php',
            type:'post',
            data: 'codigo='+codigo,
            dataType: 'json',
            success:function(r)
            {
                    $('#municipio').val(r.municipio);
                    $('#estado').val(r.estado);
                    $('#ciudad').val(r.ciudad);                
            }
       });
    });
</script>