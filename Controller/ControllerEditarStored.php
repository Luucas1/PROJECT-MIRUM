<?php
require_once("../Repository/banco.php");

class editarControllerStored {

    private $editar;
    private $name;
    private $address;
    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaStore($id);
        $this->name         =$row['name'];
        $this->address        =$row['address'];


    }
    public function editarFormulario($name,$address,$id){
        if($this->editar->updateStore($name,$address,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../public/listarstored.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getname(){
        return $this->name;
    }
    public function getaddress(){
        return $this->address;
    }
    

}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarControllerStored($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['name'],$_POST['address'],$_POST['id']);
}
?>
