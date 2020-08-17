<?php
require_once("../Repository/banco.php");
class listarControllerProduct{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getProduct();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['name'] ."</th>";
            echo "<td> R$:".$value['price'] ."</td>";
            echo "<td>".$value['stored_id'] ."</td>";
            echo "<td>".$value['category_id'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editarProduct.php?id=".$value['name']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletarProduct.php?id=".$value['name']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

class listarControllerStore{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getstore();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['name'] ."</th>";
            echo "<td>".$value['address'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editarStored.php?id=".$value['name']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletarStored.php?id=".$value['name']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

class listarControllerCategory{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getCategory();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['name'] ."</th>";
            echo "<td><a class='btn btn-warning' href='editarCategory.php?id=".$value['name']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletarCategory.php?id=".$value['name']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

