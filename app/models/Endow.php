<?php
namespace App\models;

class Endow extends boostrap{
    protected $table = 'endow';
    public function addEndow($name, $phone, $create){
        $sql = "INSERT INTO $this->table VALUES (NULL, '$name', '$phone', '$create')";
        $this->setQuery($sql);
        return $this->execute();
    }
}
?>
