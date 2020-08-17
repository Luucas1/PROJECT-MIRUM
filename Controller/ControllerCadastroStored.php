<?php
require_once("../Repository/cadastroUsuario.php");

//  Store
 class cadastroControllerStore{

     private $cadastro;

     public function __construct(){
         $this->cadastro = new Store();
         $this->incluirLoja();
     }

     private function incluirLoja(){
         $this->cadastro->setname($_POST['name']);
         $this->cadastro->setaddress($_POST['address']);
         $result = $this->cadastro->incluir();
        if($result >= 1){
             echo "<script>alert('Registro incluído com sucesso!');document.location='../Public/listarstored.php'</script>";
         }else{
             echo "<script>alert('Erro ao gravar registro!, verifique se o endereço não está duplicado');history.back()</script>";
         }
     }
 }
 new cadastroControllerStore();
