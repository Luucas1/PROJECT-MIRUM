<?php
require_once("../Repository/banco.php");

class editarControllerCategory {

    private $editar;
    private $name;


    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaCategory($id);
        $this->name         =$row['name'];
  
    }
    public function editarFormulario($name,$id){
        if($this->editar->updateCategory($name,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../public/listarcategory.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getname(){
        return $this->name;
    }

}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarControllerCategory($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['name'],$_POST['id']);
}
?>
