<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pag1">Pag1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pag2">Pag2</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="cotainer-fluid my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center bg-primary">Pag1</h1>
        </div>
    </div>
</div>

<div class="container-fluid bg-warning">
    <div class="row">
        <div class="col-6 d-flex justify-content-around">
            <p class="h2">
                Stai continuando
            </p>
        </div>
        <div class="col-6 d-flex justify-content-around">
            <p class="h2">
                Nella pag1
            </p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>