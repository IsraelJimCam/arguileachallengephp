<body>
<div class="container w-75 my-5 rounded shadow">
        <div class="col bg-white p-2 rounded-end">
              <div class="">
                <a href="fonda_alta.php" class="btn btn-primary btn-block">Nueva Fonda</a>
              </div>
              <br>
<table class="table table-striped" id="fondas">
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
  <?=$fonda_fila?>
  </tbody>
</table>
        </div>
      </div>
</body>