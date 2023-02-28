<?= $this->extend('layouts/master') ?>

<?= $this->section('header') ?>
Vista Principal
<?= $this->endSection('header') ?>

<?= $this->section('content') ?>
<br><br>
<h1></h1><br>
    <h1>mensaje de prueba</h1>
<br>
<h3>main view</h3>


<a class="btn btn-warning" href="test">button for test</a><br>
<a class="btn btn-success" href="pokedex">button for pokedex</a>



<?= $this->endSection('content') ?>