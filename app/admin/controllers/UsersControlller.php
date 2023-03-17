<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\Models\Service;
use App\Models\Users;
use App\models\detailUser;
use App\Models\Category;
use App\models\rankmember;
use App\models\role;
class UsersControlller extends BaseController{
    protected $user;
    protected $ser;
    protected $category;
    public function __construct()
    {
        $this->user= new Users();
        $this->ser = new Service();
        $this->category = new Category();
    }

    public function search($value){
        $users = $this->user->search($value);
        $ranks = rankmember::GetAll();
        foreach ($users as $value){
            foreach ($ranks as $data){
                if($value->total_price >= $data->total ){
                    $value->rank = $data->name;
                }
            }
        }

        $data = json_encode($users);
        print_r($data);
    }
    public function showUser(){
        $users = $this->user->showUser();
        $ranks = rankmember::GetAll();
        foreach($users as $customer) {
            $rank_name = "vô hạng";
            foreach($ranks as $group) {
                if($customer->total_price >= $group->total) {
                    $rank_name = $group->name;
                }
            }
            $customer->rank = $rank_name;
        }


        $this->render("admin.UserDisplay.manageUser.listUser",compact("users","ranks"));
    }

    public function addUser(){
        $roles = role::GetAll();
        if(isset($_POST["btn-adduser"])){
            $maxsize = 2000000;
            $allowType = ['jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG'];
            $target_dir = './public/upload/avatar/';
            $name = time() .$_FILES['fileUpload']["name"];
            $target_file = $target_dir . $name;
            $err=[];
           if (empty($_POST['username'])) {
                $err["name"] = "Bạn chưa nhập họ tên";
            }
            if (empty($_POST['password'])) {
                $err["password"] = "Bạn chưa nhập mật khẩu";
            }
            if (empty($_POST['sdt'])) {
                $err["sdt"] = "Bạn chưa nhập số điện thoại";
            }
            if (empty($_POST['email'])) {
                $err["email"] = "Bạn chưa nhập Email";
            }

            if (empty($_POST['address'])) {
                $err["address"] = "Bạn chưa nhập địa chỉ";
            }


            if(count($err) > 0){
                redirect('errors', $err, 'add_user' );
            }else {
                if(!($_FILES['fileUpload']['name'] == "")) {
                    if (empty($_FILES['fileUpload']['name'])) {
                        $err[] = "Image không được bỏ trống";
                    }
                    if ($_FILES['fileUpload']['size'] > $maxsize) {
                        $err[] = " Ảnh của bạn có dung lượng quá lớn không thể upload";
                    }
                    if (in_array($target_file, $allowType)) {
                        $err[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
                    }

                    if(count($err) > 0) {
                        redirect('errors', $err, 'add_user' );
                    }else {
                        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
                        $this->user->addUser($_POST['username'],$_POST['password'],$_POST['sdt'],$_POST['email'],$name,$_POST['address'],$_POST['role']);
                        redirect("success","Thêm Thành Công","add_user");
                    }
                }else {
                    $this->user->addUser($_POST['username'],$_POST['password'],$_POST['sdt'],$_POST['email'],"avatar_default.jpg",$_POST['address'],$_POST['role'] );
                    redirect("success","Thêm Thành Công","add_user");
                }
            }



        }
        $this->render("users.add",compact('roles'));
    }

    public function deleteUser($id){
        if(isset($id)){
            $this->user->deleteUser($id);
            redirect("success","Xóa Thành Công","user");
        }
    }

    public function updateUser($id){
        $showUpdate= $this->user->showUserUpdate($id);
        if(isset($_POST["btn-updateuser"])){
             $err=[];
           if (empty($_POST['username'])) {
                $err["name"] = "Bạn chưa nhập Name";
            }
            if (empty($_POST['password'])) {
                $err["password"] = "Bạn chưa nhập Password";
            }
            if (empty($_POST['email'])) {
                $err["sdt"] = "Bạn chưa nhập sdt";
            }
            if (empty($_POST['email'])) {
                $err["email"] = "Bạn chưa nhập Email";
            }
            if (empty($_POST['total_price'])) {
                $err["total_price"] = "Bạn chưa nhập total_price";
            }
            if (empty($_POST['create_date'])) {
                $err["create_date	"] = "Bạn chưa nhập create_date	";
            }
            if (empty($_POST['update_date'])) {
                $err["update_date"] = "Bạn chưa nhập update_date";
            }
            if (empty($_FILES['image']['name'])) {
                $err[] = "Image không được bỏ trống";
            }
            $maxsize = 2000000;
            $allowType = ['jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF'];
            $target_dir = './public/upload/';
            $target_file = $target_dir . basename($_FILES['image']["name"]);
            if ($_FILES['image']['size'] > $maxsize) {
                $err[] = " Ảnh của bạn có dung lượng quá lớn không thể upload";
            }
            if (in_array($target_file, $allowType)) {
                $err[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
            }else{
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                $this->user->updateUser($id,$_POST['username'],$_POST['password'],$_POST['sdt'],$_POST['email'],$_POST['image'],$_POST['total_price'],1,$_POST['create_date'],$_POST['update_date']);
                redirect("success","Cập Nhật Thành Công","user");
            }

        }
        $this->render('users.updateusers',compact('showUpdate'));
    }
// dịch vụ sử dụng
    public function detailUser(){
        $id = $_GET['id'];
        $detailUser = detailUser::findAllColumn($id,"id_user");
        $user = Users::findOne($id);
        $ranks = rankmember::GetAll();
        $rank_name = "vô hạng";
        foreach($ranks as $group) {
                if($user->total_price >= $group->total) {
                    $rank_name = $group->name;
                }
            }
        $user->rank = $rank_name;

        foreach($detailUser as $value){
            $service = $this->ser->getCateId($value->id_service);
            $value->name = $user->name;
            $value->sdt = $user->sdt;
            $value->email = $user->email;
            $value->service = $service[0]->name;
        }
        $this->render("admin.UserDisplay.manageUser.detail",compact("detailUser","user"));
    }

    public function addServiceUser($id){
        $allCate = $this->category->getAllCategory();
        if(isset($_POST['btn-adduser'])){
            $service = $_POST['service'];
            $price = $_POST['price'];
            $errors = [];
            if(empty($_POST['service'])){
                $errors[] = 'Hãy chọn dịch vụ';
            }
            if(empty($_POST['price'])){
                $errors[] = 'Không để trống đơn giá dịch vụ';
            }

            if(count($errors) > 0){
                redirect('errors', $errors, 'add-serivce-user/' . $id);
            }else {
                $date = date("Y/m/d h:i:sa");
                $result = detailUser::addItems(
                    [
                        "id" =>  NULL,
                        "id_service" => $service,
                        "id_user" => $id,
                        "price" => $price,
                        "create_date" =>  $date,
                        "create_update" => NULL
                    ]
                );

                $datatotal = detailUser::findAllColumn($id,"id_user");
                $total = 0;
                foreach ($datatotal as $value){
                    $total += $value->price ;
                }
                Users::updatefind($id,[
                    "total_price" => $total
                ]);

                if ($result){
                    redirect('success', "Thêm thành công!", 'chi-tiet-nguoi-dung?id='.$id);
                }
            }
        }

        $this->render("admin.UserDisplay.manageUser.addDetailService",compact("allCate"));
    }

    public function getservice($id){
        $allservice =  $this->ser->getAllCateId($id);
        $data = json_encode($allservice);
        print_r($data);
    }
//edit

    public function deleteServiceUser($id,$backpage){
        $total = Users::findOne($backpage)->total_price;
        $priceDelete = detailUser::findOne($id)->price;
        $amount_money = $total - $priceDelete;
        Users::updatefind($backpage,[
            "total_price" => $amount_money
        ]);
        detailUser::delete($id);
        $_SESSION['success'] = "Xóa thành công!";
        header('location: '.route('chi-tiet-nguoi-dung?id=' .$backpage ));
    }
}
?>
