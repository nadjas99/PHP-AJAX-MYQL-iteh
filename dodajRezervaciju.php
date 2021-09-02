<?php
include 'konekcija.php';

$klijent = strip_tags($_POST['klijent']);
$datum = strip_tags($_POST['datum']);
$usluga =  strip_tags($_POST['usluga']);
$cena = strip_tags($_POST['cena']);


$rezervacija = new Rezervacija(null,$klijent, $cena, new Usluga($usluga,null), $datum);
$sacuvano = $db->dodajRezervaciju($rezervacija);

if($sacuvano){
    echo '<script>console.log("Saved")</script>';
    ?>
    <div class="alert alert-success" role="alert">
        Uspešno dodata rezervacija!
        
    </div>
<?php
}else{
    echo '<script>console.log("Nije sacuvano")</script>';
    ?>
    <div class="alert alert-danger" role="alert">
        Neuspešno dodata rezervacija!
    </div>
<?php
}