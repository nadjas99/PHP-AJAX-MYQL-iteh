<?php
class Usluga
{
    private $uslugaID;
    private $nazivUsluge;

    /**
     * Zanr constructor.
     * @param $uslugaID
     * @param $nazivUsluge
     */
    public function __construct($uslugaID, $nazivUsluge)
    {
        $this->uslugaID = $uslugaID;
        $this->nazivUsluge = $nazivUsluge;
    }

    /**
     * @return mixed
     */
    public function getNazivUsluge()
    {
        return $this->nazivUsluge;
    }

    /**
     * @return mixed
     */
    public function getUslugaID()
    {
        return $this->uslugaID;
    }

    /**
     * @param mixed $nazivUsluge
     */
    public function setNazivUsluge($nazivUsluge)
    {
        $this->nazivUsluge = $nazivUsluge;
    }

    /**
     * @param mixed $uslugaID
     */
    public function setUslugaID($uslugaID)
    {
        $this->uslugaID = $uslugaID;
    }
}