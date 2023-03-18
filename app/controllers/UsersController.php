<?php
namespace App\Controllers;

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
            if (count($err) > 0) {
                $err[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
            } else {
                $this->user->signup($_POST['username'], $_POST['password'], $_POST['sdt'], $_POST['email']);
                redirect('success', 'Đăng ký thành công', '');
            }
        }
        $this->render('users.signup', compact('err'));
    }
    public function signout(){
        session_unset();
        header('location: '.route('/'));
    }

    public function index()
    {

        $err = [];
        if (isset($_SESSION["login"])) {
            if ($_SESSION["login"]) {
                route("dashboard");
            }
        }

        if (isset($_POST["btn-login"])) {
            $email = $this->user->index();
            if (empty($_POST['email'])) {
                $err["email"] = "Bạn chưa nhập Email";
            }
            if (empty($_POST['password'])) {
                $err["password"] = "Bạn chưa nhập Password";
            }
            if (count($err) == 0) {
                foreach ($email as $item => $value) {
                    if ($_POST["email"] == $value->email && $_POST["password"] == $value->password) {
                        $_SESSION['account'] = $value;
                        $_SESSION["username"] = $value->name;
                        $_SESSION["login"] = true;
                        if (isset($_POST["remember"])) {
                            setcookie("email", $_POST["email"], time() + 86400, '/');
                            setcookie("pass", $_POST["password"], time() + 86400, '/');
                        }
                        if($value->role_id==0){
                            header('location:./admin');
                            redirect('success','Đăng nhập thành công','admin');
                        }
                        else{
                            echo "Đây là trang Client";
                            die();
                        }

                    } else {
                        echo "<script>alert('Dữ liệu nhập không chính xác')</script>";
                    }
                }
            }

        }
        $this->render("users.signin", compact("err"));
    }

    public function dashboard()

    {
        if ($_SESSION["login"] == false) {
            route("");
        }
        return $this->render('admin.home.adminIndex');
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