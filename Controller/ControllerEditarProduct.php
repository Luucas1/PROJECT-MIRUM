<?php
require_once("../Repository/banco.php");

class editarControllerProduct {

    private $editar;
    private $name;
    private $price;
    private $stored_id;
    private $category_id;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaProduct($id);
        $this->name         =$row['name'];
        $this->price        =$row['price'];
        $this->stored_id   =$row['stored_id'];
        $this->category_id        =$row['category_id'];

    }
    public function editarFormulario($name,$price,$stored_id,$category_id,$id){
        if($this->editar->updateProduct($name,$price,$stored_id,$category_id,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../public/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getname(){
        return $this->name;
    }
    public function getprice(){
        return $this->price;
    }
    public function getstored_id(){
        return $this->stored_id;
    }
    public function getcategory_id(){
        return $this->category_id;
    }
    

}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarControllerProduct($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['name'],$_POST['price'],$_POST['stored_id'],$_POST['category_id'],$_POST['id']);
}
?>
