<?php
include 'konekcija.php';

$id = strip_tags($_POST['rezervacijaID']);

$obrisano = $db->obrisiRezervaciju($id);

if($obrisano){
    ?>
    <div class="alert alert-success" role="alert">
        Uspešno obrisana rezervacija!
    </div>
    <?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Neuspešno obrisana rezervacija!
    </div>
    <?php
}