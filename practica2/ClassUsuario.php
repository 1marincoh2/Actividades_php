<?php

    class Usuario{

        public $strNombre;
        public $strEmail;
        public $strTipo;
        private $strClave;
        protected $strFechaRegistro;
        static $strEstado = "activo";

        function __construct(string $nombre, string $email, string $tipo ){

            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo = $tipo;
            $this->strClave = rand();
            $this->strFechaRegistro = date('y-m-d H:m:s');

        }//end del contructor

       public function getNombre():string
       {
         return $this->strNombre;

       }

        public function getEmail():string
        {
            return $this->strEmail;

        }
        public function getPerfil()
        {
            echo "Datos del Usuario <br>";
            echo "Nombre: ". $this->strNombre."<br>";
            echo "Email: ". $this->strEmail."<br>";
            echo "Clave: ". $this->strClave."<br>";
            echo "Fecha de Registro: ". $this->strFechaRegistro."<br>";
            echo "Estado: ". self::$strEstado."<br>";

        }
        public  function setCambiarClave(string $pass){

            $this->strClave = $pass;
        }
    }//end class Usuario



?>
