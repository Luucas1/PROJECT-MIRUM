<?php
require_once("../Repository/cadastroUsuario.php");

// Category
 class cadastroControllerCategory{

     private $cadastro;

     public function __construct(){
         $this->cadastro = new Category();
         $this->incluirLoja();
     }

     private function incluirLoja(){
         $this->cadastro->setname($_POST['name']);
         $result = $this->cadastro->incluir();
         if($result >= 1){
             echo "<script>alert('Registro incluído com sucesso!');document.location='../Public/listarcategory.php'</script>";
         }else{
             echo "<script>alert('Erro ao gravar registro!, verifique se o Categoria não está duplicada');history.back()</script>";
         }
     }
 }
 new cadastroControllerCategory();
