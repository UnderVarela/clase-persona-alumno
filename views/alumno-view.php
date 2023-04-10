<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>Alumnos</title>
</head>
<body>
  <h1 class="title">Usuarios</h1>
  <table style="border-style:solid; border-collapse: collapse">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Edad</th>
      </tr>
    </thead>
    <tbody>
      <td>
        <?=$p->tratamientoPersona('m')?>
        <?=$p->getNombre()?>
      </td>
      <td>
      <?=$p->getApellidos()?>
      </td>
      <td>
        <?=$p->dimeEdad() ?>
      </td>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
          El numero de caracteres de <strong><?=$p->getNombre()?></strong>
          es de <mark><?=Persona::nombreStringLenght($p->getNombre())?></mark>
        </td>
      </tr>
    </tfoot>
  </table>
</body>
</html>