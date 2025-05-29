<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
   <div class="row">
        <div class="col-2">
            <button style="background-color:#106cfc; color: white; padding: 10px 20px; border: none; border-radius: 5px;" onclick="history.back()">Volver al inicio</button>
        </div>
        <div class="col-10">
            <form action = "{{route('example.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></input>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Descripcion</span>
                    <textarea class="form-control" id="descripcion" name="descripcion" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="area">Area</label>
                    <select class="form-select" id="area" name="area" aria-label="Default select example">
                        <option selected disabled>Selecciona un departamento...</option>
                        <option value="TI">TI</option>
                        <option value="Contabilidad">Contabilidad</option>
                        <option value="Administracion">Administración</option>
                        <option value="Operacion">Operación</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="estado">Estado</label>
                    <select class="form-select" id="estado" name="estado" aria-label="Selecciona el estado">
                        <option selected disabled>Selecciona un estado...</option>
                        <option value="solicitado">Solicitado</option>
                        <option value="aprobado">Aprobado</option>
                        <option value="rechazado">Rechazado</option>
                    </select>
                </div>  
                <div class="input-group">
                    <span class="input-group-text">Observaciones</span>
                    <textarea class="form-control" id="Observaciones" name="Observaciones" aria-label="With textarea"></textarea>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="activo">¿Activo?</label>
                    <select class="form-select" id="activo" name="activo">
                        <option selected disabled>Selecciona una opción...</option>
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
   </div>
    <div class="row">
    <div class="col">  
      <figure>
      <br>
      <blockquote class="blockquote">
        <p>Mi segundo proyecto de php.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <cite title="Source Title">Copyright de Fer.</cite><br>
      </figcaption>
    </figure>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>