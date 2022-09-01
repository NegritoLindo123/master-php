<?php

    class Categoria{

        //Se asignan los campos correspondientes a la base de datos
        private $id;
        private $nombre;
        private $db;

        public function __construct()
        {
            $this->db = Database::connect();
        }

        //GET Y SET PARA EL ID
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        //GET Y SET PARA EL NOMBRE
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $this->db->real_escape_string($nombre);
        }

        //Metodos para acceder a la base de datos
        public function getAll(){
            
            $categorias = $this->db->query("SELECT * FROM categorias;");
            return $categorias;

        }

    }