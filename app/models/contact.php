<?php
namespace App\models;

class contact extends boostrap{
    protected $table = 'contact';

    public function addContact($name, $email, $problem, $message, $create){
        $sql = "INSERT INTO $this->table VALUES (NULL, '$name', '$email', '$problem', '$message', '$create')";
        $this->setQuery($sql);
        return $this->execute();
    }
}
?>