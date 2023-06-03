<?php

class NoweAuto {
    protected $model;
    protected $cenaEuro;
    protected $kursEuroPLN;


    public function ObliczCene() {
        return $this->cenaEuro * $this->kursEuroPLN;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getCenaEuro() {
        return $this->cenaEuro;
    }

    public function setCenaEuro($cenaEuro) {
        $this->cenaEuro = $cenaEuro;
    }

    public function getKursEuroPLN() {
        return $this->kursEuroPLN;
    }

    public function setKursEuroPLN($kursEuroPLN) {
        $this->kursEuroPLN = $kursEuroPLN;
    }
}

class AutoZDodatkami extends NoweAuto{
    protected $alarm;
    protected $radio;
    protected $klimatyzacja;


    public function ObliczCene(){
        $cena=parent::ObliczCene();

        $cena+=$this->alarm;
        $cena+=$this->radio;
        $cena+=$this->klimatyzacja;

        return $cena;
    }
    public function setAlarm($alarm){
        $this->alarm=$alarm;
    }
    public function setRadio($radio){
        $this->radio=$radio;
    }
    public function setKlimatyzacja($klimatyzacja){
        $this->klimatyzacja=$klimatyzacja;
    }
    public function getAlarm(){
        return $this->alarm;
    }
    public function getRadio(){
        return $this->radio;
    }    
    public function getKlimatyzacja(){
        return $this->klimatyzacja;
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    protected $procentUbezpieczenia;
    protected $lata;

    public function ObliczCene(){
        $cena=parent::ObliczCene();

        $cena=($this->procentUbezpieczenia*($cena*((100-$this->lata)/100)));

        return $cena;
    }

    public function setProcentUbezpieczenia($procentUbezpieczenia) {
        $this->procentUbezpieczenia = $procentUbezpieczenia;
    }

    public function getProcentUbezpieczenia() {
        return $this->procentUbezpieczenia;
    }

    public function setLata($lata) {
        $this->lata = $lata;
    }

    public function getLata() {
        return $this->lata;
    }
}
