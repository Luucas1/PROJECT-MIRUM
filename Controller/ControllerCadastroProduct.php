<?php
require_once("../Repository/cadastroUsuario.php");
// Product
class cadastroControllerProduct{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Product();
        $this->incluirLoja();
    }

    private function incluirLoja(){
        $this->cadastro->setname($_POST['name']);
        $this->cadastro->setprice($_POST['price']);
        $this->cadastro->setstored_id($_POST['stored_id']);
        $this->cadastro->setcategory_id($_POST['category_id']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../Public/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o Produto não está duplicado');history.back()</script>";
        }
    }
}
new cadastroControllerProduct();
