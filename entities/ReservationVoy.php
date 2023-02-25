<?php


class ReservationVoy
{
    public $idR;
    public $cin;
    public $idVoy;
    public $valid;
    public $dateReservation;
    public $prix;


    function __construct($cin,$idVoy,$valid,$dateReservation,$prix){
        $this->cin=$cin;
        $this->idVoy=$idVoy;
        $this->valid=$valid;
        $this->dateReservation=$dateReservation;
        $this->prix=$prix;

    }
    public function getIdR()
    {
        return $this->idR;
    }


    public function setIdR($idR)
    {
        $this->idR = $idR;
    }


    public function getCin()
    {
        return $this->cin;
    }


    public function setCin($cin)
    {
        $this->cin = $cin;
    }


    public function getIdVoy()
    {
        return $this->idVoy;
    }


    public function setIdVoy($idVoy)
    {
        $this->idVoy = $idVoy;
    }


    public function getValid()
    {
        return $this->valid;
    }

    public function setValid($valid)
    {
        $this->valid = $valid;
    }


    public function getDateReservation()
    {
        return $this->dateReservation;
    }


    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;
    }


    public function getPrix()
    {
        return $this->prix;
    }


    public function setPrix($prix)
    {
        $this->prix = $prix;
    }


}