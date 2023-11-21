<?php

if (class_exists('Habitante') != true) {
    class Habitante
    {
        protected $habitanteId;
        protected $idVivienda;
        protected $nombre;
        protected $edad;
        protected $genero;
        protected $ocupacion;

        public function __construct($habitanteId = null, $idVivienda = null, $nombre = null, $edad = null, $genero = null, $ocupacion = null)
        {
            $this->habitanteId = $habitanteId;
            $this->idVivienda = $idVivienda;
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->genero = $genero;
            $this->ocupacion = $ocupacion;
        }

        public function getHabitanteId()
        {
            return $this->habitanteId;
        }

        public function setHabitanteId($habitanteId)
        {
            $this->habitanteId = $habitanteId;
            return $this;
        }

        public function getIdVivienda()
        {
            return $this->idVivienda;
        }

        public function setIdVivienda($idVivienda)
        {
            $this->idVivienda = $idVivienda;
            return $this;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
            return $this;
        }

        public function getEdad()
        {
            return $this->edad;
        }

        public function setEdad($edad)
        {
            $this->edad = $edad;
            return $this;
        }

        public function getGenero()
        {
            return $this->genero;
        }

        public function setGenero($genero)
        {
            $this->genero = $genero;
            return $this;
        }

        public function getOcupacion()
        {
            return $this->ocupacion;
        }

        public function setOcupacion($ocupacion)
        {
            $this->ocupacion = $ocupacion;
            return $this;
        }
    }
}


?>