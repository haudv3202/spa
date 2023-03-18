<?php
namespace App\Controllers;
use App\Email;
use App\Models\Users;


class UsersController extends BaseController
{
    protected $user;

    public function __construct()
    {
        $this->user = new Users;
    }
    public function signup()
    {
        $err = [];
        if (isset($_POST['btn-signup'])) {
            if (empty($_POST['username'])) {
                $err[] = "Bạn chưa nhập username";
            }
            if (empty($_POST['password'])) {
                $err[] = "Bạn chưa nhập password";
            }
            if (empty($_POST['sdt'])) {
                $err[] = "Bạn chưa nhập sdt";
            }
            if (empty($_POST['email'])) {
                $err[] = "Bạn chưa nhập email";
            }
            if (count($err) > 0) {
                $err[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
            } else {
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $date = date("Y-m-d");
                Users::addItems([
                    'id' => NULL,
                    'name' => $_POST['username'],
                    'password' => $_POST['password'],
                    'sdt' => $_POST['sdt'],
                    'email' => $_POST['email'],
                    'image' => NULL,
                    'total_price' => NULL,
                    'address' => NULL,
                    'role_id' => 1,
                    'create_date' => $date,
                    'update_date' => NULL,
                ]);
                redirect('success', 'Đăng ký thành công', '');
            }
        }
        $this->render('users.signup', compact('err'));
    }
    public function forgot(){

        Email\Send_email('test', 'test php mailer', 'thanhnvph22301@gmail.com');
    }
    public function signout(){
        session_unset();
        header('location: '.route(''));
    }

    public function index()
    {
        $err = [];
        if (isset($_POST["btn-login"])) {
            $email = $this->user->index();
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
                        header('location: '.route('admin'));
                    }else{
                        header('location: '.route(''));
                    }
                }else{
                    redirect('errors', 'Tài khoản không tồn tại','sign-in');
                }
            }else{
                redirect('errors', $err, 'sign-in');
            }

        }
        $this->render("users.signin", compact("err"));
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
    public function updateProfile($id)
    {
        $oneData = Users::findOne($id);
        $this->render('users.updateProfile', compact('oneData'));
    }
    public function updateProfilepost($id)
    {
        if (isset($_POST['btn-profile'])) {
            $name =  $_POST['username'];
            $password = $_POST['password'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $address= $_POST['address'];
            $errors = [];
            if (empty($_POST['username'])) {
                $errors[] = 'Bạn cần nhập name';
            }
            if (empty($_POST['password'])) {
                $errors[] = 'Bạn cần nhập tên password';
            }
            if (empty($_POST['sdt'])) {
                $errors[] = 'Bạn cần nhập tên số điẹn thoại';
            }
            if (empty($_POST['email'])) {
                $errors[] = 'Bạn cần nhập tên email';
            }
            if (empty($_POST['address'])) {
                $errors[] = 'Bạn cần nhập tên địa chỉ';
            }
            if ($_FILES['image']['name'] != '') {
                $target_dir = "./public/upload/users/";
                $name = time() . $_FILES["image"]["name"];
                $target_file = $target_dir . $name;
                $image_old = Users::findOne($id)->image;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
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
                        $create_date = date('Y-m-d H:i a');
                        $update_date = date('Y-m-d H:i a');
                        $result = newLetters::updatefind($id, [
                            "username" => $name,
                            "password" => $password,
                            "sdt" => $sdt,
                            "email" => $email,
                            "image " => $_FILES['image']['name'] != '',
                            "address " => $address,
                            "create_date" => $create_date,
                            "update_date" => $create_date,

                        ]);
                        if (file_exists('./public/upload/users/'.$image_old)) {
                            unlink('./public/upload/users/'.$image_old);
                        }
                        if ($result) {
                            redirect('success', "Cập nhật thành công!", 'update-profile/' . $id);
                        }
                    }
                }
            }else{
                if (count($errors) > 0) {
                    redirect('errors', $errors, 'update-profile/' . $id);
                } else {
                    $create_date = date('Y-m-d H:i a');
                    $result = Users::updatefind($id, [
                        "username" =>$name,
                        "password" => $password,
                        "sdt" => $sdt,
                        "email" => $email,
                        "image " => $_FILES['image']['name'] != '',
                        "address " => $address,
                        "create_date" => $create_date,
                        "update_date" => $create_date
                    ]);

                    if ($result) {
                        redirect('success', "Cập nhật thành công!", 'update-profile/' . $id);
                    }
                }
            }
        }
    }
}