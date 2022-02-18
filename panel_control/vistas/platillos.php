<body>
<div class="container w-75 my-5 rounded shadow">
        <div class="col bg-white p-2 rounded-end">
              <div class="">
                <a href="platillo_alta.php" class="btn btn-info btn-block">Nuevo Platillo</a>
              </div>
              <br>
<table class="table table-striped" id="platillos">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del Platillo</th>
      <th scope="col">Costo</th>
      <th scope="col">Nombre de la Fonda</th>
      <th scope="col">Ver Detalle</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?=$platillo_fila?>
  </tbody>
</table>
        </div>
      </div>
</body>