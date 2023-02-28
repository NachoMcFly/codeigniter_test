<?= $this->extend('layouts/master') ?>

<?= $this->section('header') ?>
create pokedex
<?= $this->endSection('header') ?>

<?= $this->section('content') ?>
<br><br>
<h1>Formulario</h1><br>

<div>
  <form action="/pokedex/create" method="post" enctype="multipart/form-data"></form>
  <?= csrf_field() ?>

  <input class="form-control" type="text" placeholder="texto 1"><br>
  <input class="form-control" type="text" placeholder="texto 2"><br>
  <input class="form-control" type="text" placeholder="texto 3"><br>
  <input class="btn btn-success" type="submit" name="submit" value="Create news pokemon">
</div><br>

<?= $this->endSection('content') ?>