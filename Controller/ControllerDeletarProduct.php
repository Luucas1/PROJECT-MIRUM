<?php
require_once("../Repository/banco.php");

class deletaProduct {
    private $deleta;

    public function __construct($id){
        $this->deleta = new Banco();
        if($this->deleta->deleteProduct($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../Public/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
    
}
new deletaProduct($_GET['id']);
?>
