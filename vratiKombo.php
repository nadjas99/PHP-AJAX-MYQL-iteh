<?php
include "konekcija.php";

$usluge = $db->vratiSveUsluge();
/** @var Usluga $usluga */
foreach ($usluge as $usluga){
    ?>
    <option value="<?= $usluga->getUslugaID() ?>"><?= $usluga->getNazivUsluge() ?></option>
<?php
}