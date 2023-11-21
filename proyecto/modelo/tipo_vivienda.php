<?php

if (class_exists('tipo_vivienda') != true) {
    class tipo_vivienda
    {
        protected $idTipo;
        protected $idVivienda;
        protected $tipo;

        public function __construct($idTipo = null, $idVivienda = null, $tipo = null)
        {
            $this->idTipo = $idTipo;
            $this->idVivienda = $idVivienda;
            $this->tipo = $tipo;
        }

        public function getIdTipo()
        {
            return $this->idTipo;
        }

        public function setIdTipo($idTipo)
        {
            $this->idTipo = $idTipo;
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

        public function getTipo()
        {
            return $this->tipo;
        }

        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
            return $this;
        }
    }
}

?>
