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

    public function vratiPredstavePoPretrazi($pretraga, $sort)
    {
        $upit = "SELECT * FROM predstava p join zanr z on p.zanr = z.zanrID WHERE p.zanr = " . $pretraga ." ORDER BY p.cenaKarte " . $sort;

        $rs = $this->mysqli->query($upit);
        $predstave = [];
        while ($red = $rs->fetch_object()) {
            $predstave[] = new Predstava($red->predstavaID,$red->nazivPredstave,$red->komentar,new Zanr($red->zanrID,$red->nazivZanra),$red->cenaKarte);
        }
        return $predstave;
    }

    public function obrisiPredstavu($id)
    {
        return $this->mysqli->query("DELETE FROM predstava WHERE predstavaID = " . $id);
    }

    public function vratiSvePredstave()
    {
        $upit = "SELECT * FROM predstava p join zanr z on p.zanr = z.zanrID";

        $rs = $this->mysqli->query($upit);
        $predstave = [];
        while ($red = $rs->fetch_object()) {
            $predstave[] = new Predstava($red->predstavaID,$red->nazivPredstave,$red->komentar,new Zanr($red->zanrID,$red->nazivZanra),$red->cenaKarte);
        }
        return $predstave;
    }

    public function izmeniPredstavu($predstavaID, $komentar, $cenaKarte)
    {
        return $this->mysqli->query("UPDATE predstava SET komentar = '" . $komentar .  "', cenaKarte = '" .$cenaKarte ."' WHERE predstavaID = '" . $predstavaID."'");
    }
}