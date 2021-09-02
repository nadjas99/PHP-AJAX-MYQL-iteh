<?php
include "konekcija.php";


$rezervacije = $db->vratiSveRezervacije();
/** @var Rezervacija $rezervacija */
foreach ($rezervacije as $rezervacija){
    ?>
    <option value="<?= $rezervacija->getId() ?>"><?= $rezervacija->getKlijent() ?></option>
<?php
}