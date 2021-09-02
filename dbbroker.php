<?php

class DBBroker
{

    private $mysqli;

    public function __construct(Mysqli $mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function vratiSveUsluge()
    {
        $upit = "SELECT * FROM usluga";

        $rs = $this->mysqli->query($upit);
        $usluge = [];
        while ($red = $rs->fetch_object()) {
            $usluge[] = new Usluga($red->uslugaID,$red->nazivUsluge);
        }
        return $usluge;
    }

    public function dodajRezervaciju(Rezervacija $rezervacija)
    {
        return $this->mysqli->query("INSERT INTO rezervacija VALUES (null,'" . $rezervacija->getKlijent() . "','" . $rezervacija->getCena() ."'," . $rezervacija->getidUsluge()->getUslugaID() . ",'" . 
        $rezervacija->getDatum() ."')");
    }

 

    public function obrisiRezervaciju($id)
    {
        return $this->mysqli->query("DELETE FROM rezervacija WHERE id = '" . $id."'");
    }

    public function vratiSveRezervacije()
    {
        $upit = "SELECT * FROM rezervacija r join usluga u on r.idUsluga = u.uslugaID";

        $rs = $this->mysqli->query($upit);
        $rezervacije = [];
        while ($red = $rs->fetch_object()) {
            $rezervacije[] = new Rezervacija($red->id,$red->Klijent,$red->Cena,new Usluga($red->uslugaID,$red->NazivUsluge),$red->Datum);
        }
        return $rezervacije;
    }

    public function izmeniRezervaciju($rezervacijaID, $datum, $cena)
    {
        return $this->mysqli->query("UPDATE rezervacija SET datum = '" . $datum .  "', cena = '" .$cena ."' WHERE id = '" . $rezervacijaID."'");
    }
}