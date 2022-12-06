<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de camionetas</title>
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
                
            <p>Modelo: <?=$camioneta[0]->modelo?></p>
            <p>Fecha de compra: <?=$camioneta[0]->fecha_compra ?></p>
            <p>Peso de carga: <?=$camioneta[0]->peso_carga?></p>
            <p>Pais de origen: <?=$camioneta[0]->pais_de_origen?></p>
            <p>Tipo de vehiculo:<?=$camioneta[0]->clase_vehiculo?></p>

        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>