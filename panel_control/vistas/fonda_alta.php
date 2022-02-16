<body>
    <div id="fonda" class="container w-75 my-5 rounded shadow">
        <div class="col bg-white p-2 rounded-end">
                <div class="text-end">
                </div>
                <form action="fonda_alta.php" method="POST">
                    <div class="mb4">
                        <br>
                        <input type="number" class="col-sm-2" name="codigo_postal" id="codigo_postal" placeholder="Codigo Postal">
                       </div>
                    <div class="mb4">
                        <br>
                        <input  id="municipio" >
                    </div>
                    <div class="mb4">
                        <br>
                        <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
                    </div>
                    <div class="mb4">
                        <br>
                        <input type="text" class="form-control" placeholder="Ciudad" name="ciudad" id="ciudad">
                    </div>
                   
                    <div>
                        <br>
                       <center> <button type="submit" class="btn btn-info" name="guardar" value="1">Guardar Datos</button>
                        <a href="index.php"class="btn btn-warning">Cancelar</a></center>
                    </div>
                    
                </form>
            </div>
            <!--<script src="js/app.js"></script>-->
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