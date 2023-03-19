<?php
namespace App\Models;

class Service extends BaseModel {
    protected $table = 'service';
    public function getAllService(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getAllServiceWhere($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function getAllLimit($index){
        $sql = "SELECT * FROM $this->table LIMIT $index,8";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getAllLimitCateId($id, $index){
        $sql = "SELECT * FROM $this->table WHERE id_cate = $id LIMIT $index,8";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getAllCateId($id){
        $sql = "SELECT * FROM $this->table WHERE id_cate = ?";
        $this->setQuery($sql);
        return $this->loadAllRows([$id]);
    }

    public function getCateId($id){
        $sql = "SELECT * FROM $this->table WHERE id_cate = ?";
        $this->setQuery($sql);
        return $this->loadAllRows([$id]);
    }
    public function getDetailService($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function addService($id, $id_cate, $name,$price, $image, $desc){
        $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $id_cate, $name,$price,  $image, $desc]);
    }
    public function updateService($id, $id_cate, $name, $price, $image, $desc){
            $sql = "UPDATE $this->table SET id_cate = '$id_cate', name = '$name', price = '$price', image = '$image', description = '$desc'  WHERE id = '$id'";
            $this->setQuery($sql);
//            return $sql;
            return $this->execute();
    }
    public function updateServiceNoIm($id, $id_cate, $name, $price, $desc){
        $sql = "UPDATE $this->table SET id_cate = '$id_cate', name = '$name', price = '$price', description = ' $desc'  WHERE id = '$id'";
        $this->setQuery($sql);
//        return $sql;
        return $this->execute();
    }
    public function deleteService($id){
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
    public function countColumn(){
        $sql = "SELECT COUNT(id) AS number FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function countColumnId($id, $column){
        $sql = "SELECT COUNT(id) AS number FROM $this->table WHERE $column = $id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}
?>
