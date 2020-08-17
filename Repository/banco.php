<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    //Store  
    public function setStore($name,$address){
        $stmt = $this->mysqli->prepare("INSERT INTO store (`name`, `address`) VALUES (?,?)");
        $stmt->bind_param("ss",$name,$address);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }


    public function getstore(){
        $result = $this->mysqli->query("SELECT * FROM store");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deletestore($id){
        if($this->mysqli->query("DELETE FROM `store` WHERE `name` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }

    public function pesquisastore($id){
        $result = $this->mysqli->query("SELECT * FROM store WHERE name='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updatestore($name,$address,$id){
        $stmt = $this->mysqli->prepare("UPDATE `store` SET `name` = ?, `address`=? WHERE `name` = ?");
        $stmt->bind_param("sss",$name,$address,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    //Product
    public function setProduct($name,$price,$stored_id,$category_id){
        $stmt = $this->mysqli->prepare("INSERT INTO product (`name`, `price`,`stored_id`, `category_id`) VALUES (?,?,?,?)");
        $stmt->bind_param("sdii",$name,$price,$stored_id,$category_id);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }


    public function getProduct(){
        $result = $this->mysqli->query("SELECT * FROM product");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteProduct($id){
        if($this->mysqli->query("DELETE FROM `product` WHERE `name` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaProduct($id){
        $result = $this->mysqli->query("SELECT * FROM product WHERE name='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateProduct($name,$price,$stored_id,$category_id,$id){
        $stmt = $this->mysqli->prepare("UPDATE `product` SET `name` = ?, `price`=?, `stored_id`=?, `category_id`=? WHERE `name` = ?");
        $stmt->bind_param("siiis",$name,$price,$stored_id,$category_id,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }



    //Category
    public function setCategory($name){
        $stmt = $this->mysqli->prepare("INSERT INTO category (`name`) VALUES (?)");
        $stmt->bind_param("s",$name);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }


    public function getCategory(){
        $result = $this->mysqli->query("SELECT * FROM category");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteCategory($id){
        if($this->mysqli->query("DELETE FROM `category` WHERE `name` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }

    public function pesquisacategory($id){
        $result = $this->mysqli->query("SELECT * FROM category WHERE name='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updatecategory($name,$id){
        $stmt = $this->mysqli->prepare("UPDATE `category` SET `name` = ? WHERE `name` = ?");
        $stmt->bind_param("ss",$name,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

}
?>
