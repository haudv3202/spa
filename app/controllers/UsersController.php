<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\models\BlogService;
use App\Models\Service;
use App\Models\Users;
use App\models\detailUser;
use App\Models\Category;
use App\models\rankmember;
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
        foreach ($users as $value){
            foreach ($ranks as $data){
                if($value->total_price >= $data->total ){
                    $value->rank = $data->name;
                }
            }
        }

        $this->render("admin.UserDisplay.manageUser.listUser",compact("users","ranks"));
    }

    public function addUser(){
        if(isset($_POST["btn-adduser"])){
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
                $this->user->addUser($_POST['username'],$_POST['password'],$_POST['sdt'],$_POST['email'],$_POST['image'],$_POST['total_price'],1,$_POST['create_date'],$_POST['update_date'] );
                redirect("success","Thêm Thành Công","user");
            }

        }
        $this->render("users.add");
    }

    public function deleteUser($id){
        if(isset($id)){
            $this->user->deleteUser($id);
            redirect("success","Xóa Thành Công","user");
        }
    }

//    public function updateUser($id){
//        $showUpdate= $this->user->showUserUpdate($id);
//        if(isset($_POST["btn-updateuser"])){
//            $errors = [] ;
//           if (empty($_POST['username'])) {
//               $errors[]  = "Bạn chưa nhập họ và tên";
//            }
//            if (empty($_POST['password'])) {
//                $errors[]  = "Bạn chưa nhập mật khẩu";
//            }
//            if (empty($_POST['sdt'])) {
//                $errors[]  = "Bạn chưa nhập số điện thoại";
//            }
//            if (empty($_POST['email'])) {
//                $errors[]  = "Bạn chưa nhập email";
//            }
//            if (empty($_POST['total_price'])) {
//                $errors[]  = "Bạn chưa nhập tổng giá";
//            }
//            if (empty($_POST['role_id'])) {
//                $errors[]  = "Bạn chưa nhập role";
//            }
//            if ($_FILES['image']['name'] != ''){
//                $target_dir = "./public/upload/user/";
//                $name = time() . $_FILES["image"]["name"];
//                $target_file = $target_dir . $name;
//                $image_old = Users::findOne($id)->image;
//                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//                if (file_exists($target_file)) {
//                    $errors[] = "Sorry, file already exists.";
//                }
//// Check file size
//                if ($_FILES["image"]["size"] > 500000) {
//                    $errors[] = "Sorry, your file is too large.";
//                }
//// Allow certain file formats
//                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//                    && $imageFileType != "gif") {
//                    $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//                }
//
//                if (count($errors) > 0) {
//                    redirect('errors', $errors, 'update-user/' . $id);
//                }else {
//                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
//                        date_default_timezone_set("Asia/Ho_Chi_Minh");
//                        $date = date("Y-m-d");
//                        $result = Users::updatefind($id,[
//                            'name' => $_POST['username'],
//                            'password' => $_POST['password'],
//                            'sdt' => $_POST['sdt'],
//                            'email' => $_POST['email'],
//                            'image' => $name,
//                            'address' => $_POST['address'],
//                            'role_id' => $_POST['role_id'],
//                            'update_date' => $date
//                        ]);
//                        if (file_exists('./public/upload/user/'.$image_old)) {
//                            unlink('./public/upload/user/'.$image_old);
//                        }
//                        if ($result) {
//                            redirect('success', "Cập nhật thành công!", 'update-user/'. $id);
//                        }
//                    }
//                }
//            }else{
//                date_default_timezone_set("Asia/Ho_Chi_Minh");
//                $date = date("Y-m-d");
//                $result = Users::updatefind($id,[
//                    'name' => $_POST['username'],
//                    'password' => $_POST['password'],
//                    'sdt' => $_POST['sdt'],
//                    'email' => $_POST['email'],
//                    'address' => $_POST['address'],
//                    'role_id' => $_POST['role_id'],
//                    'update_date' => $date
//                ]);
//                if ($result) {
//                    redirect('success', "Cập nhật thành công!", 'update-user/' . $id);
//                }
//            }
//        }
//        $this->render('users.updateusers',compact('showUpdate'));
//    }
// dịch vụ sử dụng
    public function detailUser(){
        $id = $_GET['id'];
        $detailUser = detailUser::findAllColumn($id,"id_user");
        $user = Users::findOne($id);
        foreach($detailUser as $value){
            $service = $this->ser->getCateId($value->id_service);
            $value->name = $user->name;
            $value->sdt = $user->sdt;
            $value->email = $user->email;
            $value->service = $service[0]->name;
        }
        $this->render("admin.UserDisplay.manageUser.detail",compact("detailUser"));
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
                $result = detailUser::addItems(
                    [
                        "id" =>  NULL,
                        "id_service" => $service,
                        "id_user" => $id,
                        "price" => $price,
                        "create_date" => null,
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