<?php
include 'konekcija.php';

$rezervacijaID = strip_tags($_POST['rezervacijaID']);
$datum = strip_tags($_POST['datum']);
$cena = strip_tags($_POST['cena']);

$izmenjeno = $db->izmeniRezervaciju($rezervacijaID,$datum,$cena);

if($izmenjeno){
    ?>
    <div class="alert alert-success" role="alert">
        Uspešno izmenjena rezervacija!
    </div>
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Neuspešno izmenjena rezervacija!
    </div>
<?php
}