<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver camionetas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
   
<div class="container">

    <div class="container-fluid">
            <h6 style="color:black;">  
                <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6"> Administra Camionetas </FONT></p>  
            </h6>
          </div>
        </div>
      </nav>

    <div class="container">

    <a class="btn btn-success" href="<?=base_url('index.php/CamionetasC/insertcamionetasadmin/') ?>">Agregar camionetas</a>

        <table class="table table-striped table-bordered">
            <thead>
                <th>Id camioneta</th>
                <th>Modelo</th>
                <th>Peso de carga</th>
                <th>Ver camionetas</th>
            </thead>
            <tbody>
                <?php foreach ($camioneta as $key): ?>
                   <tr>
                       <td><?=$key->idcamioneta?></td>
                       <td><?=$key->modelo?></td>
                       <td><?=$key->peso_carga?></td>
                       <td><a class="btn btn-success" href="<?=base_url('index.php./CamionetasC/detallecamionetaadmin/').$key->idcamioneta?>">Ver detalles</a></td>
                       <td><a class="btn btn-danger" href="<?=base_url('index.php./CamionetasC/borrarcamionetaadmin/').$key->idcamioneta?>">Borrar</a></td>
                   </tr>
                <?php endforeach ?>

            </tbody>
        </table>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
</body>
</html>