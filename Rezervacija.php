<?php
class Rezervacija
{
    private $id;
    private $Klijent;
    private $Datum;
    private $idUsluge;
    private $Cena;
    

    /**
     * Film constructor.
     * @param $id
     * @param $Klijent
     * @param $Datum
     * @param $idUsluge
     * @param $Cena
     */

    public function __construct($id, $Klijent, $Datum, $idUsluge, $Cena)
    {
        $this->id = $id;
        $this->Klijent = $Klijent;
        $this->Datum = $Datum;
        $this->idUsluge = $idUsluge;
        $this->Cena = $Cena;
    }

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getKlijent(){
		return $this->Klijent;
	}

	public function setKlijent($Klijent){
		$this->Klijent = $Klijent;
	}

	public function getDatum(){
		return $this->Datum;
	}

	public function setDatum($Datum){
		$this->Datum = $Datum;
	}

	public function getidUsluge(){
		return $this->idUsluge;
	}

	public function setidUsluge($idUsluge){
		$this->idUsluge = $idUsluge;
	}

	public function getCena(){
		return $this->Cena;
	}

	public function setCena($Cena){
		$this->Cena = $Cena;
	}
}