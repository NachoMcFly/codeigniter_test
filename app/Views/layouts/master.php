<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <title>CodeIgniter <3</title>
    </head>
  <body>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
          <div class="row">
            <p>Layouts masterrr</p>
            <div class="col-12" aling="center"><br>
              <h1 class="display-3"><b><?= $this->renderSection('header') ?></b></h1>
            </div>
          </div>
        </div>
      </div>

  <div class="container">
    <a href="/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">return main view</a>
      
      <?= $this->renderSection('content') ?>

  </div>


    <?= $this->renderSection('footer') ?>

    <div class="container"><hr>
        <div class="text-right">
        <p class="text-monospace"><h3>probando el footer del layouts:</h3>
          Ignacio Moraga<br>
          Que Me Quedo Lindo</p>
          </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>