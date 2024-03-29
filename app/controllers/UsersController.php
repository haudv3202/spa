<?php
namespace App\controllers;
use App\models\Banner;
use App\models\BlogService;
use App\models\contactUs;
use App\models\insta;
use App\models\rankmember;
use App\models\Staff;
use App\models\Users;
use App\models\Service;
use App\models\Category;
use App\models\social;
//require_once 'vendor/phpmailer/sendmail.php';
class UsersController extends BaseController
{
    protected $user;
    protected $blog;
    protected $category;
    protected $email;
    protected $service;
    public function __construct()
    {
        $this->user = new Users();
        $this->blog = new BlogService();
        $this->service = new Service();
        $this->category =  new Category();
        $this->email = new sendmail();
    }
    public function signup()
    {
        $err = [];
        if (isset($_POST['btn-signup'])) {
            if (empty($_POST['username'])) {
                $err['username'] = "Bạn chưa nhập username";
            }
            if (empty($_POST['password'])) {
                $err['password'] = "Bạn chưa nhập password";
            }
            if (empty($_POST['sdt'])) {
                $err['phone'] = "Bạn chưa nhập số điện thoại";
            }
            if (empty($_POST['email'])) {
                $err['email'] = "Bạn chưa nhập email";
            }
            if ($_POST['repass'] != $_POST['password']){
                $err['pass'] = "Mật khẩu không trùng khớp";
            }
            if (count($err) > 0) {
                redirect('errors', $err, 'sign-up');
            } else {
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $date = date("Y-m-d");
                $this->user->addUser($_POST['username'],$_POST['password'],$_POST['sdt'],$_POST['email'],'avatar_default.jpg',1);
//                Users::addItems([
//                    'id' => NULL,
//                    'name' => ,
//                    'password' => ,
//                    'sdt' => ,
//                    'email' => ,
//                    'image' => NULL,
//                    'total_price' => NULL,
//                    'address' => NULL,
//                    'role_id' => 1,
//                    'create_date' => $date,
//                    'update_date' => NULL,
//                ]);
                redirect('success', 'Đăng ký thành công', 'sign-up');
            }
        }
        $this->render('auth.sign-up');
    }
    public function forgot(){
        if (isset($_POST['btn-forgot'])){
            $errors = [];
            if (empty($_POST['email'])){
                $errors[] = "Bạn cần nhập email";
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'forgot');
            }else{
                $result = $this->user->checkEmail($_POST['email']);
                if ($result == true){
                    echo $this->email->Send_email('FORGOT PASSWORD', 'Mật khẩu cũ của bạn là: '.$result->password, $result->email);
                    echo "<script>alert('Vui lòng kiểm tra lại hộp thư email')</script>";
                }else{
                    echo "<script>alert('Email không tồn tại trên hệ thống vui lòng kiểm tra lại')</script>";
                }
            }
        }
        $this->render('auth.forgot');
    }
    public function signout(){
        session_unset();
        header('location: '.route(''));
    }

    public function index()
    {
        $err = [];
        if (isset($_POST["btn-signin"])) {
            if (empty($_POST['email'])) {
                $err["email"] = "Bạn chưa nhập Email";
            }
            if (empty($_POST['password'])) {
                $err["password"] = "Bạn chưa nhập Password";
            }
            if (count($err) == 0) {
                $checkAcc = $this->user->checkAccount($_POST['email'],$_POST['password']);
                if (is_object($checkAcc)){
                    $_SESSION['account'] = $checkAcc;
                    if ($checkAcc->role_id == 2){
                        header('location: '.route('user'));
                    }else{
                        header('location: '.route(''));
                    }
                }else{
                    $err[] = 'Tài khoản không tồn tại';
                    redirect('errors',$err ,'sign-in');
                }
            }else{
                redirect('errors', $err, 'sign-in');
            }
        }
        $this->render("auth.sign-in");
    }

    public function dashboard()
    {
        if (isset($_SESSION['account'])) {
            if ($_SESSION['account']->role_id != 2) {
                header('location:'.route(''));
            } else {
                return $this->render('admin.home.adminIndex');
            }
        }else{
            header('location:'.route(''));
        }
    }


    public function updateProfiles(){
        $this->render('users.updateProfile');
    }
    public function updateProfilepost($id){
        $oneAll = Users::findOne($id);
        $ranks =  rankmember::GetAll();
        $rank_name = "vô hạng";
        foreach($ranks as $group) {
            if($oneAll->total_price >= $group->total) {
                $rank_name = $group->name;
            }
        }
        $oneAll->rank = $rank_name;


        if(isset($_POST["btn-profile"])){
            $target_dir = "./public/upload/avatar/";
            $name = time() . $_FILES["image"]["name"];
            $target_file = $target_dir . $name;
            $image_old = Users::findOne($id)->image;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $errors = [];
            if (empty($_POST['username'])) {
                $errors[]  = "Bạn chưa nhập họ và tên";
            }
            if (empty($_POST['sdt'])) {
                $errors[]  = "Bạn chưa nhập số điện thoại";
            }
            if (empty($_POST['email'])) {
                $errors[]  = "Bạn chưa nhập email";
            }
            if (empty($_POST['email'])) {
                $errors[] = 'Bạn cần nhập tên email';
            }
            if (empty($_POST['address'])) {
                $errors[] = 'Bạn cần nhập tên địa chỉ';
            }
            if(!empty($_POST['password'])){
                if ($_FILES['image']['name'] != '') {
                    if (file_exists($target_file)) {
                        $errors[] = "Sorry, file already exists.";
                    }
// Check file size
                    if ($_FILES["image"]["size"] > 500000) {
                        $errors[] = "Sorry, your file is too large.";
                    }
// Allow certain file formats
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif") {
                        $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    }
                    if (count($errors) > 0) {
                        redirect('errors', $errors, 'update-profile/' . $id);
                    } else {
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))  {
                            $update_date = date('Y-m-d H:i a');
                            $result = Users::updatefind($id, [
                                "name" => $_POST['username'],
                                "password" => $_POST['newpassword'],
                                "sdt" => $_POST['sdt'],
                                "email" => $_POST['email'],
                                "image " => $name,
                                "address " => $_POST['address'],
                                "update_date" => $update_date
                            ]);
                            if (file_exists('./public/upload/avatar/'.$image_old)) {
                                unlink('./public/upload/avatar/'.$image_old);
                            }
                            if ($result) {
                                unset($_SESSION['account']);
                                $_SESSION['account'] = Users::findOne($id);
                                redirect('success', "Cập nhật thành công!", 'update-profile/'. $id);
                            }
                        }
                    }
                }else{
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $date = date("Y-m-d");
                    $result = Users::updatefind($id,[
                        'name' => $_POST['username'],
                        'password' => $_POST['newpassword'],
                        'sdt' => $_POST['sdt'],
                        'email' => $_POST['email'],
                        'address' => $_POST['address'],
                        'update_date' => $date
                    ]);
                    if ($result) {
                        unset($_SESSION['account']);
                        $_SESSION['account'] = Users::findOne($id);
                        redirect('success', "Cập nhật thành công!", 'update-profile/' . $id);
                    }
                }
            }else {
                if ($_FILES['image']['name'] != '') {
                    if (file_exists($target_file)) {
                        $errors[] = "Sorry, file already exists.";
                    }
// Check file size
                    if ($_FILES["image"]["size"] > 500000) {
                        $errors[] = "Sorry, your file is too large.";
                    }
// Allow certain file formats
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif") {
                        $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    }
                    if (count($errors) > 0) {
                        redirect('errors', $errors, 'update-profile/' . $id);
                    } else {

                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))  {
                            $update_date = date('Y-m-d');
                            $result = Users::updatefind($id, [
                                "name" => $_POST['username'],
                                "password" => $oneAll->password,
                                "sdt" => $_POST['sdt'],
                                "email" => $_POST['email'],
                                "image " => $name,
                                "address " => $_POST['address'],
                                "update_date" => $update_date
                            ]);
                            if (file_exists('./public/upload/avatar/'.$image_old)) {
                                unlink('./public/upload/avatar/'.$image_old);
                            }
                            if ($result) {
                                unset($_SESSION['account']);
                                $_SESSION['account'] = Users::findOne($id);
                                redirect('success', "Cập nhật thành công!", 'update-profile/'. $id);
                            }
                        }
                    }
                }else{
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $date = date("Y-m-d");
                    $result = Users::updatefind($id,[
                        'name' => $_POST['username'],
                        'password' =>  $oneAll->password,
                        'sdt' => $_POST['sdt'],
                        'email' => $_POST['email'],
                        'address' => $_POST['address'],
                        'update_date' => $date
                    ]);
                    if ($result) {
                        unset($_SESSION['account']);
                        $_SESSION['account'] = Users::findOne($id);
                        redirect('success', "Cập nhật thành công!", 'update-profile/' . $id);
                    }
                }
            }

        }
        $this->render('users.updateProfile',compact("oneAll"));
    }

    public function ourTeam(){
        $datasocial = $this->socialPage();
        $dataAll = Staff::GetAll();
        $instagram = insta::GetAll();
        $posts = $this->blog->getPostslimit(3);
        foreach ($posts as $value){
            $value->name_service = $this->service->getAllServiceWhere($value->id_service)->name;
        }
        $this->render('home.ourteam',compact("dataAll","posts","instagram","datasocial"));
    }

    public function detailBlog($id){
        $datasocial = $this->socialPage();
        $detailPost = BlogService::findOne($id);
        $newBlog = $this->blog->getPostslimit(2);
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $detailPost->name_service = $this->service->getAllServiceWhere($detailPost->id_service)->name;
        $category = $this->category->getLimit();
        $this->render('home.detail',compact("detailPost","newBlog","category","datasocial","allService"));
    }

    public function contact(){
        $datasocial = $this->socialPage();
        $allcontact = contactUs::GetAll();
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $this->render('home.contactus',compact("allcontact","datasocial","allService"));
    }

    public function socialPage(){
        return social::GetAll();

    }
}