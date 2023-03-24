<?php
namespace App\models;

class Category extends BaseModel{
    protected $table = 'categorys';
    public function getAllCategory(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getAllCategoryName(){
        $sql = "SELECT id,name FROM $this->table LIMIT 3";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getAllCategoryNameEnd(){
        $sql = "SELECT id,name FROM $this->table ORDER BY id LIMIT 20 OFFSET 3; ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getAllLimit($index){
        $sql = "SELECT * FROM $this->table LIMIT $index,8";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getLimit(){
        $sql = "SELECT * FROM $this->table LIMIT 3";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getOneCategory($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function addCategory($id, $name){
        $sql = "INSERT INTO $this->table VALUES (? , ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name]);
    }
    public function updateCategory($id, $name){
        $sql = "UPDATE $this->table SET name = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $id]);
    }
    public function deleteCategory($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
    public function countColumn(){
        $sql = "SELECT COUNT(id) AS number FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
