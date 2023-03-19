<?php
namespace App\models;

class BlogService extends boostrap {
    protected $table = 'blogsservice';
    public function getPostslimit($total){
        $sql = "SELECT * FROM $this->table ORDER BY create_date DESC LIMIT $total";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>
