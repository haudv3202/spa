<?php
namespace App\models;
class Users extends boostrap {
    protected $table = 'users';
    public function index(){
        $sql="SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function search($value){
        $sql="SELECT * FROM $this->table WHERE (name like '%$value%') OR (sdt like '%$value%') OR (email like '%$value%')";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function signup($name,$password,$sdt,$email){
        $create_date=date('Y-m-d H:i a');
        $update_date=date('Y-m-d H:i a');
        $sql="INSERT INTO $this->table (name,password,sdt,email,role_id) VALUES ('$name','$password','$sdt','$email',1)";
        $this->setQuery($sql);
        return $this->execute();

    }
    public function showUser(){
        $sql="SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addUser($name,$password,$sdt,$email,$image,$role_id){
        $sql="INSERT INTO  $this->table (name, password, sdt, email,image,total_price,role_id,create_date) VALUES('$name','$password','$sdt','$email','$image',0,'$role_id',current_timestamp())";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function deleteUser($id){
        $sql="DELETE FROM $this->table where id ='$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function checkAccount($email, $pass){
        $sql = "SELECT * FROM $this->table WHERE email = '$email' AND password = '$pass'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function updateUser($id,$name,$password,$sdt,$email,$image,$total_price,$role_id,$create_date,$update_date){
//        $create_date=date('Y-m-d H:i a');
//        $update_date=date('Y-m-d H:i a');
        $sql="UPDATE $this->table SET  name='$name',password='$password',sdt='$sdt',email='$email',image='$image',total_price='$total_price',role_id='$role_id',create_date='$create_date',update_date='$update_date' where id = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function showUserUpdate($id){
        $sql="SELECT * FROM $this->table WHERE id='$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function checkEmail($email){
        $sql = "SELECT * FROM $this->table WHERE email = ?";
        $this->setQuery($sql);
        return $this->loadRow([$email]);
    }

}

?>

