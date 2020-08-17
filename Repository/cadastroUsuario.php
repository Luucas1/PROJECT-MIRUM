<?php
require_once("banco.php");


class Product extends Banco{

        private $id;
        private $name;
        private $price;
        private $stored_id;
        private $category_id;

        public function setId($int){
            $this->id = $int;
        }
        //Metodos Get
        public function getId(){
            return $this->id;
        }

        public function setname($string){
            $this->name = $string;
        }
        //Metodos Get
        public function getname(){
            return $this->name;
        }

        public function setprice($money){
            $this->price = $money;
        }
        //Metodos Get
        public function getprice(){
            return $this->price;
        }

        public function setstored_id($int){
            $this->stored_id = $int;
        }
        //Metodos Get
        public function getstored_id(){
            return $this->stored_id;
        }
        
        public function setcategory_id($int){
            $this->category_id = $int;
        }
        //Metodos Get
        public function getcategory_id(){
            return $this->category_id;
        }

      
    public function incluir(){
        return $this->setProduct($this->getname(),$this->getprice(),$this->getstored_id(),$this->getcategory_id());
    }

}

    class Store extends Banco{

        private $id;
        private $name;
        private $address;

        
        public function setId($int){
            $this->id = $int;
        }
        //Metodos Get
        public function getId(){
            return $this->id;
        }

        public function setname($string){
            $this->name = $string;
        }
        //Metodos Get
        public function getname(){
            return $this->name;
        }

        public function setaddress($string){
            $this->address = $string;
        }
        //Metodos Get
        public function getaddress(){
            return $this->address;
        }

        public function incluir(){
            return $this->setStore($this->getname(),$this->getaddress());
        }

    }

    class Category extends Banco{

        private $id;
        private $name;

        
        public function setId($int){
            $this->id = $int;
        }
        //Metodos Get
        public function getId(){
            return $this->id;
        }

        public function setname($string){
            $this->name = $string;
        }
        //Metodos Get
        public function getname(){
            return $this->name;
        }

        public function incluir(){
            return $this->setCategory($this->getname());
        }
    }
?>
