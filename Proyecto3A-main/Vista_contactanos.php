<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="estilo.css">
  <title>Inicio</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SPS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Inicio.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nosotros.html">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactanos.html">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servicios.html">Servicios</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<br>

  <div class="container">
    <br>
    <div class="row"> 
      <div class="tex-center">
        <h2>
          Ponte en contacto con nosotros llenando nuestro formulario
        </h2> <br>
        <H5>Nuestros clientes han podido comprobar que los servicios de SPS Seguridad Privada sobrepasan las expectativas de ofertado en el mercado.</H4>
      </div> <br> <br>
      


      <BR></BR>
      
      
 <br>
       <form class=" row " method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);    ?>">
      <div class="col-md-7">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Completo"  name="Nombre" required="">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="contacto.empresa.com.mx"  name="Email" required="">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Telefono</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex:55654567" name="Numero" required="">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Empresa</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Grupo Empresarial" name="Empresa" required="">
        </div>
   
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Cuéntenos más acerca de tu interés en nuestros servicios</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="TextArea"></textarea>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-dark" name="Enviar">Enviar</button>
        </div>

      </div>
      <div class="col-md-5">
       hola 
      </div>

    </div>
  </div>


</form   >



  <footer>
    SPS - Todos los derechos reservados. 16/07/2024
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>