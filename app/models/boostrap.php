<?php

namespace App\models;

class boostrap extends BaseModel
{
    public static function GetAll(){
        $model = new static;
        $sql = "SELECT * FROM $model->table";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }
    public static function GetAllLimit($index){
        $model = new static;
        $sql = "SELECT * FROM $model->table LIMIT $index,8";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }
    public static function countColumn(){
        $model = new static;
        $sql = "SELECT COUNT(id) AS number FROM $model->table";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }
    public static function countColumnId($id, $column){
        $model = new static;
        $sql = "SELECT COUNT(id) AS number FROM $model->table WHERE $column = $id";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }
    public static function findOne($id,$search = "id"){
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $search = ?";
        $model->setQuery($sql);
        return $model->loadRow([$id]);
    }
    public static function findString($search = "id",$value){
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $search = '$value'";
        $model->setQuery($sql);
        return $model->loadRow();
    }
    public static function findStrings($search = "id",$value,$record = "*"){
        $model = new static;
        $sql = "SELECT $record FROM $model->table WHERE $search = '$value'";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }
    public static function findAllColumn($id, $column){
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $column = ?";
        $model->setQuery($sql);
        return $model->loadAllRows([$id]);
    }
    public static function findAllColumnLimit($id, $index,$column){
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $column = '$id' LIMIT $index,8";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }

    public static function delete($id){
        $model = new static;
        $sql = "DELETE FROM $model->table WHERE id = ?";
        $model->setQuery($sql);
        return $model->execute([$id]);
    }

//    data yêu cầu là key = cột trong bảng value là giá trị muốn update
    public static function updatefind($id, $datas = [],$namekey = "id"){
        $model = new static;
        $sql = "UPDATE $model->table SET  ";
        $numItems = count($datas);
        $i = 0;
        $data = [];
        foreach($datas as $key => $value){
            if(++$i === $numItems) {
                $sql.= "$key = ? ";
                $data[] = "$value";
            }else {
                $sql.= "$key = ? , ";
                $data[] = "$value";
            }

        }
        $data[] = $id;
        $sql .= "WHERE $namekey = ?";
        $model->setQuery($sql);
        return $model->execute($data);
    }

    public static function addItems($datas = []){
        $model = new static;
        $sql = "INSERT INTO $model->table VALUES (";
        $totalItems = count($datas);
        $i = 0;
        $data = [];
        foreach($datas as $key => $value){
            if(++$i === $totalItems) {
                $sql.= "?)";
                $data[] = "$value";
            }else {
                $sql.= "? , ";
                $data[] = "$value";
            }

        }
        $model->setQuery($sql);
        return $model->execute($data);
    }
    public static function sevenDaysAgo($col, $col2){
        $model = new static;
        $sql = "SELECT SUM($col) as sum FROM $model->table WHERE $col2 >= DATE_ADD(CURRENT_DATE(), INTERVAL -7 DAY)";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }
    public static function oneMonth($col, $col2){
        $model = new static;
        $sql = "SELECT SUM($col) as sum FROM $model->table WHERE $col2 >= DATE_ADD(CURRENT_DATE(), INTERVAL -1 MONTH)";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }
    public static function oneYear($col, $col2){
        $model = new static;
        $sql = "SELECT SUM($col) as sum FROM $model->table WHERE $col2 >= DATE_ADD(CURRENT_DATE(), INTERVAL -1 YEAR)";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }
    public static function totalStatistic($col){
        $model = new static;
        $sql = "SELECT SUM($col) as sum FROM `rankmember` WHERE 1";
        $model->setQuery($sql);
        return $model->loadAllRows();
    }

}