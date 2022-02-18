<body>
<div class="container w-75 my-5 rounded shadow">
        <div class="col bg-white p-2 rounded-end">
              <div class="">
                <a href="fonda_alta.php" class="btn btn-info btn-block">Nueva Fonda</a>
              </div>
              <br>
<table class="table table-striped" id="fondas">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre de la Fonda</th>
      <th scope="col">Calle</th>
      <th scope="col">Número Exterior</th>
      <th scope="col">Número Interior</th>
      <th scope="col">Municipio y/o Delegación</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Estado</th>
      <th scope="col">País</th>
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